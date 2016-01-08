PHP class that:

* Can be retrieved only as a singleton instance

* Can load a multidimensional array from a given file - you can choose your own file format 

for the array data.  

* Can flatten the array

* Can store the result to another given file

Then create another class which will extend the previous one in order to:

* Round any numerical values within it to the nearest whole number before saving.