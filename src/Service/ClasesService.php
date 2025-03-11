<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\ClaseRepository;


class ClasesService{

    private ClaseRepository $clasesRepository;

    public function __construct(ClaseRepository $clasesRepository)
    {
        $this->clasesRepository = $clasesRepository;
    }
    public function getAllClases(): array
    {
        return $this->clasesRepository->findAll();
    }

    public function deleteIniciativa(int $id): JsonResponse
    {
        $iniciativa = $this->iniciativaRepository->find($id);
        
        if (!$iniciativa) {
            return new JsonResponse(['message' => 'Iniciativa no encontrada'], Response::HTTP_NOT_FOUND);
        }
        
        $iniciativa->setEliminado(true);
        
        $this->entityManager->flush();
        
        return new JsonResponse(['message' => 'Iniciativa eliminada exitosamente'], Response::HTTP_OK);
    }
}