# ABOUT
This script allows you to scan hexadecimal code for a wallet.dat and to extract a match if an address is found

# REQUIREMENTS
---------------------
```
sudo apt install php nodejs npm -y
npm install coinkey
```

# CONFIGURE
---------------------
Replace wallet.dat by your wallet.dat
EDIT addresses.txt and replace by your addresses for each lines
If you use another coin than Dogecoin update line :
```
var key = new CoinKey(new Buffer(secret, 'hex'), {private: 0x9e, public: 0x1e})
```

# RUN
```
php scan.php
```

# RESULT
If an address is found, a file will be created with your address.json and in it, the private key.
You can also check the console

# CRASH
If the script quits, open status.txt delete the lines before this string in db.txt

