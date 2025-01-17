<?php
 
namespace App\Twig;
 
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;
use RicardoFiorani\Matcher\VideoServiceMatcher;
 
class YoutubeExtension extends AbstractExtension
{
    private $youtubeParser;
 
    public function __construct()
    {
        $this->youtubeParser = new VideoServiceMatcher();
    }
 
    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/2.x/advanced.html#automatic-escaping
            new TwigFilter('youtube_thumbnail', [$this, 'youtubeThumbnail']),
            new TwigFilter('youtube_player', [$this, 'youtubePlayer']),
        ];
    }
 
    public function getFunctions(): array
    {
        return [
            new TwigFunction('function_name', [$this, 'doSomething']),
        ];
    }
//  envoyer une video miniature
    public function youtubeThumbnail($value)
    {
        $video = $this->youtubeParser->parse($value);
        return $video->getLargestThumbnail();
    }

    //  envoyer une player miniature

    public function youtubePlayer($value)
    {
        $video = $this->youtubeParser->parse($value);
        return $video->getEmbedCode('100%', 500, true, true);
    }
}