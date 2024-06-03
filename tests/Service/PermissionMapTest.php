<?php

namespace MiaoxingTest\App\Test\Service;

use Miaoxing\App\Service\PermissionMap;
use Miaoxing\Plugin\Test\BaseTestCase;

/**
 * @internal
 */
final class PermissionMapTest extends BaseTestCase
{
    public function testGetMap()
    {
        $permissionMap = new PermissionMap();
        $this->assertIsArray($permissionMap->getMap());
    }

    public function testAdd()
    {
        $permissionMap = new PermissionMap();
        $permissionMap->add('test', ['read', 'write']);
        $this->assertSame(['read', 'write'], $permissionMap->getMap()['test']);
    }

    public function testPrefix()
    {
        $permissionMap = new PermissionMap();
        $permissionMap->prefix('admin', static function (PermissionMap $map) {
            $map->add('dashboard', ['read']);
        });
        $this->assertSame(['read'], $permissionMap->getMap()['admin/dashboard']);
    }

    public function testAddList()
    {
        $permissionMap = new PermissionMap();
        $permissionMap->addList('admin/products');
        $this->assertSame(['GET api/admin/products'], $permissionMap->getMap()['admin/products']);
    }

    public function testAddNew()
    {
        $permissionMap = new PermissionMap();
        $permissionMap->addNew('admin/products');
        $this->assertSame(
            ['GET api/admin/products/defaults', 'POST api/admin/products'],
            $permissionMap->getMap()['admin/products/new']
        );
    }

    public function testAddEdit()
    {
        $permissionMap = new PermissionMap();
        $permissionMap->addEdit('admin/products');
        $this->assertSame(
            ['GET api/admin/products/[id]', 'PATCH api/admin/products/[id]'],
            $permissionMap->getMap()['admin/products/[id]/edit']
        );
    }

    public function testAddDelete()
    {
        $permissionMap = new PermissionMap();
        $permissionMap->addDelete('admin/products');
        $this->assertSame(['DELETE api/admin/products/[id]'], $permissionMap->getMap()['admin/products/[id]/delete']);
    }

    public function testAddShow()
    {
        $permissionMap = new PermissionMap();
        $permissionMap->addShow('admin/products');
        $this->assertSame(['GET api/admin/products/[id]'], $permissionMap->getMap()['admin/products/[id]']);
    }
}
