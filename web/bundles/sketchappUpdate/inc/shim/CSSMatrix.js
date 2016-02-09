/**
 * @license -------------------------------------------------------------------
 *    module: CSSMatrix shim
 *       src: https://github.com/camupod/CSSMatrix
 *   authors: Cameron Lakenen & Arian Stolwijk
 * copyright: (c) 2013 Cameron Lakenen & Arian Stolwijk
 *   license: MIT
 * -------------------------------------------------------------------
 * Permission is hereby granted, free of charge, to any person
 * obtaining a copy of this software and associated documentation
 * files (the "Software"), to deal in the Software without
 * restriction, including without limitation the rights to use,
 * copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following
 * conditions:
 * 
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 */
 
/*
	-------------------------------------------------------------------
	matrix3d(a1, b1, c1, d1, a2, b2, c2, d2, a3, b3, c3, d3, a4, b4, c4, d4)
	-------------------------------------------------------------------
	a1	a2	a3	a4
	b1	b2	b3	b4
	c1	c2	c3	c4
	d1	d2	d3	d4
	-------------------------------------------------------------------
	https://github.com/jonbrennecke/CSSMatrix/blob/master/cssmatrix.js
	http://www.w3.org/TR/2009/WD-css3-2d-transforms-20090320/
	http://www.w3.org/TR/css3-3d-transforms/#cssmatrix-interface
	http://www.w3.org/TR/css3-transforms/
	http://www.w3.org/TR/geometry-1/
	-------------------------------------------------------------------
*/

