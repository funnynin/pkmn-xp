## Objective

Build a simple Laravel application that connects to the [PokéAPI](https://pokeapi.co/) and returns details about a Pokémon by its name and optionally other attributes. This task is designed to introduce you to the PHP and Laravel ecosystem, especially routing, controllers, and HTTP requests.

---

## Requirements

### 1. Set Up Laravel

- Create a new Laravel project using your preferred setup (Laravel Sail, Valet, XAMPP, etc.).

### 2. Create a Route

- Define a route that listens to:\
  `GET /pokemon/{name}`\
  Example request:\
  `/pokemon/pikachu`

### 3. Connect to PokéAPI

- Use the PokéAPI endpoint:\
  [`https://pokeapi.co/api/v2/pokemon/{name}`](https://pokeapi.co/api/v2/pokemon/{name})
- Fetch Pokémon details based on the `{name}` parameter.

### 4. Return JSON Response

- The response should include:
  ```json
  {
    "name": "pikachu",
    "base_experience": 112,
    "height": 4,
    "weight": 60,
    "types": ["electric"]
  }
  ```

## Git

Please use a git repository and commit often, please don't commit the entire project in one go as it makes reviewing it difficult.
