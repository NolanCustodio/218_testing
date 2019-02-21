# Dictionary of Coding Concepts

### abstract

- Classes

    A class that may or may not have abstract methods in it. An abstract class can't be instantiated but children classes can be created off it

- Methods

    A method declared without an implementation

### "composer dumb-autoload"

For composer, it needs to be entered into the terminal after the creation of a new class.

It allows the new class and composer to work together

### declare()

PHP.net defines **declare()** as:

> used to set execution directives for a block of code.

**declare()** takes 1 of 3 available directives and applies that behavior to the block of code below it.

The 3 directives it can take are *ticks*, *encoding* or *strict_types*

### extends

Creates a child of another class

The child class has the attributes and methods of its parent class with some of its own too

### final

When added to a class it means it cannot be extended

### Objects

**Objects** are the nouns of programs. They hold properties, attributes and methods and each applies differently to every instance of the object you make

### public

Allows the class or method to be accessible from anywhere

### private

Restricts the class or method so that it can only be accessed from that class

### Statics

**Statics** are the verbs of programs. They don't have their own instances but instead have methods that can be applied to multiple classes