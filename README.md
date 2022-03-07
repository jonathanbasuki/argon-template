# Argon Template

## Full Documentation

- [CodeIgniter 4](https://codeigniter.com/user_guide/index.html)
- [Myth\Auth Library](https://github.com/lonnieezell/myth-auth)
- [Argon Template](https://www.creative-tim.com/learning-lab/bootstrap/quick-start/argon-dashboard)
- [CDN](https://cdnjs.com/libraries)

## User Level Greetings

```php
$name = explode(' ', user()->nama);

if (count($name) > 1) {
	$nama = ucwords(strtolower($name[array_key_first($name)] . ' ' . $name[array_key_last($name)]));
} else {
	$nama = ucwords(strtolower($name[array_key_first($name)]));
}
````

## Password Hash Myth\Auth

```php
password_hash(base64_encode(hash('sha384', password_here, true)), PASSWORD_DEFAULT, [10])
```
