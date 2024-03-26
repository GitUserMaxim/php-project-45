install:
	composer install
validate:
	composer validate
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
beauty:
	composer exec --verbose phpcbf -- --standard=PSR12 src bin
brain-even:
	bin/brain-even
brain-calc:
	bin/brain-calc
brain-gcd:
	bin/brain-gcd
brain-progression:
	bin/brain-progression
brain-prime:
	bin/brain-prime
brain-games:
	bin/brain-games
shit:
	vendor/bin/phpstan analyse --level 8 src