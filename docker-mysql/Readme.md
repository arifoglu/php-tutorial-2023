* Note:To install mysql on Docker

1.Download Docker 

2.Set up an account on Docker Hub

3.Run Docker and Download image

4.Start MySQL image

5.Connect to database and run SQL

You can look at this video: https://youtu.be/kphq2TsVRIs?si=ZlO-nhZ2_zO3bcaX

# We get this code from Docker Hub :

                    docker run --name some-mysql -e MYSQL_ROOT_PASSWORD=my-secret-pw -d mysql:tag

* We will change some things (container name , password , mysql tag ...)   

                    docker run --name arifoglu-mysql -p 3306:3306 -e MYSQL_ROOT_PASSWORD=arifoglu -d mysql:5.7

* We have to open MySQl WORKBENCH in our local machine.
We'll be connect from localhost to mySql via MySQL workbench.                    