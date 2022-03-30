# FontAwesome PHP Library (Free version of Font Awesome)

<aside>
💡 Made for the free version of Font Awesome

</aside>

### Get Started

- Go to : [https://fontawesome.com/](https://fontawesome.com/) and create an account
- Create an Icon Kit
- Get the ID of your Kit

### Usage

<aside>
💡 You can find simple examples in the example.php file

</aside>

Simply use the FontAwesome Class and pass your Kit ID, then you can call “print()” and pass the name of the icon you want.

For example :

```php
$icon = new FontAwesome(YOUR_KIT_ID);
$icon->print("heart");
```

<aside>
💡 The “print()” function handles multiple ways of passing the icon name. You can see some examples below.

</aside>

```php
$icon->print("heart");
$icon->print("fa-heart");
$icon->print("fa-solid fa-heart");
```

<aside>
⚠️ If one of your icons is not printing, be sure it is included in the free version of Font Awesome, and do not hesitate to use the “Web Inspector Tool” to be sure the final name that will be printed is the correct one. If you encounter an unexpected output, please open an issue so that I can fix them.

</aside>

### You can create your own aliases for icon names

```php
$icon = new FontAwesome(YOUR_KIT_ID, array(
	"user" => "fa-solid fa-user",
	"cart" => "fa-solid fa-cart-shopping"
));
$icon->print("cart");
```

<aside>
💡 This is useful for long default names, or to use abbreviations on most used icons

</aside>
