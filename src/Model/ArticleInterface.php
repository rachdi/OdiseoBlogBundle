<?php

namespace Odiseo\BlogBundle\Model;

use Doctrine\Common\Collections\Collection;
use Sylius\Component\Resource\Model\ArchivableInterface;
use Sylius\Component\Resource\Model\CodeAwareInterface;
use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TimestampableInterface;
use Sylius\Component\Resource\Model\ToggleableInterface;
use Sylius\Component\Resource\Model\TranslatableInterface;
use Sylius\Component\Resource\Model\TranslationInterface;

/**
 * @author Diego D'amico <diego@odiseo.com.ar>
 */
interface ArticleInterface extends
    ResourceInterface,
    CodeAwareInterface,
    TimestampableInterface,
    ToggleableInterface,
    ArchivableInterface,
    TranslatableInterface,
    ImagesAwareInterface
{
    /**
     * @return string
     */
    public function getSlug();

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @return string
     */
    public function getContent();

    /**
     * @return string
     */
    public function getMetaKeywords();

    /**
     * @return string
     */
    public function getMetaDescription();

    /**
     * @param ArticleCategoryInterface $category
     */
    public function addCategory(ArticleCategoryInterface $category);

    /**
     * @param ArticleCategoryInterface $category
     */
    public function removeCategory(ArticleCategoryInterface $category);

    /**
     * @param ArticleCategoryInterface $category
     */
    public function hasCategory(ArticleCategoryInterface $category);

    /**
     * @return Collection|ArticleCategoryInterface
     */
    public function getCategories();

    /**
     * @param string|null $locale
     *
     * @return ArticleTranslationInterface
     */
    public function getTranslation(?string $locale = null): TranslationInterface;
}
