# obfuscated.py

def xor_encrypt_decrypt(data, key):
    return ''.join(chr(ord(c) ^ key) for c in data)

def check_flag(input_flag):
    encrypted_flag = "\x0b\x0f\x1a\x03\x14\x01\x19\x15\x00\x0f\x14\x03\x0c\x1a\x14\x01\x1a\x14\x0e"
    decrypted_flag = xor_encrypt_decrypt(encrypted_flag, 42)
    if input_flag == decrypted_flag:
        print("Congratulations, you found the flag!")
    else:
        print("Try again!")

if __name__ == "__main__":
    user_input = input("Enter the flag: ")
    check_flag(user_input)
