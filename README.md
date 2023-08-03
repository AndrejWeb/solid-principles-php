# SOLID Principles

Check the examples below which make the principles easy to understand from theoretical perspective. They are in the section `Info & Usage & Everyday life examples`

## Formal Definitions

### Single Responsibility Principle
A class should have only one reason to change.
### Open-Closed Principle
Software entities (classes, modules, functions, etc.) should be open for extension, but closed for modification.
### Liskov Substitution Principle
Objects of a superclass should be replaceable with objects of its subclasses without affecting the correctness of the program.
### Interface Segregation Principle
A client should not be forced to depend on interfaces it does not use.
### Dependency Inversion Principle
High-level modules should not depend on low-level modules. Both should depend on abstractions. Abstractions should not depend on details. Details should depend on abstractions.

## Info & Usage & Everyday life examples

I created examples where each one of these principles is violated (file name is example_xxx_no.php) and examples where the principle is adhered to (file name is example_xxx_yes.php). I tried to use real world examples - cars analogy to be easier to understand the principles. Much easier than using class names like `Foo` and `Bar` for example.

Let me now give you funny / outside the box examples from everyday life, so you can get the idea behind the principles.

#### Solid Responsibility Principle
Imagine your significant other or one of your parents need to do both the shopping and making a lunch. This violates the SRP. The SRP suggests that 1 person should do 1 task. This means you will have to do the shopping, while your significant other makes the lunch. Or your father to do the shopping and your mother to make the lunch. Apply this analogy in programming. 1 class should perform 1 task (user CRUD operations for example, but not tasks like printing user data - this gets assigned to another class).

#### Open-Closed Principle
When we are born we inherit 50% of DNA from our father and 50% of DNA from our mother (I ain't a doctor, but I think I got this right :). We extended the DNA (open for extension), but we can't modify this DNA nor our parents DNA (closed for modification). For simplicity and reality, I won't go into dark areas like DNA-engineering. Similarly, in programming, when you extend a class, this class is suggested to be in its final form and closed for modification because if you modify it in the future it can create unknown cascading effects on other classes who have extended it. It can break the program. Think about something like Nintendo or Sony Playstation. You put a game, you play the game, but you don't modify the Nintendo or the Sony Playstation. This job was already done by the manufacturer.

#### Liskov Substitute Principle
Having a notorious reputation for being the most confusing principle :), we have to honor it with an example. This principle is even tricky to come up with an example. I'm kidding. :) Imagine you are a CEO 😎 and you have a factory which produces bicycles, motorcycles and cars. Programmatically looking, they are all subclasses of the superclass which can be called Vehicle. Violation of LSP would be if you expect bicycles, motorcycles and cars to have, let's say a button for starting the engine and gas pedal for acceleration. Bicycles do not have these features. This affects the correctness of the program. You as a CEO would advise your engineers to come up with a class Vehicle which subclasses would use all the suggested functionality in Vehicle and if necessary specific functionality will be added in each subclass. For instance in class Bicycle you can have method pedal(), in Motorcycle wheelie() and in Car accelerate(). The whole idea of LSP is when Vehicle is replaced by Bicycle, Motorcycle, Car (objects of Vehicle), the program to be still correct, or with other words, to not have weird results like gas tank on bicycle, 21 gears on car, 4 windows on motorcycle (would look cool though for protection). To give you a funny example for conclusion this is what the LSP wants to say: if you need to create a human, make sure it is indeed a human regardless of the color of the skin, religious and political beliefs. Don't try to create an alien as this would not fit the narrative. You don't know if this alien will behave in a malevolent way, or it will be a friendly Grey alien haha.

#### Interface Segregation Principle
Again let's imagine you're a CEO 😎 and your factory is designing chips for remote controllers. Your factory is producing 1 chip which has many functionalities for implementation like volume up, volume down, turn on, turn off, play, pause, stop, change channel, change temperature etc. Does TV need all of them like change temperature for example? Does AC need all of them, like change channel, change volume? There you go the answer. Instead of producing 1 chip with so many functionalities, it would be much better to produce 2 chips, 1 for remote TV controllers and 1 for remote AC controllers, each one with the required functionalities. This way you are not forcing devices to implement functionalities they don't need, only the ones they need.

#### Dependency Inversion Principle
Let's suppose you own a coffee shop (CEO vibes again) and you have people working for you. Let's suppose this existed in today's modern world => instead to use 1 coffee machine for different types of coffee, your employees need to use 3 different coffee machines for espresso, cappuccino and macchiato and each of them requires specific knowledge to operate the model and each model requires new learning how to operate it. Your employees' skills are tied to specific machines. Imagine you wanted to add a new coffee, you would need to buy 4th machine. Wouldn't it be much better if there was 1 machine for all types of coffees + your employees got trained by you and became skillful to make any type of coffee without depending on a specific machine. What if you came up with an abstraction - Coffee and Milk and every machine was forced to implement it. This way your employees would be able to work with both current, future old and future new machines. They won't depend on a specific model of the machine. That's the whole idea behind DIP. Invert the situation aka the dependency. Your program depends too much on something? Make it the other way around - to not depend on anything too concrete. Do not depend on specific things, but on abstractions. On the other hand, abstractions should not depend on details but the other way around - details should depend on abstractions. The abstractions - coffee and milk, the details - how much coffee and milk to add, when, how.

# The Bottom Line - Personal view, don't shoot the messenger :)

Using the SOLID principles is definitely a good thing which will make you a good developer who can develop robust solutions which can be maintained, incorporated, extended, expanded you name it. Using SOLID principles + other design patterns = divinity. :) We've all worked on that project where if you want to change something, you need to change it on 10 other places. If this is the case chances are close to 100% one or more of the SOLID principles were violated. This could be because of other developers who have previously worked on the project, or it could be because of your choices if you were the one who did this change in the past. I suggest to be ego-free programmer and to always learn and improve. No one was born a senior web developer, you become one.

Is not using SOLID principles a sin? No, it's not a sin. If you work on a project on your own, and you know for a fact you'd be the sole developer on it, then you can choose to use or not use SOLID. However, you would have to deal with the consequences of this choice. Another example: some legacy enterprise project old 10+ years on which many developers have worked on it, and it's obvious SOLID principles were violated. In this scenario, rewriting the entire project to use SOLID can be very expensive for the company, so you just have to follow what's already there and play the deck of cards you were given, to put it like this.

A rule of thumb would be to use SOLID if you can and to assess the situation what makes most sense. For example, violating the SRP by writing a class which performs 2-3 tasks if this class hardly ever changes in the future isn't that big of a deal. However, if this class code changes frequently and new things are being added, then you should definitely apply the SRP and divide the tasks into separate classes.

Learn, adapt, evolve. Programming is a live material. Things can and do change. See what's the best approach when this happens.

Non-technical people mostly are interested the things to simply work as expected. Technical people shall write code in a way in which they want to see code when they land a new project. The "treat others how you want to be treated" type of deal.

I discussed these things from being an open-minded person perspective. I hope you are one too. I'm not giving you permission to neither not use SOLID nor I'm forcing you to must use SOLID. This permission is on you to give it to yourself or not. With this said, open-mindedness demonstrated. :)
