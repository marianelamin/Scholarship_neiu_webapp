# Web Application to show/add/edit Scholarships

There is the need of communicating the students all available scholarships that they could apply for.  Technology provides us with the perfect excuse to get our hands dirty.  *The idea is to design and develop a web application where students of a particular institution are able to search and obtain relevant information about the scholarships that are offered.  These new offers must be managed by financial aid staff at the institution.*

**A proposal:**
- Design a login system that enables Financial Aid staff edit the offers.
  1. Stores user and pwd (using hashes) in a database
  2. Define how to signup a new staff user
  3. Define how the password can be reset
- Design a database that will store relevant characteristics of the offer.
  1. Define what the tables will be and the relationship among them
  2. Define primary keys
  3. Define what the columns of each table will be as well as their type and max length.
- Design a portal where the students will be able to conduct the search, as well as the portal the staff will use to CRUD elements on the database.
  1. Front-end of: Login system
  2. Front-end of: Login system - forgot password and reset
  3. Front-end of: CRUD elements of the DB
  4. Front-end of: Start the search
  5. Front-end of: Display results from search
- Create functions that allow us to:
  1. create(C) elements in a particular table of the database.
  2. read(R) elements in a particular table of the database.
  3. update(U) elements in a particular table of the database. 
  4. delete(D) elements in a particular table of the database.
  5. compute a hash value to store the password.
