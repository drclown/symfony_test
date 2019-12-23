<?php
// src/Entity/Article.php
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="article")
 * */
class Article
{
    /**
     * @var integer
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @var string
     * @Assert\NotBlank(message = "Un auteur doit être associé à l'article")
     */
    private $author;

    /**
     * @var string
     * @Assert\NotNull(message = "Le contenu ne peut être null.")
     * @Assert\NotBlank(message = "Le contenu ne peut être vide.")
     *
     * @ORM\Column(type="text")
     *
     */
    private $content;

    /**
     * @var string
     * @ORM\Column(type="datetime", name="date")
     * @Assert\Expression()
     */
    private $date;

    /**
     * @var string
     * @Assert\Length(
     *     min = 10,
     *     max = 70,
     *     minMessage = "Ce titre est trop court",
     *     maxMessage = "Ce titre est trop long"
     * )
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor(?string $author): void
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(?string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }

}
