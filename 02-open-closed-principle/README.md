# Open-Closed Principle

#### Software entities (classes, modules, functions, etc.) should be open for extension, but closed for modification.

OCP suggests that once a class or module is defined and implemented, it should be closed for modifications to avoid breaking existing code. However, it should be open for extension, meaning we can add new features or behavior by extending or subclassing it without changing its existing code.

Imagine a system in which a single change has multiple consequences. You update a method in a class which is called from many other classes and in turn many more. That single update had a cascading effect. The objective of OCP is to minimize or completely remove the cascading of effects.