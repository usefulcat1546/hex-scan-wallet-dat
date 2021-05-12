process.on('uncaughtException', function (err) {
});

var arguments = process.argv
var CoinKey = require('coinkey')

var secret = arguments[2]
var key = new CoinKey(new Buffer(secret, 'hex'), {private: 0x9e, public: 0x1e})
var address = key.publicAddress
console.log(address)
