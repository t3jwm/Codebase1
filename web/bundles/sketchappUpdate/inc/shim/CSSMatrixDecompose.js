/**
 * @license -------------------------------------------------------------------
 *    module: CSSMatrix.decompose
 *       src: https://github.com/joelambert/morf/
 *    author: Joe Lambert
 * copyright: (c) 2011 Joe Lambert <http://www.joelambert.co.uk>
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

(function() {

	function Vector4(x, y, z, w) { // 4 dimensional vector
		this.x = x || 0;
		this.y = y || 0;
		this.z = z || 0;
		this.w = w || 0;
	};
	
	var proto = Vector4.prototype;

	proto.length = function() { // Get the length of the vector
		return Math.sqrt(this.x * this.x + this.y * this.y + this.z * this.z);
	};

	proto.normalise = function() { // Get a normalised representation of the vector
		var len = this.length();
		return new Vector4(this.x / len, this.y / len, this.z / len);
	};

	proto.dot = function(v) { // Dot-Product
		return this.x * v.x + this.y * v.y + this.z * v.z + this.w * v.w;
	};

	proto.cross = function(v) { // Cross-Product
		return new Vector4(this.y * v.z - this.z * v.y, this.z * v.x - this.x * v.z, this.x * v.y - this.y * v.x);
	};

	/**
	 *
	 * A Javascript implementation of pseudo code available from http://www.w3.org/TR/css3-2d-transforms/#matrix-decomposition
	 * @param {Vector4} aPoint A 3D point
	 * @param {float} ascl
	 * @param {float} bscl
	 * @author Joe Lambert
	 * @returns {Vector4}
	 */

	proto.combine = function(aPoint, ascl, bscl) {
		return new Vector4(
			(ascl * this.x) + (bscl * aPoint.x),
			(ascl * this.y) + (bscl * aPoint.y),
			(ascl * this.z) + (bscl * aPoint.z)
		);
	};



	function CSSMatrixDecomposed(obj) { // Object containing the decomposed components of a matrix
		obj = obj || {};
		var components = {
			perspective: null,
			translate: null,
			skew: null,
			scale: null,
			rotate: null
		};
		for (var i in components) {
			this[i] = obj[i] ? obj[i] : new Vector4();
		}
	};
	
	var proto = CSSMatrix.prototype;

	proto.transformVector = function(v) {
		// TODO: Do we need to mod this for Vector4?
		return new Vector4(
			this.m11*v.x + this.m12*v.y + this.m13*v.z,
			this.m21*v.x + this.m22*v.y + this.m23*v.z,
			this.m31*v.x + this.m32*v.y + this.m33*v.z
		);
	};

	proto.point3d = function(v) { // Transform a Vector4 object using the current matrix
		var vec = new Vector4(
			this.m11 * v.x + this.m21 * v.y + this.m31 * v.z + this.m41,
			this.m12 * v.x + this.m22 * v.y + this.m32 * v.z + this.m42,
			this.m13 * v.x + this.m23 * v.y + this.m33 * v.z + this.m43,
			this.m14 * v.x + this.m24 * v.y + this.m34 * v.z + this.m44
		);
		return vec;
	};

	proto.transpose = function() { // Transposes the matrix
		var matrix = new CSSMatrix();
		var n = 0;
		var m = 0;
		for (n = 0; n <= 4 - 2; n++) {
			for (m = n + 1; m <= 4 - 1; m++) {
				matrix['m' + (n + 1) + (m + 1)] = this['m' + (m + 1) + (n + 1)];
				matrix['m' + (m + 1) + (n + 1)] = this['m' + (n + 1) + (m + 1)];
			}
		}
		return matrix;
	};

	proto.determinant = function() { // Calculates the determinant
		return this.m14 * this.m23 * this.m32 * this.m41 - this.m13 * this.m24 * this.m32 * this.m41 -
			this.m14 * this.m22 * this.m33 * this.m41 + this.m12 * this.m24 * this.m33 * this.m41 +
			this.m13 * this.m22 * this.m34 * this.m41 - this.m12 * this.m23 * this.m34 * this.m41 -
			this.m14 * this.m23 * this.m31 * this.m42 + this.m13 * this.m24 * this.m31 * this.m42 +
			this.m14 * this.m21 * this.m33 * this.m42 - this.m11 * this.m24 * this.m33 * this.m42 -
			this.m13 * this.m21 * this.m34 * this.m42 + this.m11 * this.m23 * this.m34 * this.m42 +
			this.m14 * this.m22 * this.m31 * this.m43 - this.m12 * this.m24 * this.m31 * this.m43 -
			this.m14 * this.m21 * this.m32 * this.m43 + this.m11 * this.m24 * this.m32 * this.m43 +
			this.m12 * this.m21 * this.m34 * this.m43 - this.m11 * this.m22 * this.m34 * this.m43 -
			this.m13 * this.m22 * this.m31 * this.m44 + this.m12 * this.m23 * this.m31 * this.m44 +
			this.m13 * this.m21 * this.m32 * this.m44 - this.m11 * this.m23 * this.m32 * this.m44 -
			this.m12 * this.m21 * this.m33 * this.m44 + this.m11 * this.m22 * this.m33 * this.m44;
	};

	// Javascript implementation of the pseudo code available from http://www.w3.org/TR/css3-2d-transforms/#matrix-decomposition
	proto.decompose = function() { // Decomposes the matrix into its component parts.

		// compare to
		// http://www.w3.org/TR/css3-transforms/#interpolation-of-2d-matrices
		var matrix = new CSSMatrix(this.toString());
		var perspectiveMatrix;
		var rightHandSide;
		var inversePerspectiveMatrix;
		var transposedInversePerspectiveMatrix;
		var perspective;
		var translate;
		var row;
		var scale;
		var skew;
		var pdum3;
		var rotate;
		///
		if (matrix.m33 === 0) { // Return the identity matrix
			return new CSSMatrixDecomposed(new CSSMatrix().decompose());
		}
		///
		for (var i = 1; i <= 4; i++) { // Normalize the matrix.
			for (j = 1; j <= 4; j++) {
				matrix['m' + i + j] /= matrix.m44;
			}
		}
		// perspectiveMatrix is used to solve for perspective, but it also provides
		// an easy way to test for singularity of the upper 3x3 component.
		perspectiveMatrix = matrix;
		for (var i = 1; i <= 3; i++) {
			perspectiveMatrix['m' + i + '4'] = 0;
		}
		perspectiveMatrix.m44 = 1;
		if (perspectiveMatrix.determinant() === 0) {
			return new CSSMatrixDecomposed(new CSSMatrix().decompose()); // Return the identity matrix
		}
		// First, isolate perspective.
		if (matrix.m14 != 0 || matrix.m24 != 0 || matrix.m34 != 0) {
			// rightHandSide is the right hand side of the equation.
			rightHandSide = new Vector4(matrix.m14, matrix.m24, matrix.m34, matrix.m44);
			// Solve the equation by inverting perspectiveMatrix and multiplying
			// rightHandSide by the inverse.
			inversePerspectiveMatrix = perspectiveMatrix.inverse();
			transposedInversePerspectiveMatrix = inversePerspectiveMatrix.transpose();
			perspective = transposedInversePerspectiveMatrix.transformVector(rightHandSide);
			// Clear the perspective partition
			matrix.m14 = matrix.m24 = matrix.m34 = 0;
			matrix.m44 = 1;
		} else {
			// No perspective.
			perspective = new Vector4(0, 0, 0, 1);
		}
		// Next take care of translation
		translate = new Vector4(matrix.m41, matrix.m42, matrix.m43);
		matrix.m41 = 0;
		matrix.m42 = 0;
		matrix.m43 = 0;
		// Now get scale and shear. 'row' is a 3 element array of 3 component vectors
		row = [
			new Vector4(), new Vector4(), new Vector4()
		];
		for (i = 1; i <= 3; i++) {
			row[i - 1].x = matrix['m' + i + '1'];
			row[i - 1].y = matrix['m' + i + '2'];
			row[i - 1].z = matrix['m' + i + '3'];
		}
		// Compute X scale factor and normalize first row.
		scale = new Vector4();
		skew = new Vector4();
		scale.x = row[0].length();
		row[0] = row[0].normalise();
		// Compute XY shear factor and make 2nd row orthogonal to 1st.
		skew.x = row[0].dot(row[1]);
		row[1] = row[1].combine(row[0], 1.0, -skew.x);
		// Now, compute Y scale and normalize 2nd row.
		scale.y = row[1].length();
		row[1] = row[1].normalise();
		skew.x /= scale.y;
		// Compute XZ and YZ shears, orthogonalize 3rd row
		skew.y = row[0].dot(row[2]);
		row[2] = row[2].combine(row[0], 1.0, -skew.y);
		skew.z = row[1].dot(row[2]);
		row[2] = row[2].combine(row[1], 1.0, -skew.z);
		// Next, get Z scale and normalize 3rd row.
		scale.z = row[2].length();
		row[2] = row[2].normalise();
		skew.y /= scale.z;
		skew.y /= scale.z;
		// At this point, the matrix (in rows) is orthonormal.
		// Check for a coordinate system flip.  If the determinant
		// is -1, then negate the matrix and the scaling factors.
		pdum3 = row[1].cross(row[2])
		if (row[0].dot(pdum3) < 0) {
			for (i = 0; i < 3; i++) {
				scale.x *= -1;
				row[i].x *= -1;
				row[i].y *= -1;
				row[i].z *= -1;
			}
		}
		// Now, get the rotations out
		rotate = new Vector4();
		rotate.y = Math.asin(-row[0].z);
		if (Math.cos(rotate.y) != 0) {
			rotate.x = Math.atan2(row[1].z, row[2].z);
			rotate.z = Math.atan2(row[0].y, row[0].x);
		} else {
			rotate.x = Math.atan2(-row[2].x, row[1].y);
			rotate.z = 0;
		}
		return new CSSMatrixDecomposed({
			perspective: perspective,
			translate: translate,
			skew: skew,
			scale: scale,
			rotate: rotate
		});
	};

})();