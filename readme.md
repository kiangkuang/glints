# Glints Project

Hosted on [Heroku](https://glints-project.herokuapp.com)

## Web UI
Book pages will only show books that are related to minimally 2 skills
- [/scrape](https://glints-project.herokuapp.com/scrape): To scrape Amazon for books related to a skill
- [/book](https://glints-project.herokuapp.com/book): To list all books
- [/book?skill=javascript](https://glints-project.herokuapp.com/book?skill=javascript): To search for books related to javascript

## API Endpoints

- GET `/api`: Lists all books
- GET `/api/1`: Shows book with `id = 1`
- POST `/api`: Create new book. Attributes: `title`, `description`, `author`, `bio`, `price` (eg. 12.34), `rating`: (eg. 4.5), `image` image url, `url` book url, `skill`
- PUT/PATCH `/api/1`: Update book with `id = 1` with supplied attribute key and values.
- DELETE `/api/1`: Delete book with `id = 1`
