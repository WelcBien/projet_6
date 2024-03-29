<?php

namespace App\Entity\Treatment;

use Doctrine\ORM\Mapping as ORM;

trait SlugTreatment
{
    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }
}