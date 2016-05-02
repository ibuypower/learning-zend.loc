<?php

namespace Blog\Service;

use Blog\Model\Post;
use Blog\Model\PostInterface;
use Blog\Mapper\PostMapperInterface;

class PostService implements PostServiceInterface
{
    /**
     * @var \Blog\Mapper\PostMapperInterface
     */
    protected $postMapper;

    /**
     * @param PostMapperInterface $postMapper
     */
    public function __construct(PostMapperInterface $postMapper)
    {
        $this->postMapper = $postMapper;
    }

    /**
     * {@inheritDoc}
     */
    public function findPost($id)
    {
        return $this->postMapper->find($id);
    }

    /**
     * {@inheritDoc}
     */
    public function findALlPosts()
    {
        return $this->postMapper->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function savePost(PostInterface $post)
    {
        return $this->postMapper->save($post);
    }
}