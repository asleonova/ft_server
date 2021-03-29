# ft_server

Dockerfile sets up the nginx server. It must run a Wordpress with a MySQL database and and PHPMyAdmin.

## Usage:

Make sure Docker Desktop is running and you are in the ft_server directory.

To build the docker image, run :

```
docker build -t my_server .
```

The image is now created (*my_server* is its name). To start an instance of it, run :

```
docker run -d -p 80:80 -p 443:443 --name container my_server
```
*container* - will be the name of your container, it's possible not to specify and get the default one.

### What now ?

You should now be able to access the nginx welcome page at the address https://localhost or within your ip address

If you don't know your ip adress, run:
```
docker-machine ip
```

The different services are accessible at https://localhost/wordpress and https://localhost/phpmyadmin.
