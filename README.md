# Hulu Search

This is a small class for making requests to Hulu Search. 

## Example

    $search = new Hulu_Search();`
    // Search for 'white collar' and return the first 20 results in JSON.
    $result = $search->search(20, 1, 'white collar');

## Disclosure

This is unofficial and uses a method not endorsed by Hulu. As such, I have
little doubt that this would be frowned upon. I wrote it, with the purpose of using it in a small project, and no intent to harm Hulu.