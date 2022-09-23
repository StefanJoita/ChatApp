# ChatApp
The purpose of this project is to implement, using Kubernetes and different backend technologies, database and frontend, a chat app.

The project is implemented using multiple deployments over Kubernetes. The architecture of this application will includes:
1. The actual website, hosted on a content management system (Wordpress with 5 replicas). The site will be exposed on the default port (80).
2. The CMS system use its own database(MySql)
3. The chat system is inserted into the web page using an html iframe. The code for this is
located on a web server (Php + Apache) with 5 replicas. Chat is be exposed on port 88.
4. Chat messages are stored in a database (CouchDB).
