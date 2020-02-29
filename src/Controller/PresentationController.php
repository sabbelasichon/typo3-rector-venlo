<?php
declare(strict_types=1);


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class PresentationController extends AbstractController
{

    /**
     * @Route(path="/", name="homepage")
     * @return Response
     */
    public function indexAction(): Response
    {
        return $this->renderPresentation('rectorphp', 'Rector - instantly upgrades and instantly refactors the PHP code of your application');
    }

    private function renderPresentation(string $directory, string $pageTitle): Response
    {
        return $this->render('presentation.html.twig', ['finder' => $this->createFinderForDirectory($this->getMarkdownDirectory().$directory.DIRECTORY_SEPARATOR), 'directory' => $directory, 'pageTitle' => $pageTitle]);
    }

    private function createFinderForDirectory(string $directory): Finder
    {
        $finder = new Finder();
        $finder->files()->name('*.md')->notContains('~')->in($directory)->sortByName();

        return $finder;
    }

    private function getMarkdownDirectory(): string
    {
        return $this->getParameter('kernel.project_dir'). '/public/markdown/';
    }
}