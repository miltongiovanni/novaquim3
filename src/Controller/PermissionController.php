<?php

namespace App\Controller;

use App\Entity\Perfiles;
use App\Entity\Permission;
use App\Form\PermissionType;
use App\Repository\PerfilesRepository;
use App\Repository\PermissionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/permisos')]
class PermissionController extends AbstractController
{
    public const MODULOS = ['ADMINISTRACIÓN', 'CONFIGURACIÓN', 'COMPRAS', 'PROVEEDORES', 'CLIENTES', 'TESORERÍA', 'CARTERA', 'PRODUCCIÓN', 'ENVASADO', 'KITS', 'INVENTARIOS', 'VENTAS'];
    #[Route('/', name: 'permission_index', methods: ['GET'])]
    public function index(PermissionRepository $permissionRepository, PerfilesRepository $perfilesRepository): Response
    {

        return $this->render('permission/index.html.twig', [
            'perfiles' => $perfilesRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'permission_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PermissionRepository $permissionRepository): Response
    {
        $permission = new Permission();
        $form = $this->createForm(PermissionType::class, $permission);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $permissionRepository->save($permission, true);

            return $this->redirectToRoute('permission_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('permission/new.html.twig', [
            'permission' => $permission,
            'form' => $form,
        ]);
    }

    #[Route('/{slug}', name: 'permission_show', methods: ['GET'])]
    public function show(PerfilesRepository $perfilesRepository, string $slug, PermissionRepository $permissionRepository): Response
    {
        $perfil = $perfilesRepository->findOneBy(['slug' => $slug]);
        $permission = [];
        return $this->render('permission/show.html.twig', [
            'permission' => $permission,
            'perfil' => $perfil,
            'modulos' => $this::MODULOS,
        ]);
    }

    #[Route('/{id}/edit', name: 'permission_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Permission $permission, PermissionRepository $permissionRepository): Response
    {
        $form = $this->createForm(PermissionType::class, $permission);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $permissionRepository->save($permission, true);

            return $this->redirectToRoute('permission_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('permission/edit.html.twig', [
            'permission' => $permission,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'permission_delete', methods: ['POST'])]
    public function delete(Request $request, Permission $permission, PermissionRepository $permissionRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$permission->getId(), $request->request->get('_token'))) {
            $permissionRepository->remove($permission, true);
        }

        return $this->redirectToRoute('permission_index', [], Response::HTTP_SEE_OTHER);
    }
}
