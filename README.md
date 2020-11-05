# Setup Guidelines

A web-development project basic Event Management system.

### Software Requirements

1. Install [xampp](https://www.apachefriends.org/download.html) in order to host the project in local machine
2. Install [nodejs](https://nodejs.org/en/download/) for running some part of the project in the node js backend development.


```bash
pip install foobar
```

### Database setup in XAMPP server

1. Start the XAMPP Server in the local machine

2. Import the Project file provided here to the [filepath](C:\xampp\htdocs) i.e htdocs where the xampp folder which will be located most probably in the C drive.

3. Create two databases in the [PHPMYADMIN](http://localhost/phpmyadmin) named test2 and nodelogin

   1. Import vote.sql and adminlogin.sql to the ***test2*** database.
   2. import accounts.sql to the ***nodelogin*** database. 

---
**NOTE**

All the SQL files are located in SQL folder

---

### Setting up NodeJS server.

1. Start the nodejs server
2. Run the given commands one by one in the Command Prompt
   1. Changing the cmd path directory to where the nodejs folder is located. (Assuming the folder is in C drive)
   2. Run the login.js to start the server

```bash
cd C:\
```
```bash
node login.js
```

## Running the Project

### Passwords for each Admin login pages

| Login Type | Username |  Password |
|------------|:--------:|----------:|
| Angular JS |  harish  |  angular  |
| PHP        |  harish  |  php      |
| Express JS |  harish  |  express  |

### Running on server
The project from [localhost](http://localhost/project/) in XAMPP Server

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
