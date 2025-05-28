# GeoZint CTF Tool 🌍🕵️

**GeoZint Tool** is a lightweight PHP-based platform to test geolocation and OSINT (Open Source Intelligence) skills using images.  
Users are challenged to find GPS coordinates from visual clues or metadata, and submit their answers via the web interface.

---

## 🔧 Configuration

All challenge configuration is done in the `config.php` file:

```php
<?php
$correctValues = [
    [LAT, LNG], // challenge 0 solution
    ...
];

$images = [
    "image0.jpg",
    "image1.jpg",
    ...
];

$flags = [
    "FLAG{...}", // challenge 0 flag
    ...
];

$accepted_error = 20; // accepted error in meters

$lang = "en"; // or "fr"
```

`$correctValues`: array of `[latitude, longitude]` coordinates for each challenge.

`$images`: array of image filenames used for the challenges.

`$flags`: flags to reveal when the user submits a correct location.

`$accepted_error`: how precise the location must be (in meters).

`$lang`: interface language, `"en"` or `"fr"`.


## 🖼️ Hosting Images Properly (CORS Warning)

For security reasons (CORS), images must be hosted on the same origin as the application.
That means you cannot open the project with file://, or the browser will block access to images.

You must serve the project using a local web server (with PHP).


## ▶️ Accessing Challenges
Challenges are accessible via the challId parameter in the URL:

Challenge 0: index.php?challId=0

Challenge 1: index.php?challId=1

...

Each challenge will show the corresponding image and expect the user to enter GPS coordinates. If they are within the accepted range, the flag is displayed.

---

## 📄 License
This project is licensed under the GNU General Public License v3.0 (GPL-3.0).
You are free to use, modify, and distribute the code under the terms of this license.

## 🤝 Contributions
Contributions are very welcome!
Feel free to open issues or submit pull requests to improve the project.

## 👤 Maintainer and Creator
The maintainer and creator of this project is Baptiste Rébillard.