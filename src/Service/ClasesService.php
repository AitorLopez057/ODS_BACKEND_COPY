<?php

namespace App\Service;

use App\Repository\DimensionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ClasesService{

    private DimensionRepository $dimensionRepository;
    private EntityManagerInterface $entityManager;

    public function __construct(DimensionRepository $dimensionRepository, EntityManagerInterface $entityManager)
    {
        $this->dimensionRepository = $dimensionRepository;
        $this->entityManager = $entityManager;
    }
    public function getAllClases(): array
    {
        return $this->dimensionRepository->findAll();
    }

    public function updateDimension(int $id, array $data): JsonResponse
    {
        $dimension = $this->dimensionRepository->find($id);
        if (!$dimension) {
            return new JsonResponse(['message' => 'Dimensión no encontrada'], Response::HTTP_NOT_FOUND);
        }

        if (isset($data['nombre'])) {
            $dimension->setNombre($data['nombre']);
        }
     
        $this->entityManager->flush();

        return new JsonResponse(['message' => 'Iniciativa actualizada correctamente'], Response::HTTP_OK);
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