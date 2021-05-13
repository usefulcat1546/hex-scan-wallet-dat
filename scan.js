process.on('uncaughtException', function (err) {
});

var CoinKey = require('coinkey')

var arguments = process.argv
var secret = arguments[2]
var coin = arguments[3]

var key = new CoinKey(new Buffer(secret, 'hex'), {private: 0x80, public: 0x00})

if (coin == "BTC") {var key = new CoinKey(new Buffer(secret, 'hex'), {private: 0x80, public: 0x00})}
if (coin == "LTC") {var key = new CoinKey(new Buffer(secret, 'hex'), {private: 0xb0, public: 0x00})}
if (coin == "DOGE") {var key = new CoinKey(new Buffer(secret, 'hex'), {private: 0x9e, public: 0x1e})}

var address = key.publicAddress
console.log(address)
