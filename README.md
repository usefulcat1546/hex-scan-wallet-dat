# ABOUT
This script allows you to scan hexadecimal code for a wallet.dat and to extract a match if an address is found.

The best method to extract keys is pywallet.py : https://github.com/jackjack-jj/pywallet

This scrpt is only intended for "unrecoverable" wallets.

# REQUIREMENTS
---------------------
```
git clone https://github.com/usefulcat1546/hex-scan-wallet-dat
sudo apt install php nodejs npm -y
npm install
```

# CONFIGURE
---------------------
Replace wallet.dat by your wallet.dat

EDIT addresses.txt and replace by your addresses for each lines.

If you use another coin than Bitcoin, Litecoin or Dogecoin update line in scan.js :
```
var key = new CoinKey(new Buffer(secret, 'hex'), {private: 0x80, public: 0x00})
```

# RUN
```
php scan.php BTC/LTC/DOGE
```

# RESULT
If an address is found, a file will be created with your address.json and in it, the private key.

You can also check the console

