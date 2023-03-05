<?php

namespace Miaoxing\App\Service;

use Miaoxing\Plugin\BaseService;

/**
 * @mixin \EventPropMixin
 * @experimental
 */
class PermissionMap extends BaseService
{
    /**
     * @var array
     */
    protected $map = [];

    /**
     * @var string
     */
    protected $prefix = '';

    /**
     * @return array
     */
    public function getMap(): array
    {
        if (!$this->map) {
            $this->event->trigger('permissionGetMap', $this);
        }
        return $this->map;
    }

    /**
     * @param string $prefix
     * @param callable $callable
     * @return $this
     */
    public function prefix(string $prefix, callable $callable): self
    {
        $this->prefix = $prefix;
        $callable($this);
        $this->prefix = '';
        return $this;
    }

    public function add($permission, $permissions): self
    {
        $permission = $this->addPrefix($permission);
        $this->map[$permission] = (array) $permissions;
        return $this;
    }

    public function addList(string $basePath = '', array $additional = []): self
    {
        [$scope, $resource] = $this->parse($this->addPrefix($basePath));
        return $this->add($basePath, array_merge([
            $this->buildGet($scope, $resource),
        ], $additional));
    }

    public function addNew(string $basePath = '', array $additional = []): self
    {
        [$scope, $resource] = $this->parse($this->addPrefix($basePath));
        return $this->add($basePath . '/new', array_merge([
            $this->buildGet($scope, $resource, 'defaults'),
            $this->buildPost($scope, $resource),
        ], $additional));
    }

    public function addEdit(string $basePath = '', array $additional = []): self
    {
        [$scope, $resource] = $this->parse($this->addPrefix($basePath));
        return $this->add($basePath . '/[id]/edit', array_merge([
            $this->buildGet($scope, $resource, '[id]'),
            $this->buildPatch($scope, $resource, '[id]'),
        ], $additional));
    }

    public function addDelete(string $basePath = '', array $additional = []): self
    {
        [$scope, $resource] = $this->parse($this->addPrefix($basePath));
        return $this->add($basePath . '/[id]/delete', array_merge([
            $this->buildDelete($scope, $resource, '[id]'),
        ], $additional));
    }

    public function addShow(string $basePath = '', array $additional = []): self
    {
        [$scope, $resource] = $this->parse($this->addPrefix($basePath));
        return $this->add($basePath . '/[id]', array_merge([
            $this->buildGet($scope, $resource, '[id]'),
        ], $additional));
    }

    protected function addPrefix(string $basePath): string
    {
        if ($this->prefix && $basePath) {
            return $this->prefix . '/' . ltrim($basePath, '/');
        } else {
            return $this->prefix . $basePath;
        }
    }

    protected function parse(string $permission): array
    {
        return explode('/', $permission, 3);
    }

    protected function buildGet(string $scope, string $resource, string $more = null): string
    {
        return $this->build('GET', $scope, $resource, $more);
    }

    protected function buildPost(string $scope, string $resource, string $more = null): string
    {
        return $this->build('POST', $scope, $resource, $more);
    }

    protected function buildPut(string $scope, string $resource, string $more = null): string
    {
        return $this->build('PUT', $scope, $resource, $more);
    }

    protected function buildPatch(string $scope, string $resource, string $more = null): string
    {
        return $this->build('PATCH', $scope, $resource, $more);
    }

    protected function buildDelete(string $scope, string $resource, string $more = null): string
    {
        return $this->build('DELETE', $scope, $resource, $more);
    }

    protected function build(string $method, string $scope, string $resource, string $more = null): string
    {
        return $method . ' api/' . ($scope ? ($scope . '/') : '') . $resource . ($more ? ('/' . $more) : '');
    }
}
