// CC0 - Polyfill.io

Array.isArray = Array.isArray || function isArray(array) {
    return array && Object.prototype.toString.call(array) === '[object Array]';
};
// Array.prototype.every
Array.prototype.every = Array.prototype.every || function every(callback, scope) {
    for (var array = this, index = 0, length = array.length; index < length; ++index) {
        if (!callback.call(scope || window, array[index], index, array)) {
            break;
        }
    }
    return index === length;
};
// Array.prototype.filter
Array.prototype.filter = Array.prototype.filter || function filter(callback, scope) {
    for (var array = this, arrayB = [], index = 0, length = array.length, element; index < length; ++index) {
        element = array[index];
        if (callback.call(scope || window, element, index, array)) {
            arrayB.push(element);
        }
    }
    return arrayB;
};
// Array.prototype.forEach
Array.prototype.forEach = Array.prototype.forEach || function forEach(callback, scope) {
    for (var array = this, index = 0, length = array.length; index < length; ++index) {
        callback.call(scope || window, array[index], index, array);
    }
};
// Array.prototype.indexOf
Array.prototype.indexOf = Array.prototype.indexOf || function indexOf(searchElement) {
    for (var array = this, index = 0, length = array.length; index < length; ++index) {
        if (array[index] === searchElement) {
            return index;
        }
    }
    return -1;
};
// Array.prototype.lastIndexOf
Array.prototype.lastIndexOf = Array.prototype.lastIndexOf || function lastIndexOf(searchElement) {
    for (var array = this, index = array.length - 1; index > -1; --index) {
        if (array[index] === searchElement) {
            return index;
        }
    }
    return -1;
};
// Array.prototype.map
Array.prototype.map = Array.prototype.map || function map(callback, scope) {
    for (var array = this, arrayB = [], index = 0, length = array.length, element; index < length; ++index) {
        element = array[index];
        arrayB.push(callback.call(scope || window, array[index], index, array));
    }
    return arrayB;
};
// Array.prototype.reduce
Array.prototype.reduce = Array.prototype.reduce || function reduce(callback, initialValue) {
    var array = this,
        previousValue = initialValue || 0;
    for (var index = 0, length = array.length; index < length; ++index) {
        previousValue = callback.call(window, previousValue, array[index], index, array);
    }
    return previousValue;
};
// Array.prototype.reduceRight
Array.prototype.reduceRight = Array.prototype.reduceRight || function reduceRight(callback, initialValue) {
    var array = this,
        previousValue = initialValue || 0;
    for (var index = array.length - 1; index > -1; --index) {
        previousValue = callback.call(window, previousValue, array[index], index, array);
    }
    return previousValue;
};
// Array.prototype.some
Array.prototype.some = Array.prototype.some || function some(callback, scope) {
    for (var array = this, index = 0, length = array.length; index < length; ++index) {
        if (callback.call(scope || window, array[index], index, array)) {
            break;
        }
    }
    return index === length;
};
// Array.prototype.concat
Array.prototype.concat = Array.prototype.concat || function(v) {
	for (var n = 0; n < v.length; n++) this.push(v[n])
	return this;
};