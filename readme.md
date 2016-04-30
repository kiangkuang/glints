# Glints Project
Hosted on https://glints-project.herokuapp.com

## Web UI
Scraping a existing skill will update database with new information.

Book pages will show all books related to the searched skill.

- [/scrape](https://glints-project.herokuapp.com/scrape): To scrape Amazon for books related to a skill
- [/book](https://glints-project.herokuapp.com/book): To list all books
- [/book?skill=javascript](https://glints-project.herokuapp.com/book?skill=javascript): To search for books related to `javascript`

## API Endpoints
API will return books information.

https://glints-project.herokuapp.com/api

- GET `/api`: Lists all books
- GET `/api/1`: Shows book with `id = 1`
- GET `/api/skill/javascript`: List all books with `skill = javascript`
- POST `/api`: Create new book. With the below attributes.
	- `title`: Title of the book
	- `description`: Description of the book
	- `author`: Author of the book
	- `bio`: Author's bio
	- `price`: Price of book. Eg. `12.34`
	- `rating`: Rating out of 5. Eg. `4.5`
	- `image`: URL of book image
	- `url`: URL of book
	- `skill`: Skill related to book. Eg. `javascript`
- PUT/PATCH `/api/1`: Update book with `id = 1` with supplied attribute key and value.
- DELETE `/api/1`: Delete book with `id = 1`
