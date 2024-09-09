const isEven = require('./isEven');
test('should return true for even numbers', () => { expect(isEven(2)).toBe(true);
});
test('should return false for odd numbers', () => { expect(isEven(3)).toBe(false);
});