<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Quiz", mappedBy="category")
     */
    private $quizes;


    public function __construct()
    {
        $this->quizes = new ArrayCollection();
        $this->answers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }

    /**
     * @return Collection|Quiz[]
     */
    public function getQuizes(): Collection
    {
        return $this->quizes;
    }

    public function addQuize(Quiz $quize): self
    {
        if (!$this->quizes->contains($quize)) {
            $this->quizes[] = $quize;
            $quize->setCategory($this);
        }

        return $this;
    }

    public function removeQuize(Quiz $quize): self
    {
        if ($this->quizes->contains($quize)) {
            $this->quizes->removeElement($quize);
            // set the owning side to null (unless already changed)
            if ($quize->getCategory() === $this) {
                $quize->setCategory(null);
            }
        }

        return $this;
    }


}
