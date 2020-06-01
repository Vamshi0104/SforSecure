# SforSecure
Secure Password Suggester through PHP

We know that,Securing password is atmost requirement,wherein the attack by the intruders can be avoided.Hence,it is clear that the passwords are to be encrypted.
There are many Encryption Standards which are widely used over the network during data transfer.

> ### Some of the Encryption Standards are :
* **MD5** - The MD5 message-digest algorithm is a widely used hash function producing a 128-bit hash value.
* **SHA-1** - It is a cryptographic hash function which takes an input and produces a 160-bit hash value.
* **DES** - The Data Encryption Standard is a symmetric-key algorithm for the encryption of digital data. Although its short key length of 56 bits makes it too insecure for modern applications.
* **AES** - AES is a symmetric-key algorithm and a variant of Rijndael, with a fixed block size of 128 bits, and a key size of 128, 192, or 256 bits. 

> In this way there are many more Encryption Standards that is used to encrypt the data after appling any of the above standards on the data.
 
 #### Pros and Cons of using Secure Password (Encrypted Passwords): 
 

 |                             Pros                             |                                                      Cons                                                      |
|:------------------------------------------------------------:|:--------------------------------------------------------------------------------------------------------------:|
| Simple to implement and doesn't impact on applications.      | Limited to zero protection against application-level.                                                          |
|        More flexibility in what we choose to encrypt.        | Greater impact on performance,order of magnitude of keys to manage will disrupt DB functions (search, indexing, merge). |
| Highest protection-applied directly to each and every field. | Hugely disruptive to business applications since all DB functions need a priority mapping.                     |
### Working of Project
* The Application checks the Password Strength and also suggest some Valid secure Passwords.
* Thereby,Secure Passwords generated are by performing functions(Algorithms) like Hashing,Salting and some advance encryption techniques (SHA,DES,AES).
* Visit the Web-Link now to know your Current password strength,suggested Secure Passwords and more details.  

### Modules in the project:
* Password Strength Validator
* Secure Password Suggestion 

#### Password Strength : 
Password Strength is broadly classified into Strong,Medium and Weak based on the combination of alphanumeric and special character usage in the field .It indicates the strength of the password eneterd by the user wherein the strength of password is known while typying in the input field.
#### Secure Password Suggestion :
This Application provides you some passwords suggested based on the password entered and also name field data(unique).After performing,the salting with password the above some standards functionality using PHP is invoked thereby generates Secure Encrypted
Password.

>                                                     Happy Coding :)

