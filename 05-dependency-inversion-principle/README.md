# Dependency Inversion Principle

#### 1. High-level modules should not depend on low-level modules. Both should depend on abstractions.

#### 2. Abstractions should not depend on details. Details should depend on abstractions.

Which classes are high level, and which are low level? In general, the class that uses another class is the high level class.

The Dependency Inversion Principle promotes the usage of interfaces or abstract classes to represent dependencies, allowing high-level modules to depend on these abstractions rather than concrete implementations. This reduces the coupling between components, making the code more maintainable, testable, and adaptable to changes.

Classes that use other classes should both depend on abstractions and not directly on each other.

The Dependency Inversion Principle in PHP can be implemented using interfaces and / or abstract classes.