if (self.WebKitCSSMatrix === 'function') {
	self.CSSMatrix = WebKitCSSMatrix;
} else {

(function() { "use strict";

var SMALL_NUMBER = 1e-6;

/**
 * CSSMatrix Shim
 * @constructor
 */
function CSSMatrix(string) {
	if (string === undefined) {
		return setIdentity(this);
	} else if (string === 'none') {
		return setIdentity(this);
	} else if (string instanceof CSSMatrix) {
		return clone(string);
	} else {
		var args = arguments;
		if (args.length) {
			if (args.length === 16) {
				return setMatrix3d(this, args);
			} else if (args.length === 6) {
				return setMatrix2d(this, args);
			}
		}
	}
	return this.setMatrixValue(string);
};

var proto = CSSMatrix.prototype;

// Transformations

function rotate(rx, ry, rz) {
	rx *= Math.PI / 180;
	ry *= Math.PI / 180;
	rz *= Math.PI / 180;

	var cosx = Math.cos(rx), sinx = -Math.sin(rx);
	var cosy = Math.cos(ry), siny = -Math.sin(ry);
	var cosz = Math.cos(rz), sinz = -Math.sin(rz);
	var m = new CSSMatrix();

	m.m11 = m.a = cosy * cosz;
	m.m12 = m.b = -cosy * sinz;
	m.m13 = siny;

	m.m21 = m.c = sinx * siny * cosz + cosx * sinz;
	m.m22 = m.d = cosx * cosz - sinx * siny * sinz;
	m.m23 = -sinx * cosy;

	m.m31 = sinx * sinz - cosx * siny * cosz;
	m.m32 = sinx * cosz + cosx * siny * sinz;
	m.m33 = cosx * cosy;

	return m;
};


function rotateAxisAngle(x, y, z, angle) {
	angle *= Math.PI / 360;

	var sinA = Math.sin(angle), cosA = Math.cos(angle), sinA2 = sinA * sinA;
	var length = Math.sqrt(x * x + y * y + z * z);

	if (length === 0) { // bad vector length, use something reasonable
		x = 0;
		y = 0;
		z = 1;
	} else {
		x /= length;
		y /= length;
		z /= length;
	}

	var x2 = x * x, y2 = y * y, z2 = z * z;

	var m = new CSSMatrix();
	m.m11 = m.a = 1 - 2 * (y2 + z2) * sinA2;
	m.m12 = m.b = 2 * (x * y * sinA2 + z * sinA * cosA);
	m.m13 = 2 * (x * z * sinA2 - y * sinA * cosA);
	
	m.m21 = m.c = 2 * (y * x * sinA2 - z * sinA * cosA);
	m.m22 = m.d = 1 - 2 * (z2 + x2) * sinA2;
	m.m23 = 2 * (y * z * sinA2 + x * sinA * cosA);
	
	m.m31 = 2 * (z * x * sinA2 + y * sinA * cosA);
	m.m32 = 2 * (z * y * sinA2 - x * sinA * cosA);
	m.m33 = 1 - 2 * (x2 + y2) * sinA2;
	
	m.m14 = m.m24 = m.m34 = 0;
	m.m41 = m.e = m.m42 = m.f = m.m43 = 0;
	m.m44 = 1;

	return m;
};

function clone(from) {
	var m = new CSSMatrix();
	m.m11 = m.a = from.m11;
	m.m12 = m.b = from.m12;
	m.m13 = from.m13;
	m.m14 = from.m14;
	
	m.m21 = m.c = from.m21;
	m.m22 = m.d = from.m22;
	m.m23 = from.m23;
	m.m24 = from.m24;
	
	m.m31 = from.m31;
	m.m32 = from.m32;
	m.m33 = from.m33;
	m.m34 = from.m34;
	
	m.m41 = m.e = from.m41;
	m.m42 = m.f = from.m42;
	m.m43 = from.m43;
	m.m44 = from.m44;
	return m;
};


function scale(x, y, z) {
	var m = new CSSMatrix();
	m.m11 = m.a = x;
	m.m22 = m.d = y;
	m.m33 = z;
	return m;
};


function skewX(angle) {
	angle *= Math.PI / 180;
	var m = new CSSMatrix();
	m.m21 = m.c = Math.tan(angle);
	return m;
};


function skewY(angle) {
	angle *= Math.PI / 180;
	var m = new CSSMatrix();
	m.m12 = m.b = Math.tan(angle);
	return m;
};


function determinant(m) {

	return m.m14 * m.m23 * m.m32 * m.m41
		 - m.m13 * m.m24 * m.m32 * m.m41
		 - m.m14 * m.m22 * m.m33 * m.m41
		 + m.m12 * m.m24 * m.m33 * m.m41
		 + m.m13 * m.m22 * m.m34 * m.m41
		 - m.m12 * m.m23 * m.m34 * m.m41
		 - m.m14 * m.m23 * m.m31 * m.m42
		 + m.m13 * m.m24 * m.m31 * m.m42
		 + m.m14 * m.m21 * m.m33 * m.m42
		 - m.m11 * m.m24 * m.m33 * m.m42
		 - m.m13 * m.m21 * m.m34 * m.m42
		 + m.m11 * m.m23 * m.m34 * m.m42
		 + m.m14 * m.m22 * m.m31 * m.m43
		 - m.m12 * m.m24 * m.m31 * m.m43
		 - m.m14 * m.m21 * m.m32 * m.m43
		 + m.m11 * m.m24 * m.m32 * m.m43
		 + m.m12 * m.m21 * m.m34 * m.m43
		 - m.m11 * m.m22 * m.m34 * m.m43
		 - m.m13 * m.m22 * m.m31 * m.m44
		 + m.m12 * m.m23 * m.m31 * m.m44
		 + m.m13 * m.m21 * m.m32 * m.m44
		 - m.m11 * m.m23 * m.m32 * m.m44
		 - m.m12 * m.m21 * m.m33 * m.m44
		 + m.m11 * m.m22 * m.m33 * m.m44;
};


function inverse(m) {
	var det = determinant(m);
	if (!det) {
		return false;
	}

	var m11 = m.m23 * m.m34 * m.m42 - m.m24 * m.m33 * m.m42 + m.m24 * m.m32 * m.m43 - m.m22 * m.m34 * m.m43 - m.m23 * m.m32 * m.m44 + m.m22 * m.m33 * m.m44,
		m12 = m.m14 * m.m33 * m.m42 - m.m13 * m.m34 * m.m42 - m.m14 * m.m32 * m.m43 + m.m12 * m.m34 * m.m43 + m.m13 * m.m32 * m.m44 - m.m12 * m.m33 * m.m44,
		m13 = m.m13 * m.m24 * m.m42 - m.m14 * m.m23 * m.m42 + m.m14 * m.m22 * m.m43 - m.m12 * m.m24 * m.m43 - m.m13 * m.m22 * m.m44 + m.m12 * m.m23 * m.m44,
		m14 = m.m14 * m.m23 * m.m32 - m.m13 * m.m24 * m.m32 - m.m14 * m.m22 * m.m33 + m.m12 * m.m24 * m.m33 + m.m13 * m.m22 * m.m34 - m.m12 * m.m23 * m.m34,

		m21 = m.m24 * m.m33 * m.m41 - m.m23 * m.m34 * m.m41 - m.m24 * m.m31 * m.m43 + m.m21 * m.m34 * m.m43 + m.m23 * m.m31 * m.m44 - m.m21 * m.m33 * m.m44,
		m22 = m.m13 * m.m34 * m.m41 - m.m14 * m.m33 * m.m41 + m.m14 * m.m31 * m.m43 - m.m11 * m.m34 * m.m43 - m.m13 * m.m31 * m.m44 + m.m11 * m.m33 * m.m44,
		m23 = m.m14 * m.m23 * m.m41 - m.m13 * m.m24 * m.m41 - m.m14 * m.m21 * m.m43 + m.m11 * m.m24 * m.m43 + m.m13 * m.m21 * m.m44 - m.m11 * m.m23 * m.m44,
		m24 = m.m13 * m.m24 * m.m31 - m.m14 * m.m23 * m.m31 + m.m14 * m.m21 * m.m33 - m.m11 * m.m24 * m.m33 - m.m13 * m.m21 * m.m34 + m.m11 * m.m23 * m.m34,

		m31 = m.m22 * m.m34 * m.m41 - m.m24 * m.m32 * m.m41 + m.m24 * m.m31 * m.m42 - m.m21 * m.m34 * m.m42 - m.m22 * m.m31 * m.m44 + m.m21 * m.m32 * m.m44,
		m32 = m.m14 * m.m32 * m.m41 - m.m12 * m.m34 * m.m41 - m.m14 * m.m31 * m.m42 + m.m11 * m.m34 * m.m42 + m.m12 * m.m31 * m.m44 - m.m11 * m.m32 * m.m44,
		m33 = m.m12 * m.m24 * m.m41 - m.m14 * m.m22 * m.m41 + m.m14 * m.m21 * m.m42 - m.m11 * m.m24 * m.m42 - m.m12 * m.m21 * m.m44 + m.m11 * m.m22 * m.m44,
		m34 = m.m14 * m.m22 * m.m31 - m.m12 * m.m24 * m.m31 - m.m14 * m.m21 * m.m32 + m.m11 * m.m24 * m.m32 + m.m12 * m.m21 * m.m34 - m.m11 * m.m22 * m.m34,

		m41 = m.m23 * m.m32 * m.m41 - m.m22 * m.m33 * m.m41 - m.m23 * m.m31 * m.m42 + m.m21 * m.m33 * m.m42 + m.m22 * m.m31 * m.m43 - m.m21 * m.m32 * m.m43,
		m42 = m.m12 * m.m33 * m.m41 - m.m13 * m.m32 * m.m41 + m.m13 * m.m31 * m.m42 - m.m11 * m.m33 * m.m42 - m.m12 * m.m31 * m.m43 + m.m11 * m.m32 * m.m43,
		m43 = m.m13 * m.m22 * m.m41 - m.m12 * m.m23 * m.m41 - m.m13 * m.m21 * m.m42 + m.m11 * m.m23 * m.m42 + m.m12 * m.m21 * m.m43 - m.m11 * m.m22 * m.m43,
		m44 = m.m12 * m.m23 * m.m31 - m.m13 * m.m22 * m.m31 + m.m13 * m.m21 * m.m32 - m.m11 * m.m23 * m.m32 - m.m12 * m.m21 * m.m33 + m.m11 * m.m22 * m.m33;

	return new CSSMatrix(
		m11 / det, m12 / det, m13 / det, m14 / det,
		m21 / det, m22 / det, m23 / det, m24 / det,
		m31 / det, m32 / det, m33 / det, m34 / det,
		m41 / det, m42 / det, m43 / det, m44 / det
	);
};


function multiply(m1, m2) {
	if (!(m2 instanceof CSSMatrix)) {
		return null;
	}

	var m11 = m2.m11 * m1.m11 + m2.m12 * m1.m21 + m2.m13 * m1.m31 + m2.m14 * m1.m41,
		m12 = m2.m11 * m1.m12 + m2.m12 * m1.m22 + m2.m13 * m1.m32 + m2.m14 * m1.m42,
		m13 = m2.m11 * m1.m13 + m2.m12 * m1.m23 + m2.m13 * m1.m33 + m2.m14 * m1.m43,
		m14 = m2.m11 * m1.m14 + m2.m12 * m1.m24 + m2.m13 * m1.m34 + m2.m14 * m1.m44,

		m21 = m2.m21 * m1.m11 + m2.m22 * m1.m21 + m2.m23 * m1.m31 + m2.m24 * m1.m41,
		m22 = m2.m21 * m1.m12 + m2.m22 * m1.m22 + m2.m23 * m1.m32 + m2.m24 * m1.m42,
		m23 = m2.m21 * m1.m13 + m2.m22 * m1.m23 + m2.m23 * m1.m33 + m2.m24 * m1.m43,
		m24 = m2.m21 * m1.m14 + m2.m22 * m1.m24 + m2.m23 * m1.m34 + m2.m24 * m1.m44,

		m31 = m2.m31 * m1.m11 + m2.m32 * m1.m21 + m2.m33 * m1.m31 + m2.m34 * m1.m41,
		m32 = m2.m31 * m1.m12 + m2.m32 * m1.m22 + m2.m33 * m1.m32 + m2.m34 * m1.m42,
		m33 = m2.m31 * m1.m13 + m2.m32 * m1.m23 + m2.m33 * m1.m33 + m2.m34 * m1.m43,
		m34 = m2.m31 * m1.m14 + m2.m32 * m1.m24 + m2.m33 * m1.m34 + m2.m34 * m1.m44,

		m41 = m2.m41 * m1.m11 + m2.m42 * m1.m21 + m2.m43 * m1.m31 + m2.m44 * m1.m41,
		m42 = m2.m41 * m1.m12 + m2.m42 * m1.m22 + m2.m43 * m1.m32 + m2.m44 * m1.m42,
		m43 = m2.m41 * m1.m13 + m2.m42 * m1.m23 + m2.m43 * m1.m33 + m2.m44 * m1.m43,
		m44 = m2.m41 * m1.m14 + m2.m42 * m1.m24 + m2.m43 * m1.m34 + m2.m44 * m1.m44;

	return new CSSMatrix(
		m11, m12, m13, m14,
		m21, m22, m23, m24,
		m31, m32, m33, m34,
		m41, m42, m43, m44
	);
};

// Helpers

/**
 * Set the specified matrix to the identity form
 *
 * @return {CSSMatrix} the matrix
 */
function setIdentity(m) {
	m.m11 = m.a = 1;
	m.m12 = m.b = 0;
	m.m13 = 0;
	m.m14 = 0;
	
	m.m21 = m.c = 0;
	m.m22 = m.d = 1;
	m.m23 = 0;
	m.m24 = 0;
	
	m.m31 = 0;
	m.m32 = 0;
	m.m33 = 1;
	m.m34 = 0;
	
	m.m41 = m.e = 0;
	m.m42 = m.f = 0;
	m.m43 = 0;
	m.m44 = 1;
	return m;
};

/**
 * Returns true of the given matrix is affine
 *
 * @return {boolean} affine
 */
function isAffine(m) {
	if (!(m.m13 || m.m14 || m.m23 || m.m24 || m.m31 || m.m32 || m.m33 !== 1 || m.m34 || m.m43 || m.m44 !== 1)) {
		return true;
	} else {
		return false;
	}
};


/**
 * The setMatrixValue method replaces the existing matrix with one computed
 * from parsing the passed string as though it had been assigned to the
 * transform property in a CSS style rule.
 * @param {String} string The string to parse.
 */

var rxPatternMatrix = /^matrix\((.*)\)/;
var rxPatternMatrix3d = /^matrix3d\((.*)\)/;

var setMatrix2d = function(m, parts) {
	m.m11 = m.a = parts[0];
	m.m12 = m.b = parts[1];
	m.m41 = m.e = parts[4];
	
	m.m21 = m.c = parts[2];
	m.m22 = m.d = parts[3];
	m.m42 = m.f = parts[5];
	return m;
};

var setMatrix3d = function(m, parts) {
	m.m11 = m.a = parts[0];
	m.m12 = m.b = parts[1];
	m.m13 = parts[2];
	m.m14 = parts[3];

	m.m21 = m.c = parts[4];
	m.m22 = m.d = parts[5];
	m.m23 = parts[6];
	m.m24 = parts[7];

	m.m31 = parts[8];
	m.m32 = parts[9];
	m.m33 = parts[10];
	m.m34 = parts[11];

	m.m41 = m.e = parts[12];
	m.m42 = m.f = parts[13];
	m.m43 = parts[14];
	m.m44 = parts[15];
	return m;
};

proto.setMatrixValue = function(string) {
	if (typeof string === 'string') {
		setIdentity(this);

		string = string.trim();
		if (string === 'none') {
			return this;
		}

		var parts = string.replace(/^.*\((.*)\)$/g, "$1").split(/\s*,\s*/);
		for (var i = parts.length; i--;) {
			parts[i] = parseFloat(parts[i]);
		}

		if (parts.length === 6 && rxPatternMatrix.test(string)) {
			return setMatrix2d(this, parts);
		} else if (parts.length === 16 && rxPatternMatrix3d.test(string)) {
			return setMatrix3d(this, parts);
		}
	}
	///
	throw new Error('Failed to execute \'setMatrixValue\' on \'CSSMatrix\': Failed to parse \'' + string + '\'');
};


/**
 * The multiply method returns a new CSSMatrix which is the result of this
 * matrix multiplied by the passed matrix, with the passed matrix to the right.
 * This matrix is not modified.
 *
 * @param {CSSMatrix} m2
 * @return {CSSMatrix} The result matrix.
 */
proto.multiply = function(m2) {
	return multiply(this, m2);
};


/**
 * The inverse method returns a new matrix which is the inverse of this matrix.
 * This matrix is not modified.
 */
proto.inverse = function() {
	return inverse(this);
};


/**
 * The translate method returns a new matrix which is this matrix post
 * multiplied by a translation matrix containing the passed values. If the z
 * component is undefined, a 0 value is used in its place. This matrix is not
 * modified.
 *
 * @param {number} x X component of the translation value.
 * @param {number} y Y component of the translation value.
 * @param {number=} z Z component of the translation value.
 * @return {CSSMatrix} The result matrix
 */
proto.translate = function(x, y, z) {
	z = z || 0;
	var m = clone(this);
	m.m41 = m.e = m.m11 * x + m.m21 * y + m.m31 * z + m.m41;
	m.m42 = m.f = m.m12 * x + m.m22 * y + m.m32 * z + m.m42;
	m.m43 = m.m13 * x + m.m23 * y + m.m33 * z + m.m43;
	m.m44 = m.m14 * x + m.m24 * y + m.m34 * z + m.m44;
	return m;
};


/**
 * The scale method returns a new matrix which is this matrix post multiplied by
 * a scale matrix containing the passed values. If the z component is undefined,
 * a 1 value is used in its place. If the y component is undefined, the x
 * component value is used in its place. This matrix is not modified.
 *
 * @param {number} x The X component of the scale value.
 * @param {number=} y The Y component of the scale value.
 * @param {number=} z The Z component of the scale value.
 * @return {CSSMatrix} The result matrix
 */
proto.scale = function(x, y, z) {
	if (!(y === +y)) y = x;
	if (!(z === +z)) z = 1;
	return multiply(this, scale(x, y, z));
};


/**
 * The rotate method returns a new matrix which is this matrix post multiplied
 * by each of 3 rotation matrices about the major axes, first X, then Y, then Z.
 * If the y and z components are undefined, the x value is used to rotate the
 * object about the z axis, as though the vector (0,0,x) were passed. All
 * rotation values are in degrees. This matrix is not modified.
 *
 * @param {number} rx The X component of the rotation value, or the Z component if the rotY and rotZ parameters are undefined.
 * @param {number=} ry The (optional) Y component of the rotation value.
 * @param {number=} rz The (optional) Z component of the rotation value.
 * @return {CSSMatrix} The result matrix
 */
proto.rotate = function(rx, ry, rz) {
	if (!(rx === +rx)) rx = 0;
	if (!(ry === +ry) && !(rz === +rz)) {
		rz = rx;
		rx = 0;
		ry = 0;
	}
	if (!(ry === +ry)) ry = 0;
	if (!(rz === +rz)) rz = 0;
	return multiply(this, rotate(rx, ry, rz));
};


/**
 * The rotateAxisAngle method returns a new matrix which is this matrix post
 * multiplied by a rotation matrix with the given axis and angle. The right-hand
 * rule is used to determine the direction of rotation. All rotation values are
 * in degrees. This matrix is not modified.
 *
 * @param {number} x The X component of the axis vector.
 * @param {number=} y The Y component of the axis vector.
 * @param {number=} z The Z component of the axis vector.
 * @param {number} angle The angle of rotation about the axis vector, in degrees.
 * @return {CSSMatrix} The result matrix
 */
proto.rotateAxisAngle = function(x, y, z, angle) {
	if (!(y === +y)) y = x;
	if (!(z === +z)) z = x;
	return multiply(this, rotateAxisAngle(x, y, z, angle));
};


/**
 * Returns a string representation of the matrix.
 * @return {string}
 */
proto.toString = function() {
	var m = this;
	var fix = function(val) {
		return val.toFixed(6);
	};
	if (isAffine(m)) {
		return 'matrix(' + [
			m.a, m.b,
			m.c, m.d,
			m.e, m.f
		].map(fix).join(', ') + ')';
	} else {
		return 'matrix3d(' + [
			m.m11, m.m12, m.m13, m.m14,
			m.m21, m.m22, m.m23, m.m24,
			m.m31, m.m32, m.m33, m.m34,
			m.m41, m.m42, m.m43, m.m44
		].map(fix).join(', ') + ')';
	}
};


// Defined in WebKitCSSMatrix, but not in the w3c draft

/**
 * Specifies a skew transformation along the x-axis by the given angle.
 *
 * @param {number} angle The angle amount in degrees to skew.
 * @return {CSSMatrix} The result matrix
 */
proto.skewX = function(angle) {
	return multiply(skewX(angle), this);
};

/**
 * Specifies a skew transformation along the x-axis by the given angle.
 *
 * @param {number} angle The angle amount in degrees to skew.
 * @return {CSSMatrix} The result matrix
 */
proto.skewY = function(angle) {
	return multiply(skewY(angle), this);
};

if (typeof exports !== 'undefined') {
	if (typeof module === 'object' && module.exports) {
		exports = module.exports = CSSMatrix;
	}
	exports.CSSMatrix = CSSMatrix;
} else {
	self.CSSMatrix = CSSMatrix;
}

})();

}