<?php

namespace Instagram\SDK\DTO\General\Media;

/**
 * Class ImageVersions2
 *
 * @package Instagram\SDK\DTO\General\Media
 */
final class ImageVersions2
{

    /**
     * @var \Instagram\SDK\DTO\General\Media\Image[]
     */
    private $candidates;

    /**
     * @return Image[]
     */
    public function getCandidates()
    {
        return $this->candidates;
    }
}
