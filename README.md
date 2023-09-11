## Placestocoordinates Laravel Package

The PlacesToCoordinates Laravel package simplifies geolocation tasks by effortlessly obtaining latitude and longitude coordinates based on addresses. It provides a convenient way to perform places-to-coordinates conversions in Laravel applications.

### Features

-   Obtain latitude and longitude coordinates from addresses with ease.
-   Seamlessly integrate geolocation functionality into your Laravel projects.
-   Simplify geocoding tasks for various use cases.

### Installation

To get started with the PlacesToCoordinates Laravel package, follow these steps:

-   Install the package via Composer:

```bash
composer require psalmsin1759/placestocoordinates
```

-   Publish the package configuration:

```bash
php artisan vendor:publish --provider="Psalmsin1759\PlacesToCoordinates\CoordinatesServiceProvider"
```

-   Configure your Google Maps API key:
    Open the .env file and set your Google Maps API key.

```bash
GEOCODING_API_KEY=
```

### Usage

Once the package is installed and configured, you can use it to obtain coordinates from addresses:

```bash
use Psalmsin1759\Addresstocoordinates\Coordinates;

$address = "1600 Amphitheatre Parkway, Mountain View, CA";
$coordinates = Coordinates::getCoordinates($address);

// Access latitude and longitude
$latitude = $coordinates->latitude;
$longitude = $coordinates->longitude;

// Use latitude and longitude as needed

```

### Contributing

Contributions to this Laravel package are welcome! Please read our contribution guidelines for more details.

### License

The Addresstocoordinates Laravel package is open-source software licensed under the MIT License.

### Support

If you encounter any issues or have questions, please feel free to create an issue on GitHub.

Feel free to customize the README further by adding sections like "Testing," "Changelog," "Credits," or any other relevant information about your package.
