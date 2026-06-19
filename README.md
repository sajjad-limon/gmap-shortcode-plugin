# Easy Google Map Shortcode Plugin

A simple, lightweight WordPress plugin that allows you to display Google Maps anywhere using a shortcode.

## Features

- Easy to use shortcode
- Display Google Maps for any location
- Control map width and height
- Adjust map zoom level
- Works inside posts, pages, and widgets

---

## Installation

1. Upload the plugin folder to:

```
wp-content/plugins/
```

2. Activate the plugin from:

**WordPress Dashboard → Plugins → Easy Google Map Shortcode → Activate Plugin **

---

## Usage

Use the following shortcode:

```text
[gmap]
```

By default, the plugin will load the predefined location.

---

## Supported Parameters

| Parameter | Description | Example |
|------------|-------------|---------|
| `place` | Location to display on the map | `Berlin, Germany` |
| `width` | Width of the map | `600px`, `100%` |
| `height` | Height of the map | `450px` |
| `zoom` | Controls the zoom level of the map | `10` |

---

## Examples

### Display a Map with Default Settings

```text
[gmap]
```

---

### Display a Specific Place

```text
[gmap place="Berlin, Germany"]
```

---

### Set Width and Height

```text
[gmap place="Berlin, Germany" width="600px" height="500px"]
```

---

### Set Zoom Level

```text
[gmap place="Berlin, Germany" zoom="12"]
```

---

### Full Example

```text
[gmap
    place="Berlin, Germany"
    width="600px"
    height="500px"
    zoom="12"
]
```

---

## Parameters Reference

### `place`

Specifies the location that should be shown on the map.

```text
[gmap place="Berlin, Germany"]
```

---

### `width`

Controls the width of the map.

```text
[gmap width="800px"]
```

or

```text
[gmap width="100%"]
```

---

### `height`

Controls the map height.

```text
[gmap height="500px"]
```

---

### `zoom`

Controls how close the map appears.

Typical values:

| Zoom Level | Description |
|------------|-------------|
| 1 | World View |
| 5 | Country View |
| 10 | City View |
| 15 | Streets and Neighborhoods |
| 18+ | Buildings and Details |

Example:

```text
[gmap zoom="15"]
```

---

## Example Combination

```text
[gmap place="London, United Kingdom" width="100%" height="400px" zoom="13"]
```

---

## Requirements

- WordPress 6.0+
- PHP 7.4+

---

## License

This plugin is released under the GPL v2 or later.

---

## Author

**Sajjad Limon**
