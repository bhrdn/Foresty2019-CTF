# John & Rock
John baru saja mengambil file zip rahasia milik temannya yang berasal dari china,
akan tetapi terdapat password pada file zip tersebut, sehingga john kesulitan untuk melihat isi dari
file tersebut, bisakah kamu membantu john untuk memecahkan masalah tersebut?

## solusi

    ~$ zip2john rocky.zip > hash.txt
    ~$ john --wordlist=/usr/share/wordlists/rockyou.txt hash.txt
   didaptkan password: chinese
didalam file tersebut terdapat file jpg yang merupakan Chinese Code, setelah berhasil men-decrypt didapatkan
plaintext: JHONYL3BAYY 
maka flagnya : **Foresty2019{JHONYL3BAYY}** 