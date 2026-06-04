# API Specification

> Dokumentasikan setiap endpoint yang dikembangkan maupun yang dikonsumsi dari layanan eksternal.

---

## Register User

**Method:** `POST`

**URL:** `/api/v1/register`

**Deskripsi:** Mendaftarkan pengguna baru ke dalam sistem.

**Autentikasi Diperlukan:** `Tidak`

**Sumber:** `Internal System`

**Request Headers:**

```http
Content-Type: application/json
```

**Request Body:**

```json
{
  "name": "string",
  "email": "string",
  "password": "string"
}
```

**Response Sukses (200 OK):**

```json
{
  "status": "success",
  "message": "User registered successfully"
}
```

**Response Gagal:**

```json
{
  "status": "error",
  "message": "Email already exists"
}
```

---

## Login User

**Method:** `POST`

**URL:** `/api/v1/login`

**Deskripsi:** Login pengguna dan menghasilkan token autentikasi Laravel Sanctum.

**Autentikasi Diperlukan:** `Tidak`

**Sumber:** `Internal System`

**Request Headers:**

```http
Content-Type: application/json
```

**Request Body:**

```json
{
  "email": "string",
  "password": "string"
}
```

**Response Sukses (200 OK):**

```json
{
  "status": "success",
  "token": "Bearer Token"
}
```

**Response Gagal:**

```json
{
  "status": "error",
  "message": "Invalid credentials"
}
```

---

## Logout User

**Method:** `POST`

**URL:** `/api/v1/logout`

**Deskripsi:** Menghapus token autentikasi pengguna.

**Autentikasi Diperlukan:** `Ya`

**Sumber:** `Internal System`

**Request Headers:**

```http
Authorization: Bearer <token>
Content-Type: application/json
```

**Request Body:** `-`

**Response Sukses (200 OK):**

```json
{
  "status": "success",
  "message": "Logout successful"
}
```

**Response Gagal:**

```json
{
  "status": "error",
  "message": "Unauthorized"
}
```

---

## Search Movie

**Method:** `GET`

**URL:** `/api/v1/movies/search?title={movie_title}`

**Deskripsi:** Mencari film berdasarkan judul menggunakan OMDb API.

**Autentikasi Diperlukan:** `Ya`

**Sumber:** `Third-Party API — OMDb API`

**Request Headers:**

```http
Authorization: Bearer <token>
Content-Type: application/json
```

**Request Body:** `-`

**Response Sukses (200 OK):**

```json
{
  "status": "success",
  "data": [
    {
      "title": "Avengers Endgame",
      "year": "2019",
      "imdbID": "tt4154796",
      "poster": "url_poster"
    }
  ]
}
```

**Response Gagal:**

```json
{
  "status": "error",
  "message": "Movie not found"
}
```

---

## Get Movie Detail

**Method:** `GET`

**URL:** `/api/v1/movies/{imdbID}`

**Deskripsi:** Menampilkan informasi detail film berdasarkan IMDb ID.

**Autentikasi Diperlukan:** `Ya`

**Sumber:** `Third-Party API — OMDb API`

**Request Headers:**

```http
Authorization: Bearer <token>
Content-Type: application/json
```

**Request Body:** `-`

**Response Sukses (200 OK):**

```json
{
  "status": "success",
  "data": {
    "title": "Avengers Endgame",
    "year": "2019",
    "genre": "Action, Adventure",
    "director": "Anthony Russo",
    "rating": "8.4",
    "plot": "After the devastating events..."
  }
}
```

**Response Gagal:**

```json
{
  "status": "error",
  "message": "Movie not found"
}
```

---

## Add Favorite Movie

**Method:** `POST`

**URL:** `/api/v1/favorites`

**Deskripsi:** Menambahkan film ke daftar favorit pengguna.

**Autentikasi Diperlukan:** `Ya`

**Sumber:** `Internal System`

**Request Headers:**

```http
Authorization: Bearer <token>
Content-Type: application/json
```

**Request Body:**

```json
{
  "imdbID": "tt4154796",
  "title": "Avengers Endgame"
}
```

**Response Sukses (200 OK):**

```json
{
  "status": "success",
  "message": "Movie added to favorites"
}
```

**Response Gagal:**

```json
{
  "status": "error",
  "message": "Movie already exists in favorites"
}
```

---

## Get Favorite Movies

**Method:** `GET`

**URL:** `/api/v1/favorites`

**Deskripsi:** Menampilkan seluruh daftar film favorit milik pengguna.

**Autentikasi Diperlukan:** `Ya`

**Sumber:** `Internal System`

**Request Headers:**

```http
Authorization: Bearer <token>
Content-Type: application/json
```

**Request Body:** `-`

**Response Sukses (200 OK):**

```json
{
  "status": "success",
  "data": [
    {
      "id": 1,
      "imdbID": "tt4154796",
      "title": "Avengers Endgame"
    }
  ]
}
```

**Response Gagal:**

```json
{
  "status": "error",
  "message": "Unauthorized"
}
```

---

## Delete Favorite Movie

**Method:** `DELETE`

**URL:** `/api/v1/favorites/{id}`

**Deskripsi:** Menghapus film dari daftar favorit pengguna.

**Autentikasi Diperlukan:** `Ya`

**Sumber:** `Internal System`

**Request Headers:**

```http
Authorization: Bearer <token>
Content-Type: application/json
```

**Request Body:** `-`

**Response Sukses (200 OK):**

```json
{
  "status": "success",
  "message": "Movie removed from favorites"
}
```

**Response Gagal:**

```json
{
  "status": "error",
  "message": "Favorite movie not found"
}
```
