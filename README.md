# xml2test
A simple generic script to load XML file contents to MySQL DB. XMLEntities are to be listed inside 2-level XML file - first layer denoting the entity class and second level - items of the class.
PHP model class should be created for each entity type, with default values set for each of the fields you'd like to store in the DB. Those already existing real-estate-related models are just an example. Feel free to delete them, but leave BaseEntity class intact.
A complimentary generic schema generator included. And a slightly optimised schema.sql file as an example.
