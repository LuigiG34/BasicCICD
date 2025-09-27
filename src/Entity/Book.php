<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookRepository::class)]
class Book
{
    #[ORM\Id, ORM\GeneratedValue, ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    private string $title = '';

    #[ORM\Column(length: 120)]
    private string $author = '';

    #[ORM\Column(length: 255)]
    private string $coverUrl = '';

    #[ORM\Column(type: 'datetime_immutable')]
    private \DateTimeImmutable $publishedAt;

    public function __construct() { $this->publishedAt = new \DateTimeImmutable(); }

    public function getId(): ?int { return $this->id; }

    public function getTitle(): string { return $this->title; }
    public function setTitle(string $t): self { $this->title = $t; return $this; }

    public function getAuthor(): string { return $this->author; }
    public function setAuthor(string $a): self { $this->author = $a; return $this; }

    public function getCoverUrl(): string { return $this->coverUrl; }
    public function setCoverUrl(string $u): self { $this->coverUrl = $u; return $this; }

    public function getPublishedAt(): \DateTimeImmutable { return $this->publishedAt; }
    public function setPublishedAt(\DateTimeImmutable $d): self { $this->publishedAt = $d; return $this; }
}
