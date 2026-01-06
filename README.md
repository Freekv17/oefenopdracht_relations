1. Clone het project
2. Kopieer .env.example naar .env
3. Voer `composer install` uit
4. Voer `php artisan key:generate` uit
5. Voer `php artisan migrate --seed` uit.

In deze opdracht hebben we een opzet gemaakt van een boeken review systeem. Het systeem bevat **Books**, **Reviews** en **Genres**. De database staat hier al voor maar de models ontbreken.

1. Maak een ERD van dit project. Kijk goed naar hoe de migrations ingesteld zijn.
2. Maak de models aan voor deze entities.
3. Vul de code van de models aan zodat de relaties goed geconfigureerd zijn.
4. Voer `php artisan test` uit en kijk of alle tests goed doorlopen. Als er errors in staan, zul je die nog op moeten lossen. Geen errors, is opdracht voltooid!
