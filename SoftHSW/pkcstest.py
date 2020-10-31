import os
import pkcs11

lib = pkcs11.lib('/usr/local/lib/softhsm/libsofthsm2.so')
token = lib.get_token(token_label='Token-1')

data = str(input("Give me some data to encrypt using AES: "))

with token.open(user_pin="QZgK3mDzkjRx9TEx") as session:
    key = session.generate_key(pkcs11.KeyType.AES, 256)

    iv = session.generate_random(128)

    crypttext = key.encrypt(data, mechanism_param=iv)

print("The following is your encrypted data")
print(crypttext)
