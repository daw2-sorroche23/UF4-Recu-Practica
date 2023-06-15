<?php

namespace App\Entity;

use App\Repository\AddressesmariagilRepository;
use Doctrine\ORM\Mapping as ORM;
use Twig\Environment;

#[ORM\Entity(repositoryClass: AddressesmariagilRepository::class)]
class Addressesmariagil
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $street = null;

    #[ORM\Column(length: 255)]
    private ?string $city = null;

    #[ORM\Column(length: 255)]
    private ?string $state = null;

    public function __construct(Environment $twig)
    {
        $loader = $twig->getLoader();
        if ($loader->exists('theme/layout_responsive.html.twig')) {
            // the template exists, do something
            // ...
        }
        
    }


    public function someMethod()
    {
        // ...

        $htmlContents = $this->twig->render('product/index.html.twig', [
            'category' => '...',
            'promotions' => ['...', '...'],
        ]);
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }
}