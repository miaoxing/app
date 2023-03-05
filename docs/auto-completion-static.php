<?php

namespace Miaoxing\App\Service;

class GroupModel
{
    /**
     * Returns the success result with model data
     *
     * @param array|string|BaseResource|mixed $merge
     * @return Ret
     * @see GroupModel::toRet
     */
    public static function toRet($merge = []): \Wei\Ret
    {
    }

    /**
     * Set each attribute value, without checking whether the column is fillable, and save the model
     *
     * @param iterable $attributes
     * @return $this
     * @see GroupModel::saveAttributes
     */
    public static function saveAttributes(iterable $attributes = []): self
    {
    }

    /**
     * Returns the record data as array
     *
     * @param array|callable $returnFields A indexed array specified the fields to return
     * @param callable|null $prepend
     * @return array
     * @see GroupModel::toArray
     */
    public static function toArray($returnFields = [], callable $prepend = null): array
    {
    }

    /**
     * Return the record table name
     *
     * @return string
     * @see GroupModel::getTable
     */
    public static function getTable(): string
    {
    }

    /**
     * Import a PHP array in this record
     *
     * @param iterable $array
     * @return $this
     * @see GroupModel::fromArray
     */
    public static function fromArray(iterable $array): self
    {
    }

    /**
     * Save the record or data to database
     *
     * @param iterable $attributes
     * @return $this
     * @see GroupModel::save
     */
    public static function save(iterable $attributes = []): self
    {
    }

    /**
     * Delete the current record and trigger the beforeDestroy and afterDestroy callback
     *
     * @param int|string $id
     * @return $this
     * @see GroupModel::destroy
     */
    public static function destroy($id = null): self
    {
    }

    /**
     * Find a record by primary key, or throws 404 exception if record not found, then destroy the record
     *
     * @param string|int $id
     * @return $this
     * @throws \Exception when record not found
     * @see GroupModel::destroyOrFail
     */
    public static function destroyOrFail($id): self
    {
    }

    /**
     * Set the record field value
     *
     * @param string|int|null $name
     * @param mixed $value
     * @param bool $throwException
     * @return $this|false
     * @see GroupModel::set
     */
    public static function set($name, $value, bool $throwException = true)
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or false
     *
     * @param int|string|array|null $id
     * @return $this|null
     * @see GroupModel::find
     */
    public static function find($id): ?self
    {
    }

    /**
     * Find a record by primary key, or throws 404 exception if record not found
     *
     * @param int|string $id
     * @return $this
     * @throws \Exception
     * @see GroupModel::findOrFail
     */
    public static function findOrFail($id): self
    {
    }

    /**
     * Find a record by primary key, or init with the specified attributes if record not found
     *
     * @param int|string $id
     * @param array|object $attributes
     * @return $this
     * @see GroupModel::findOrInit
     */
    public static function findOrInit($id = null, $attributes = []): self
    {
    }

    /**
     * Find a record by primary key, or save with the specified attributes if record not found
     *
     * @param int|string $id
     * @param array $attributes
     * @return $this
     * @see GroupModel::findOrCreate
     */
    public static function findOrCreate($id, $attributes = []): self
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see GroupModel::findByOrCreate
     */
    public static function findByOrCreate($attributes, $data = []): self
    {
    }

    /**
     * Executes the generated SQL and returns the found record collection object or false
     *
     * @param array $ids
     * @return $this|$this[]
     * @phpstan-return $this
     * @see GroupModel::findAll
     */
    public static function findAll(array $ids): self
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|null
     * @see GroupModel::findBy
     */
    public static function findBy($column, $operator = null, $value = null): ?self
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|$this[]
     * @phpstan-return $this
     * @see GroupModel::findAllBy
     */
    public static function findAllBy($column, $operator = null, $value = null): self
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see GroupModel::findOrInitBy
     */
    public static function findOrInitBy(array $attributes = [], $data = []): self
    {
    }

    /**
     * Find a record by primary key value and throws 404 exception if record not found
     *
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @throws \Exception
     * @see GroupModel::findByOrFail
     */
    public static function findByOrFail($column, $operator = null, $value = null): self
    {
    }

    /**
     * @param Req|null $req
     * @return $this
     * @throws \Exception
     * @see GroupModel::findFromReq
     */
    public static function findFromReq(\Wei\Req $req = null): self
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or null if not found
     *
     * @return $this|null
     * @see GroupModel::first
     */
    public static function first(): ?self
    {
    }

    /**
     * @return $this|$this[]
     * @phpstan-return $this
     * @see GroupModel::all
     */
    public static function all(): self
    {
    }

    /**
     * Coll: Specifies a field to be the key of the fetched array
     *
     * @param string $column
     * @return $this
     * @see GroupModel::indexBy
     */
    public static function indexBy(string $column): self
    {
    }

    /**
     * Execute a update query with specified data
     *
     * @param array|string $set
     * @param mixed $value
     * @return int
     * @see GroupModel::update
     */
    public static function update($set = [], $value = null): int
    {
    }

    /**
     * @param array|string|true $scopes
     * @return $this
     * @see GroupModel::unscoped
     */
    public static function unscoped($scopes = []): self
    {
    }

    /**
     * Set or remove cache time for the query
     *
     * @param int|null $seconds
     * @return $this
     * @see GroupModel::setCacheTime
     */
    public static function setCacheTime(?int $seconds): self
    {
    }

    /**
     * Returns the name of columns of current table
     *
     * @return array
     * @see GroupModel::getColumns
     */
    public static function getColumns(): array
    {
    }

    /**
     * Check if column name exists
     *
     * @param string|int|null $name
     * @return bool
     * @see GroupModel::hasColumn
     */
    public static function hasColumn($name): bool
    {
    }

    /**
     * Executes the generated query and returns the first array result
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array|null
     * @see GroupModel::fetch
     */
    public static function fetch($column = null, $operator = null, $value = null): ?array
    {
    }

    /**
     * Executes the generated query and returns all array results
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array
     * @see GroupModel::fetchAll
     */
    public static function fetchAll($column = null, $operator = null, $value = null): array
    {
    }

    /**
     * @param string $column
     * @param string|null $index
     * @return array
     * @see GroupModel::pluck
     */
    public static function pluck(string $column, string $index = null): array
    {
    }

    /**
     * @param int $count
     * @param callable $callback
     * @return bool
     * @see GroupModel::chunk
     */
    public static function chunk(int $count, callable $callback): bool
    {
    }

    /**
     * Executes a COUNT query to receive the rows number
     *
     * @param string $column
     * @return int
     * @see GroupModel::cnt
     */
    public static function cnt($column = '*'): int
    {
    }

    /**
     * Executes a MAX query to receive the max value of column
     *
     * @param string $column
     * @return string|null
     * @see GroupModel::max
     */
    public static function max(string $column): ?string
    {
    }

    /**
     * Execute a delete query with specified conditions
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return int
     * @see GroupModel::delete
     */
    public static function delete($column = null, $operator = null, $value = null): int
    {
    }

    /**
     * Sets the position of the first result to retrieve (the "offset")
     *
     * @param int|float|string $offset The first result to return
     * @return $this
     * @see GroupModel::offset
     */
    public static function offset($offset): self
    {
    }

    /**
     * Sets the maximum number of results to retrieve (the "limit")
     *
     * @param int|float|string $limit The maximum number of results to retrieve
     * @return $this
     * @see GroupModel::limit
     */
    public static function limit($limit): self
    {
    }

    /**
     * Sets the page number, the "OFFSET" value is equals "($page - 1) * LIMIT"
     *
     * @param int $page The page number
     * @return $this
     * @see GroupModel::page
     */
    public static function page($page): self
    {
    }

    /**
     * Specifies an item that is to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns the selection expressions
     * @return $this
     * @see GroupModel::select
     */
    public static function select($columns = ['*']): self
    {
    }

    /**
     * @param array|string $columns
     * @return $this
     * @see GroupModel::selectDistinct
     */
    public static function selectDistinct($columns): self
    {
    }

    /**
     * @param string $expression
     * @return $this
     * @see GroupModel::selectRaw
     */
    public static function selectRaw($expression): self
    {
    }

    /**
     * Specifies columns that are not to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns
     * @return $this
     * @see GroupModel::selectExcept
     */
    public static function selectExcept($columns): self
    {
    }

    /**
     * Specifies an item of the main table that is to be returned in the query result.
     * Default to all columns of the main table
     *
     * @param string $column
     * @return $this
     * @see GroupModel::selectMain
     */
    public static function selectMain(string $column = '*'): self
    {
    }

    /**
     * Sets table for FROM query
     *
     * @param string $table
     * @param string|null $alias
     * @return $this
     * @see GroupModel::from
     */
    public static function from(string $table, $alias = null): self
    {
    }

    /**
     * @param string $table
     * @param mixed|null $alias
     * @return $this
     * @see GroupModel::table
     */
    public static function table(string $table, $alias = null): self
    {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @param string $type
     * @return $this
     * @see GroupModel::join
     */
    public static function join(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null,
        string $type = 'INNER'
    ): self {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see GroupModel::innerJoin
     */
    public static function innerJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Adds a left join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see GroupModel::leftJoin
     */
    public static function leftJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Adds a right join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see GroupModel::rightJoin
     */
    public static function rightJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Specifies one or more restrictions to the query result.
     * Replaces any previously specified restrictions, if any.
     *
     * ```php
     * $user = wei()->db('user')->where('id = 1');
     * $user = wei()->db('user')->where('id = ?', 1);
     * $users = wei()->db('user')->where(array('id' => '1', 'username' => 'twin'));
     * $users = wei()->where(array('id' => array('1', '2', '3')));
     * ```
     *
     * @param array|Closure|string|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @see GroupModel::where
     */
    public static function where($column = null, $operator = null, $value = null): self
    {
    }

    /**
     * @param string $expression
     * @param mixed $params
     * @return $this
     * @see GroupModel::whereRaw
     */
    public static function whereRaw($expression, $params = null): self
    {
    }

    /**
     * @param mixed $column
     * @param mixed $value
     * @return $this
     * @see GroupModel::whereNot
     */
    public static function whereNot($column, $value): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see GroupModel::whereBetween
     */
    public static function whereBetween(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see GroupModel::whereNotBetween
     */
    public static function whereNotBetween(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see GroupModel::whereIn
     */
    public static function whereIn(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see GroupModel::whereNotIn
     */
    public static function whereNotIn(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see GroupModel::whereNull
     */
    public static function whereNull(string $column): self
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see GroupModel::whereNotNull
     */
    public static function whereNotNull(string $column): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see GroupModel::whereDate
     */
    public static function whereDate(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see GroupModel::whereMonth
     */
    public static function whereMonth(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see GroupModel::whereDay
     */
    public static function whereDay(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see GroupModel::whereYear
     */
    public static function whereYear(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see GroupModel::whereTime
     */
    public static function whereTime(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrColumn2
     * @param mixed|null $column2
     * @return $this
     * @see GroupModel::whereColumn
     */
    public static function whereColumn(string $column, $opOrColumn2, $column2 = null): self
    {
    }

    /**
     * 搜索字段是否包含某个值
     *
     * @param string $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see GroupModel::whereContains
     */
    public static function whereContains(string $column, $value, string $condition = 'AND'): self
    {
    }

    /**
     * @param string $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see GroupModel::whereNotContains
     */
    public static function whereNotContains(string $column, $value, string $condition = 'OR'): self
    {
    }

    /**
     * Search whether a column has a value other than the default value
     *
     * @param string $column
     * @param bool $has
     * @return $this
     * @see GroupModel::whereHas
     */
    public static function whereHas(string $column, bool $has = true): self
    {
    }

    /**
     * Search whether a column dont have a value other than the default value
     *
     * @param string $column
     * @return $this
     * @see GroupModel::whereNotHas
     */
    public static function whereNotHas(string $column): self
    {
    }

    /**
     * Specifies a grouping over the results of the query.
     * Replaces any previously specified groupings, if any.
     *
     * @param mixed $column the grouping column
     * @return $this
     * @see GroupModel::groupBy
     */
    public static function groupBy($column): self
    {
    }

    /**
     * Specifies a restriction over the groups of the query.
     * Replaces any previous having restrictions, if any.
     *
     * @param mixed $column
     * @param mixed $operator
     * @param mixed|null $value
     * @param mixed $condition
     * @return $this
     * @see GroupModel::having
     */
    public static function having($column, $operator, $value = null, $condition = 'AND'): self
    {
    }

    /**
     * Specifies an ordering for the query results.
     * Replaces any previously specified orderings, if any.
     *
     * @param string|Raw $column the ordering expression
     * @param string $order the ordering direction
     * @return $this
     * @see GroupModel::orderBy
     */
    public static function orderBy($column, $order = 'ASC'): self
    {
    }

    /**
     * @param string $expression
     * @return $this
     * @see GroupModel::orderByRaw
     */
    public static function orderByRaw($expression): self
    {
    }

    /**
     * Adds a DESC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see GroupModel::desc
     */
    public static function desc(string $field): self
    {
    }

    /**
     * Add an ASC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see GroupModel::asc
     */
    public static function asc(string $field): self
    {
    }

    /**
     * @return $this
     * @see GroupModel::forUpdate
     */
    public static function forUpdate(): self
    {
    }

    /**
     * @return $this
     * @see GroupModel::forShare
     */
    public static function forShare(): self
    {
    }

    /**
     * @param string|bool $lock
     * @return $this
     * @see GroupModel::lock
     */
    public static function lock($lock): self
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see GroupModel::when
     */
    public static function when($value, callable $callback, callable $default = null): self
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see GroupModel::unless
     */
    public static function unless($value, callable $callback, callable $default = null): self
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see GroupModel::setDbKeyConverter
     */
    public static function setDbKeyConverter(callable $converter = null): self
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see GroupModel::setPhpKeyConverter
     */
    public static function setPhpKeyConverter(callable $converter = null): self
    {
    }

    /**
     * Add a (inner) join base on the relation to the query
     *
     * @param string|array $name
     * @param string $type
     * @return $this
     * @see GroupModel::joinRelation
     */
    public static function joinRelation($name, string $type = 'INNER'): self
    {
    }

    /**
     * Add a inner join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see GroupModel::innerJoinRelation
     */
    public static function innerJoinRelation($name): self
    {
    }

    /**
     * Add a left join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see GroupModel::leftJoinRelation
     */
    public static function leftJoinRelation($name): self
    {
    }

    /**
     * Add a right join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see GroupModel::rightJoinRelation
     */
    public static function rightJoinRelation($name): self
    {
    }

    /**
     * Check if the model method defines the "Relation" attribute (or the "@Relation" tag in doc comment)
     *
     * This method only checks whether the specified method has the "Relation" attribute,
     * and does not check the actual logic.
     * It is provided for external use to avoid directly calling `$this->$relation()` to cause attacks.
     *
     * @param string $method
     * @return bool
     * @see GroupModel::isRelation
     */
    public static function isRelation(string $method): bool
    {
    }

    /**
     * Really remove the record from database
     *
     * @param int|string $id
     * @return $this
     * @see GroupModel::reallyDestroy
     */
    public static function reallyDestroy($id = null): self
    {
    }

    /**
     * Add a query to filter soft deleted records
     *
     * @return $this
     * @see GroupModel::withoutDeleted
     */
    public static function withoutDeleted(): self
    {
    }

    /**
     * Add a query to return only deleted records
     *
     * @return $this
     * @see GroupModel::onlyDeleted
     */
    public static function onlyDeleted(): self
    {
    }

    /**
     * Remove "withoutDeleted" in the query, expect to return all records
     *
     * @return $this
     * @see GroupModel::withDeleted
     */
    public static function withDeleted(): self
    {
    }

    /**
     * Add a query to return only purged records
     *
     * @return $this
     * @see GroupModel::onlyPurged
     */
    public static function onlyPurged(): self
    {
    }
}

class JsConfig
{
    /**
     * @return array
     * @see JsConfig::toArray
     */
    public static function toArray()
    {
    }
}

class Permission
{
    /**
     * Whether enabled check permission
     *
     * @return bool
     * @see Permission::isEnabledCheck
     */
    public static function isEnabledCheck(): bool
    {
    }

    /**
     * Whether enabled role management
     *
     * @return bool
     * @see Permission::isEnabledRoleManage
     */
    public static function isEnabledRoleManage(): bool
    {
    }

    /**
     * Whether enabled permission management
     *
     * @return bool
     * @see Permission::isEnabledPermissionManage
     */
    public static function isEnabledPermissionManage(): bool
    {
    }
}

class PermissionMap
{
}

class PermissionModel
{
    /**
     * Returns the success result with model data
     *
     * @param array|string|BaseResource|mixed $merge
     * @return Ret
     * @see PermissionModel::toRet
     */
    public static function toRet($merge = []): \Wei\Ret
    {
    }

    /**
     * Set each attribute value, without checking whether the column is fillable, and save the model
     *
     * @param iterable $attributes
     * @return $this
     * @see PermissionModel::saveAttributes
     */
    public static function saveAttributes(iterable $attributes = []): self
    {
    }

    /**
     * Returns the record data as array
     *
     * @param array|callable $returnFields A indexed array specified the fields to return
     * @param callable|null $prepend
     * @return array
     * @see PermissionModel::toArray
     */
    public static function toArray($returnFields = [], callable $prepend = null): array
    {
    }

    /**
     * Return the record table name
     *
     * @return string
     * @see PermissionModel::getTable
     */
    public static function getTable(): string
    {
    }

    /**
     * Import a PHP array in this record
     *
     * @param iterable $array
     * @return $this
     * @see PermissionModel::fromArray
     */
    public static function fromArray(iterable $array): self
    {
    }

    /**
     * Save the record or data to database
     *
     * @param iterable $attributes
     * @return $this
     * @see PermissionModel::save
     */
    public static function save(iterable $attributes = []): self
    {
    }

    /**
     * Delete the current record and trigger the beforeDestroy and afterDestroy callback
     *
     * @param int|string $id
     * @return $this
     * @see PermissionModel::destroy
     */
    public static function destroy($id = null): self
    {
    }

    /**
     * Find a record by primary key, or throws 404 exception if record not found, then destroy the record
     *
     * @param string|int $id
     * @return $this
     * @throws \Exception when record not found
     * @see PermissionModel::destroyOrFail
     */
    public static function destroyOrFail($id): self
    {
    }

    /**
     * Set the record field value
     *
     * @param string|int|null $name
     * @param mixed $value
     * @param bool $throwException
     * @return $this|false
     * @see PermissionModel::set
     */
    public static function set($name, $value, bool $throwException = true)
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or false
     *
     * @param int|string|array|null $id
     * @return $this|null
     * @see PermissionModel::find
     */
    public static function find($id): ?self
    {
    }

    /**
     * Find a record by primary key, or throws 404 exception if record not found
     *
     * @param int|string $id
     * @return $this
     * @throws \Exception
     * @see PermissionModel::findOrFail
     */
    public static function findOrFail($id): self
    {
    }

    /**
     * Find a record by primary key, or init with the specified attributes if record not found
     *
     * @param int|string $id
     * @param array|object $attributes
     * @return $this
     * @see PermissionModel::findOrInit
     */
    public static function findOrInit($id = null, $attributes = []): self
    {
    }

    /**
     * Find a record by primary key, or save with the specified attributes if record not found
     *
     * @param int|string $id
     * @param array $attributes
     * @return $this
     * @see PermissionModel::findOrCreate
     */
    public static function findOrCreate($id, $attributes = []): self
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see PermissionModel::findByOrCreate
     */
    public static function findByOrCreate($attributes, $data = []): self
    {
    }

    /**
     * Executes the generated SQL and returns the found record collection object or false
     *
     * @param array $ids
     * @return $this|$this[]
     * @phpstan-return $this
     * @see PermissionModel::findAll
     */
    public static function findAll(array $ids): self
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|null
     * @see PermissionModel::findBy
     */
    public static function findBy($column, $operator = null, $value = null): ?self
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|$this[]
     * @phpstan-return $this
     * @see PermissionModel::findAllBy
     */
    public static function findAllBy($column, $operator = null, $value = null): self
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see PermissionModel::findOrInitBy
     */
    public static function findOrInitBy(array $attributes = [], $data = []): self
    {
    }

    /**
     * Find a record by primary key value and throws 404 exception if record not found
     *
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @throws \Exception
     * @see PermissionModel::findByOrFail
     */
    public static function findByOrFail($column, $operator = null, $value = null): self
    {
    }

    /**
     * @param Req|null $req
     * @return $this
     * @throws \Exception
     * @see PermissionModel::findFromReq
     */
    public static function findFromReq(\Wei\Req $req = null): self
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or null if not found
     *
     * @return $this|null
     * @see PermissionModel::first
     */
    public static function first(): ?self
    {
    }

    /**
     * @return $this|$this[]
     * @phpstan-return $this
     * @see PermissionModel::all
     */
    public static function all(): self
    {
    }

    /**
     * Coll: Specifies a field to be the key of the fetched array
     *
     * @param string $column
     * @return $this
     * @see PermissionModel::indexBy
     */
    public static function indexBy(string $column): self
    {
    }

    /**
     * Execute a update query with specified data
     *
     * @param array|string $set
     * @param mixed $value
     * @return int
     * @see PermissionModel::update
     */
    public static function update($set = [], $value = null): int
    {
    }

    /**
     * @param array|string|true $scopes
     * @return $this
     * @see PermissionModel::unscoped
     */
    public static function unscoped($scopes = []): self
    {
    }

    /**
     * Set or remove cache time for the query
     *
     * @param int|null $seconds
     * @return $this
     * @see PermissionModel::setCacheTime
     */
    public static function setCacheTime(?int $seconds): self
    {
    }

    /**
     * Returns the name of columns of current table
     *
     * @return array
     * @see PermissionModel::getColumns
     */
    public static function getColumns(): array
    {
    }

    /**
     * Check if column name exists
     *
     * @param string|int|null $name
     * @return bool
     * @see PermissionModel::hasColumn
     */
    public static function hasColumn($name): bool
    {
    }

    /**
     * Executes the generated query and returns the first array result
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array|null
     * @see PermissionModel::fetch
     */
    public static function fetch($column = null, $operator = null, $value = null): ?array
    {
    }

    /**
     * Executes the generated query and returns all array results
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array
     * @see PermissionModel::fetchAll
     */
    public static function fetchAll($column = null, $operator = null, $value = null): array
    {
    }

    /**
     * @param string $column
     * @param string|null $index
     * @return array
     * @see PermissionModel::pluck
     */
    public static function pluck(string $column, string $index = null): array
    {
    }

    /**
     * @param int $count
     * @param callable $callback
     * @return bool
     * @see PermissionModel::chunk
     */
    public static function chunk(int $count, callable $callback): bool
    {
    }

    /**
     * Executes a COUNT query to receive the rows number
     *
     * @param string $column
     * @return int
     * @see PermissionModel::cnt
     */
    public static function cnt($column = '*'): int
    {
    }

    /**
     * Executes a MAX query to receive the max value of column
     *
     * @param string $column
     * @return string|null
     * @see PermissionModel::max
     */
    public static function max(string $column): ?string
    {
    }

    /**
     * Execute a delete query with specified conditions
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return int
     * @see PermissionModel::delete
     */
    public static function delete($column = null, $operator = null, $value = null): int
    {
    }

    /**
     * Sets the position of the first result to retrieve (the "offset")
     *
     * @param int|float|string $offset The first result to return
     * @return $this
     * @see PermissionModel::offset
     */
    public static function offset($offset): self
    {
    }

    /**
     * Sets the maximum number of results to retrieve (the "limit")
     *
     * @param int|float|string $limit The maximum number of results to retrieve
     * @return $this
     * @see PermissionModel::limit
     */
    public static function limit($limit): self
    {
    }

    /**
     * Sets the page number, the "OFFSET" value is equals "($page - 1) * LIMIT"
     *
     * @param int $page The page number
     * @return $this
     * @see PermissionModel::page
     */
    public static function page($page): self
    {
    }

    /**
     * Specifies an item that is to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns the selection expressions
     * @return $this
     * @see PermissionModel::select
     */
    public static function select($columns = ['*']): self
    {
    }

    /**
     * @param array|string $columns
     * @return $this
     * @see PermissionModel::selectDistinct
     */
    public static function selectDistinct($columns): self
    {
    }

    /**
     * @param string $expression
     * @return $this
     * @see PermissionModel::selectRaw
     */
    public static function selectRaw($expression): self
    {
    }

    /**
     * Specifies columns that are not to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns
     * @return $this
     * @see PermissionModel::selectExcept
     */
    public static function selectExcept($columns): self
    {
    }

    /**
     * Specifies an item of the main table that is to be returned in the query result.
     * Default to all columns of the main table
     *
     * @param string $column
     * @return $this
     * @see PermissionModel::selectMain
     */
    public static function selectMain(string $column = '*'): self
    {
    }

    /**
     * Sets table for FROM query
     *
     * @param string $table
     * @param string|null $alias
     * @return $this
     * @see PermissionModel::from
     */
    public static function from(string $table, $alias = null): self
    {
    }

    /**
     * @param string $table
     * @param mixed|null $alias
     * @return $this
     * @see PermissionModel::table
     */
    public static function table(string $table, $alias = null): self
    {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @param string $type
     * @return $this
     * @see PermissionModel::join
     */
    public static function join(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null,
        string $type = 'INNER'
    ): self {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see PermissionModel::innerJoin
     */
    public static function innerJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Adds a left join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see PermissionModel::leftJoin
     */
    public static function leftJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Adds a right join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see PermissionModel::rightJoin
     */
    public static function rightJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Specifies one or more restrictions to the query result.
     * Replaces any previously specified restrictions, if any.
     *
     * ```php
     * $user = wei()->db('user')->where('id = 1');
     * $user = wei()->db('user')->where('id = ?', 1);
     * $users = wei()->db('user')->where(array('id' => '1', 'username' => 'twin'));
     * $users = wei()->where(array('id' => array('1', '2', '3')));
     * ```
     *
     * @param array|Closure|string|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @see PermissionModel::where
     */
    public static function where($column = null, $operator = null, $value = null): self
    {
    }

    /**
     * @param string $expression
     * @param mixed $params
     * @return $this
     * @see PermissionModel::whereRaw
     */
    public static function whereRaw($expression, $params = null): self
    {
    }

    /**
     * @param mixed $column
     * @param mixed $value
     * @return $this
     * @see PermissionModel::whereNot
     */
    public static function whereNot($column, $value): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see PermissionModel::whereBetween
     */
    public static function whereBetween(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see PermissionModel::whereNotBetween
     */
    public static function whereNotBetween(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see PermissionModel::whereIn
     */
    public static function whereIn(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see PermissionModel::whereNotIn
     */
    public static function whereNotIn(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see PermissionModel::whereNull
     */
    public static function whereNull(string $column): self
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see PermissionModel::whereNotNull
     */
    public static function whereNotNull(string $column): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see PermissionModel::whereDate
     */
    public static function whereDate(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see PermissionModel::whereMonth
     */
    public static function whereMonth(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see PermissionModel::whereDay
     */
    public static function whereDay(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see PermissionModel::whereYear
     */
    public static function whereYear(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see PermissionModel::whereTime
     */
    public static function whereTime(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrColumn2
     * @param mixed|null $column2
     * @return $this
     * @see PermissionModel::whereColumn
     */
    public static function whereColumn(string $column, $opOrColumn2, $column2 = null): self
    {
    }

    /**
     * 搜索字段是否包含某个值
     *
     * @param string $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see PermissionModel::whereContains
     */
    public static function whereContains(string $column, $value, string $condition = 'AND'): self
    {
    }

    /**
     * @param string $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see PermissionModel::whereNotContains
     */
    public static function whereNotContains(string $column, $value, string $condition = 'OR'): self
    {
    }

    /**
     * Search whether a column has a value other than the default value
     *
     * @param string $column
     * @param bool $has
     * @return $this
     * @see PermissionModel::whereHas
     */
    public static function whereHas(string $column, bool $has = true): self
    {
    }

    /**
     * Search whether a column dont have a value other than the default value
     *
     * @param string $column
     * @return $this
     * @see PermissionModel::whereNotHas
     */
    public static function whereNotHas(string $column): self
    {
    }

    /**
     * Specifies a grouping over the results of the query.
     * Replaces any previously specified groupings, if any.
     *
     * @param mixed $column the grouping column
     * @return $this
     * @see PermissionModel::groupBy
     */
    public static function groupBy($column): self
    {
    }

    /**
     * Specifies a restriction over the groups of the query.
     * Replaces any previous having restrictions, if any.
     *
     * @param mixed $column
     * @param mixed $operator
     * @param mixed|null $value
     * @param mixed $condition
     * @return $this
     * @see PermissionModel::having
     */
    public static function having($column, $operator, $value = null, $condition = 'AND'): self
    {
    }

    /**
     * Specifies an ordering for the query results.
     * Replaces any previously specified orderings, if any.
     *
     * @param string|Raw $column the ordering expression
     * @param string $order the ordering direction
     * @return $this
     * @see PermissionModel::orderBy
     */
    public static function orderBy($column, $order = 'ASC'): self
    {
    }

    /**
     * @param string $expression
     * @return $this
     * @see PermissionModel::orderByRaw
     */
    public static function orderByRaw($expression): self
    {
    }

    /**
     * Adds a DESC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see PermissionModel::desc
     */
    public static function desc(string $field): self
    {
    }

    /**
     * Add an ASC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see PermissionModel::asc
     */
    public static function asc(string $field): self
    {
    }

    /**
     * @return $this
     * @see PermissionModel::forUpdate
     */
    public static function forUpdate(): self
    {
    }

    /**
     * @return $this
     * @see PermissionModel::forShare
     */
    public static function forShare(): self
    {
    }

    /**
     * @param string|bool $lock
     * @return $this
     * @see PermissionModel::lock
     */
    public static function lock($lock): self
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see PermissionModel::when
     */
    public static function when($value, callable $callback, callable $default = null): self
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see PermissionModel::unless
     */
    public static function unless($value, callable $callback, callable $default = null): self
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see PermissionModel::setDbKeyConverter
     */
    public static function setDbKeyConverter(callable $converter = null): self
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see PermissionModel::setPhpKeyConverter
     */
    public static function setPhpKeyConverter(callable $converter = null): self
    {
    }

    /**
     * Add a (inner) join base on the relation to the query
     *
     * @param string|array $name
     * @param string $type
     * @return $this
     * @see PermissionModel::joinRelation
     */
    public static function joinRelation($name, string $type = 'INNER'): self
    {
    }

    /**
     * Add a inner join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see PermissionModel::innerJoinRelation
     */
    public static function innerJoinRelation($name): self
    {
    }

    /**
     * Add a left join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see PermissionModel::leftJoinRelation
     */
    public static function leftJoinRelation($name): self
    {
    }

    /**
     * Add a right join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see PermissionModel::rightJoinRelation
     */
    public static function rightJoinRelation($name): self
    {
    }

    /**
     * Check if the model method defines the "Relation" attribute (or the "@Relation" tag in doc comment)
     *
     * This method only checks whether the specified method has the "Relation" attribute,
     * and does not check the actual logic.
     * It is provided for external use to avoid directly calling `$this->$relation()` to cause attacks.
     *
     * @param string $method
     * @return bool
     * @see PermissionModel::isRelation
     */
    public static function isRelation(string $method): bool
    {
    }

    /**
     * Really remove the record from database
     *
     * @param int|string $id
     * @return $this
     * @see PermissionModel::reallyDestroy
     */
    public static function reallyDestroy($id = null): self
    {
    }

    /**
     * Add a query to filter soft deleted records
     *
     * @return $this
     * @see PermissionModel::withoutDeleted
     */
    public static function withoutDeleted(): self
    {
    }

    /**
     * Add a query to return only deleted records
     *
     * @return $this
     * @see PermissionModel::onlyDeleted
     */
    public static function onlyDeleted(): self
    {
    }

    /**
     * Remove "withoutDeleted" in the query, expect to return all records
     *
     * @return $this
     * @see PermissionModel::withDeleted
     */
    public static function withDeleted(): self
    {
    }

    /**
     * Add a query to return only purged records
     *
     * @return $this
     * @see PermissionModel::onlyPurged
     */
    public static function onlyPurged(): self
    {
    }
}

class PermissionsRoleModel
{
    /**
     * Returns the success result with model data
     *
     * @param array|string|BaseResource|mixed $merge
     * @return Ret
     * @see PermissionsRoleModel::toRet
     */
    public static function toRet($merge = []): \Wei\Ret
    {
    }

    /**
     * Set each attribute value, without checking whether the column is fillable, and save the model
     *
     * @param iterable $attributes
     * @return $this
     * @see PermissionsRoleModel::saveAttributes
     */
    public static function saveAttributes(iterable $attributes = []): self
    {
    }

    /**
     * Returns the record data as array
     *
     * @param array|callable $returnFields A indexed array specified the fields to return
     * @param callable|null $prepend
     * @return array
     * @see PermissionsRoleModel::toArray
     */
    public static function toArray($returnFields = [], callable $prepend = null): array
    {
    }

    /**
     * Return the record table name
     *
     * @return string
     * @see PermissionsRoleModel::getTable
     */
    public static function getTable(): string
    {
    }

    /**
     * Import a PHP array in this record
     *
     * @param iterable $array
     * @return $this
     * @see PermissionsRoleModel::fromArray
     */
    public static function fromArray(iterable $array): self
    {
    }

    /**
     * Save the record or data to database
     *
     * @param iterable $attributes
     * @return $this
     * @see PermissionsRoleModel::save
     */
    public static function save(iterable $attributes = []): self
    {
    }

    /**
     * Delete the current record and trigger the beforeDestroy and afterDestroy callback
     *
     * @param int|string $id
     * @return $this
     * @see PermissionsRoleModel::destroy
     */
    public static function destroy($id = null): self
    {
    }

    /**
     * Find a record by primary key, or throws 404 exception if record not found, then destroy the record
     *
     * @param string|int $id
     * @return $this
     * @throws \Exception when record not found
     * @see PermissionsRoleModel::destroyOrFail
     */
    public static function destroyOrFail($id): self
    {
    }

    /**
     * Set the record field value
     *
     * @param string|int|null $name
     * @param mixed $value
     * @param bool $throwException
     * @return $this|false
     * @see PermissionsRoleModel::set
     */
    public static function set($name, $value, bool $throwException = true)
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or false
     *
     * @param int|string|array|null $id
     * @return $this|null
     * @see PermissionsRoleModel::find
     */
    public static function find($id): ?self
    {
    }

    /**
     * Find a record by primary key, or throws 404 exception if record not found
     *
     * @param int|string $id
     * @return $this
     * @throws \Exception
     * @see PermissionsRoleModel::findOrFail
     */
    public static function findOrFail($id): self
    {
    }

    /**
     * Find a record by primary key, or init with the specified attributes if record not found
     *
     * @param int|string $id
     * @param array|object $attributes
     * @return $this
     * @see PermissionsRoleModel::findOrInit
     */
    public static function findOrInit($id = null, $attributes = []): self
    {
    }

    /**
     * Find a record by primary key, or save with the specified attributes if record not found
     *
     * @param int|string $id
     * @param array $attributes
     * @return $this
     * @see PermissionsRoleModel::findOrCreate
     */
    public static function findOrCreate($id, $attributes = []): self
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see PermissionsRoleModel::findByOrCreate
     */
    public static function findByOrCreate($attributes, $data = []): self
    {
    }

    /**
     * Executes the generated SQL and returns the found record collection object or false
     *
     * @param array $ids
     * @return $this|$this[]
     * @phpstan-return $this
     * @see PermissionsRoleModel::findAll
     */
    public static function findAll(array $ids): self
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|null
     * @see PermissionsRoleModel::findBy
     */
    public static function findBy($column, $operator = null, $value = null): ?self
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|$this[]
     * @phpstan-return $this
     * @see PermissionsRoleModel::findAllBy
     */
    public static function findAllBy($column, $operator = null, $value = null): self
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see PermissionsRoleModel::findOrInitBy
     */
    public static function findOrInitBy(array $attributes = [], $data = []): self
    {
    }

    /**
     * Find a record by primary key value and throws 404 exception if record not found
     *
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @throws \Exception
     * @see PermissionsRoleModel::findByOrFail
     */
    public static function findByOrFail($column, $operator = null, $value = null): self
    {
    }

    /**
     * @param Req|null $req
     * @return $this
     * @throws \Exception
     * @see PermissionsRoleModel::findFromReq
     */
    public static function findFromReq(\Wei\Req $req = null): self
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or null if not found
     *
     * @return $this|null
     * @see PermissionsRoleModel::first
     */
    public static function first(): ?self
    {
    }

    /**
     * @return $this|$this[]
     * @phpstan-return $this
     * @see PermissionsRoleModel::all
     */
    public static function all(): self
    {
    }

    /**
     * Coll: Specifies a field to be the key of the fetched array
     *
     * @param string $column
     * @return $this
     * @see PermissionsRoleModel::indexBy
     */
    public static function indexBy(string $column): self
    {
    }

    /**
     * Execute a update query with specified data
     *
     * @param array|string $set
     * @param mixed $value
     * @return int
     * @see PermissionsRoleModel::update
     */
    public static function update($set = [], $value = null): int
    {
    }

    /**
     * @param array|string|true $scopes
     * @return $this
     * @see PermissionsRoleModel::unscoped
     */
    public static function unscoped($scopes = []): self
    {
    }

    /**
     * Set or remove cache time for the query
     *
     * @param int|null $seconds
     * @return $this
     * @see PermissionsRoleModel::setCacheTime
     */
    public static function setCacheTime(?int $seconds): self
    {
    }

    /**
     * Returns the name of columns of current table
     *
     * @return array
     * @see PermissionsRoleModel::getColumns
     */
    public static function getColumns(): array
    {
    }

    /**
     * Check if column name exists
     *
     * @param string|int|null $name
     * @return bool
     * @see PermissionsRoleModel::hasColumn
     */
    public static function hasColumn($name): bool
    {
    }

    /**
     * Executes the generated query and returns the first array result
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array|null
     * @see PermissionsRoleModel::fetch
     */
    public static function fetch($column = null, $operator = null, $value = null): ?array
    {
    }

    /**
     * Executes the generated query and returns all array results
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array
     * @see PermissionsRoleModel::fetchAll
     */
    public static function fetchAll($column = null, $operator = null, $value = null): array
    {
    }

    /**
     * @param string $column
     * @param string|null $index
     * @return array
     * @see PermissionsRoleModel::pluck
     */
    public static function pluck(string $column, string $index = null): array
    {
    }

    /**
     * @param int $count
     * @param callable $callback
     * @return bool
     * @see PermissionsRoleModel::chunk
     */
    public static function chunk(int $count, callable $callback): bool
    {
    }

    /**
     * Executes a COUNT query to receive the rows number
     *
     * @param string $column
     * @return int
     * @see PermissionsRoleModel::cnt
     */
    public static function cnt($column = '*'): int
    {
    }

    /**
     * Executes a MAX query to receive the max value of column
     *
     * @param string $column
     * @return string|null
     * @see PermissionsRoleModel::max
     */
    public static function max(string $column): ?string
    {
    }

    /**
     * Execute a delete query with specified conditions
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return int
     * @see PermissionsRoleModel::delete
     */
    public static function delete($column = null, $operator = null, $value = null): int
    {
    }

    /**
     * Sets the position of the first result to retrieve (the "offset")
     *
     * @param int|float|string $offset The first result to return
     * @return $this
     * @see PermissionsRoleModel::offset
     */
    public static function offset($offset): self
    {
    }

    /**
     * Sets the maximum number of results to retrieve (the "limit")
     *
     * @param int|float|string $limit The maximum number of results to retrieve
     * @return $this
     * @see PermissionsRoleModel::limit
     */
    public static function limit($limit): self
    {
    }

    /**
     * Sets the page number, the "OFFSET" value is equals "($page - 1) * LIMIT"
     *
     * @param int $page The page number
     * @return $this
     * @see PermissionsRoleModel::page
     */
    public static function page($page): self
    {
    }

    /**
     * Specifies an item that is to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns the selection expressions
     * @return $this
     * @see PermissionsRoleModel::select
     */
    public static function select($columns = ['*']): self
    {
    }

    /**
     * @param array|string $columns
     * @return $this
     * @see PermissionsRoleModel::selectDistinct
     */
    public static function selectDistinct($columns): self
    {
    }

    /**
     * @param string $expression
     * @return $this
     * @see PermissionsRoleModel::selectRaw
     */
    public static function selectRaw($expression): self
    {
    }

    /**
     * Specifies columns that are not to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns
     * @return $this
     * @see PermissionsRoleModel::selectExcept
     */
    public static function selectExcept($columns): self
    {
    }

    /**
     * Specifies an item of the main table that is to be returned in the query result.
     * Default to all columns of the main table
     *
     * @param string $column
     * @return $this
     * @see PermissionsRoleModel::selectMain
     */
    public static function selectMain(string $column = '*'): self
    {
    }

    /**
     * Sets table for FROM query
     *
     * @param string $table
     * @param string|null $alias
     * @return $this
     * @see PermissionsRoleModel::from
     */
    public static function from(string $table, $alias = null): self
    {
    }

    /**
     * @param string $table
     * @param mixed|null $alias
     * @return $this
     * @see PermissionsRoleModel::table
     */
    public static function table(string $table, $alias = null): self
    {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @param string $type
     * @return $this
     * @see PermissionsRoleModel::join
     */
    public static function join(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null,
        string $type = 'INNER'
    ): self {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see PermissionsRoleModel::innerJoin
     */
    public static function innerJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Adds a left join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see PermissionsRoleModel::leftJoin
     */
    public static function leftJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Adds a right join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see PermissionsRoleModel::rightJoin
     */
    public static function rightJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Specifies one or more restrictions to the query result.
     * Replaces any previously specified restrictions, if any.
     *
     * ```php
     * $user = wei()->db('user')->where('id = 1');
     * $user = wei()->db('user')->where('id = ?', 1);
     * $users = wei()->db('user')->where(array('id' => '1', 'username' => 'twin'));
     * $users = wei()->where(array('id' => array('1', '2', '3')));
     * ```
     *
     * @param array|Closure|string|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @see PermissionsRoleModel::where
     */
    public static function where($column = null, $operator = null, $value = null): self
    {
    }

    /**
     * @param string $expression
     * @param mixed $params
     * @return $this
     * @see PermissionsRoleModel::whereRaw
     */
    public static function whereRaw($expression, $params = null): self
    {
    }

    /**
     * @param mixed $column
     * @param mixed $value
     * @return $this
     * @see PermissionsRoleModel::whereNot
     */
    public static function whereNot($column, $value): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see PermissionsRoleModel::whereBetween
     */
    public static function whereBetween(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see PermissionsRoleModel::whereNotBetween
     */
    public static function whereNotBetween(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see PermissionsRoleModel::whereIn
     */
    public static function whereIn(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see PermissionsRoleModel::whereNotIn
     */
    public static function whereNotIn(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see PermissionsRoleModel::whereNull
     */
    public static function whereNull(string $column): self
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see PermissionsRoleModel::whereNotNull
     */
    public static function whereNotNull(string $column): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see PermissionsRoleModel::whereDate
     */
    public static function whereDate(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see PermissionsRoleModel::whereMonth
     */
    public static function whereMonth(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see PermissionsRoleModel::whereDay
     */
    public static function whereDay(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see PermissionsRoleModel::whereYear
     */
    public static function whereYear(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see PermissionsRoleModel::whereTime
     */
    public static function whereTime(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrColumn2
     * @param mixed|null $column2
     * @return $this
     * @see PermissionsRoleModel::whereColumn
     */
    public static function whereColumn(string $column, $opOrColumn2, $column2 = null): self
    {
    }

    /**
     * 搜索字段是否包含某个值
     *
     * @param string $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see PermissionsRoleModel::whereContains
     */
    public static function whereContains(string $column, $value, string $condition = 'AND'): self
    {
    }

    /**
     * @param string $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see PermissionsRoleModel::whereNotContains
     */
    public static function whereNotContains(string $column, $value, string $condition = 'OR'): self
    {
    }

    /**
     * Search whether a column has a value other than the default value
     *
     * @param string $column
     * @param bool $has
     * @return $this
     * @see PermissionsRoleModel::whereHas
     */
    public static function whereHas(string $column, bool $has = true): self
    {
    }

    /**
     * Search whether a column dont have a value other than the default value
     *
     * @param string $column
     * @return $this
     * @see PermissionsRoleModel::whereNotHas
     */
    public static function whereNotHas(string $column): self
    {
    }

    /**
     * Specifies a grouping over the results of the query.
     * Replaces any previously specified groupings, if any.
     *
     * @param mixed $column the grouping column
     * @return $this
     * @see PermissionsRoleModel::groupBy
     */
    public static function groupBy($column): self
    {
    }

    /**
     * Specifies a restriction over the groups of the query.
     * Replaces any previous having restrictions, if any.
     *
     * @param mixed $column
     * @param mixed $operator
     * @param mixed|null $value
     * @param mixed $condition
     * @return $this
     * @see PermissionsRoleModel::having
     */
    public static function having($column, $operator, $value = null, $condition = 'AND'): self
    {
    }

    /**
     * Specifies an ordering for the query results.
     * Replaces any previously specified orderings, if any.
     *
     * @param string|Raw $column the ordering expression
     * @param string $order the ordering direction
     * @return $this
     * @see PermissionsRoleModel::orderBy
     */
    public static function orderBy($column, $order = 'ASC'): self
    {
    }

    /**
     * @param string $expression
     * @return $this
     * @see PermissionsRoleModel::orderByRaw
     */
    public static function orderByRaw($expression): self
    {
    }

    /**
     * Adds a DESC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see PermissionsRoleModel::desc
     */
    public static function desc(string $field): self
    {
    }

    /**
     * Add an ASC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see PermissionsRoleModel::asc
     */
    public static function asc(string $field): self
    {
    }

    /**
     * @return $this
     * @see PermissionsRoleModel::forUpdate
     */
    public static function forUpdate(): self
    {
    }

    /**
     * @return $this
     * @see PermissionsRoleModel::forShare
     */
    public static function forShare(): self
    {
    }

    /**
     * @param string|bool $lock
     * @return $this
     * @see PermissionsRoleModel::lock
     */
    public static function lock($lock): self
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see PermissionsRoleModel::when
     */
    public static function when($value, callable $callback, callable $default = null): self
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see PermissionsRoleModel::unless
     */
    public static function unless($value, callable $callback, callable $default = null): self
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see PermissionsRoleModel::setDbKeyConverter
     */
    public static function setDbKeyConverter(callable $converter = null): self
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see PermissionsRoleModel::setPhpKeyConverter
     */
    public static function setPhpKeyConverter(callable $converter = null): self
    {
    }

    /**
     * Add a (inner) join base on the relation to the query
     *
     * @param string|array $name
     * @param string $type
     * @return $this
     * @see PermissionsRoleModel::joinRelation
     */
    public static function joinRelation($name, string $type = 'INNER'): self
    {
    }

    /**
     * Add a inner join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see PermissionsRoleModel::innerJoinRelation
     */
    public static function innerJoinRelation($name): self
    {
    }

    /**
     * Add a left join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see PermissionsRoleModel::leftJoinRelation
     */
    public static function leftJoinRelation($name): self
    {
    }

    /**
     * Add a right join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see PermissionsRoleModel::rightJoinRelation
     */
    public static function rightJoinRelation($name): self
    {
    }

    /**
     * Check if the model method defines the "Relation" attribute (or the "@Relation" tag in doc comment)
     *
     * This method only checks whether the specified method has the "Relation" attribute,
     * and does not check the actual logic.
     * It is provided for external use to avoid directly calling `$this->$relation()` to cause attacks.
     *
     * @param string $method
     * @return bool
     * @see PermissionsRoleModel::isRelation
     */
    public static function isRelation(string $method): bool
    {
    }

    /**
     * Really remove the record from database
     *
     * @param int|string $id
     * @return $this
     * @see PermissionsRoleModel::reallyDestroy
     */
    public static function reallyDestroy($id = null): self
    {
    }

    /**
     * Add a query to filter soft deleted records
     *
     * @return $this
     * @see PermissionsRoleModel::withoutDeleted
     */
    public static function withoutDeleted(): self
    {
    }

    /**
     * Add a query to return only deleted records
     *
     * @return $this
     * @see PermissionsRoleModel::onlyDeleted
     */
    public static function onlyDeleted(): self
    {
    }

    /**
     * Remove "withoutDeleted" in the query, expect to return all records
     *
     * @return $this
     * @see PermissionsRoleModel::withDeleted
     */
    public static function withDeleted(): self
    {
    }

    /**
     * Add a query to return only purged records
     *
     * @return $this
     * @see PermissionsRoleModel::onlyPurged
     */
    public static function onlyPurged(): self
    {
    }
}

class RoleModel
{
    /**
     * Returns the success result with model data
     *
     * @param array|string|BaseResource|mixed $merge
     * @return Ret
     * @see RoleModel::toRet
     */
    public static function toRet($merge = []): \Wei\Ret
    {
    }

    /**
     * Set each attribute value, without checking whether the column is fillable, and save the model
     *
     * @param iterable $attributes
     * @return $this
     * @see RoleModel::saveAttributes
     */
    public static function saveAttributes(iterable $attributes = []): self
    {
    }

    /**
     * Returns the record data as array
     *
     * @param array|callable $returnFields A indexed array specified the fields to return
     * @param callable|null $prepend
     * @return array
     * @see RoleModel::toArray
     */
    public static function toArray($returnFields = [], callable $prepend = null): array
    {
    }

    /**
     * Return the record table name
     *
     * @return string
     * @see RoleModel::getTable
     */
    public static function getTable(): string
    {
    }

    /**
     * Import a PHP array in this record
     *
     * @param iterable $array
     * @return $this
     * @see RoleModel::fromArray
     */
    public static function fromArray(iterable $array): self
    {
    }

    /**
     * Save the record or data to database
     *
     * @param iterable $attributes
     * @return $this
     * @see RoleModel::save
     */
    public static function save(iterable $attributes = []): self
    {
    }

    /**
     * Delete the current record and trigger the beforeDestroy and afterDestroy callback
     *
     * @param int|string $id
     * @return $this
     * @see RoleModel::destroy
     */
    public static function destroy($id = null): self
    {
    }

    /**
     * Find a record by primary key, or throws 404 exception if record not found, then destroy the record
     *
     * @param string|int $id
     * @return $this
     * @throws \Exception when record not found
     * @see RoleModel::destroyOrFail
     */
    public static function destroyOrFail($id): self
    {
    }

    /**
     * Set the record field value
     *
     * @param string|int|null $name
     * @param mixed $value
     * @param bool $throwException
     * @return $this|false
     * @see RoleModel::set
     */
    public static function set($name, $value, bool $throwException = true)
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or false
     *
     * @param int|string|array|null $id
     * @return $this|null
     * @see RoleModel::find
     */
    public static function find($id): ?self
    {
    }

    /**
     * Find a record by primary key, or throws 404 exception if record not found
     *
     * @param int|string $id
     * @return $this
     * @throws \Exception
     * @see RoleModel::findOrFail
     */
    public static function findOrFail($id): self
    {
    }

    /**
     * Find a record by primary key, or init with the specified attributes if record not found
     *
     * @param int|string $id
     * @param array|object $attributes
     * @return $this
     * @see RoleModel::findOrInit
     */
    public static function findOrInit($id = null, $attributes = []): self
    {
    }

    /**
     * Find a record by primary key, or save with the specified attributes if record not found
     *
     * @param int|string $id
     * @param array $attributes
     * @return $this
     * @see RoleModel::findOrCreate
     */
    public static function findOrCreate($id, $attributes = []): self
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see RoleModel::findByOrCreate
     */
    public static function findByOrCreate($attributes, $data = []): self
    {
    }

    /**
     * Executes the generated SQL and returns the found record collection object or false
     *
     * @param array $ids
     * @return $this|$this[]
     * @phpstan-return $this
     * @see RoleModel::findAll
     */
    public static function findAll(array $ids): self
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|null
     * @see RoleModel::findBy
     */
    public static function findBy($column, $operator = null, $value = null): ?self
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|$this[]
     * @phpstan-return $this
     * @see RoleModel::findAllBy
     */
    public static function findAllBy($column, $operator = null, $value = null): self
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see RoleModel::findOrInitBy
     */
    public static function findOrInitBy(array $attributes = [], $data = []): self
    {
    }

    /**
     * Find a record by primary key value and throws 404 exception if record not found
     *
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @throws \Exception
     * @see RoleModel::findByOrFail
     */
    public static function findByOrFail($column, $operator = null, $value = null): self
    {
    }

    /**
     * @param Req|null $req
     * @return $this
     * @throws \Exception
     * @see RoleModel::findFromReq
     */
    public static function findFromReq(\Wei\Req $req = null): self
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or null if not found
     *
     * @return $this|null
     * @see RoleModel::first
     */
    public static function first(): ?self
    {
    }

    /**
     * @return $this|$this[]
     * @phpstan-return $this
     * @see RoleModel::all
     */
    public static function all(): self
    {
    }

    /**
     * Coll: Specifies a field to be the key of the fetched array
     *
     * @param string $column
     * @return $this
     * @see RoleModel::indexBy
     */
    public static function indexBy(string $column): self
    {
    }

    /**
     * Execute a update query with specified data
     *
     * @param array|string $set
     * @param mixed $value
     * @return int
     * @see RoleModel::update
     */
    public static function update($set = [], $value = null): int
    {
    }

    /**
     * @param array|string|true $scopes
     * @return $this
     * @see RoleModel::unscoped
     */
    public static function unscoped($scopes = []): self
    {
    }

    /**
     * Set or remove cache time for the query
     *
     * @param int|null $seconds
     * @return $this
     * @see RoleModel::setCacheTime
     */
    public static function setCacheTime(?int $seconds): self
    {
    }

    /**
     * Returns the name of columns of current table
     *
     * @return array
     * @see RoleModel::getColumns
     */
    public static function getColumns(): array
    {
    }

    /**
     * Check if column name exists
     *
     * @param string|int|null $name
     * @return bool
     * @see RoleModel::hasColumn
     */
    public static function hasColumn($name): bool
    {
    }

    /**
     * Executes the generated query and returns the first array result
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array|null
     * @see RoleModel::fetch
     */
    public static function fetch($column = null, $operator = null, $value = null): ?array
    {
    }

    /**
     * Executes the generated query and returns all array results
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array
     * @see RoleModel::fetchAll
     */
    public static function fetchAll($column = null, $operator = null, $value = null): array
    {
    }

    /**
     * @param string $column
     * @param string|null $index
     * @return array
     * @see RoleModel::pluck
     */
    public static function pluck(string $column, string $index = null): array
    {
    }

    /**
     * @param int $count
     * @param callable $callback
     * @return bool
     * @see RoleModel::chunk
     */
    public static function chunk(int $count, callable $callback): bool
    {
    }

    /**
     * Executes a COUNT query to receive the rows number
     *
     * @param string $column
     * @return int
     * @see RoleModel::cnt
     */
    public static function cnt($column = '*'): int
    {
    }

    /**
     * Executes a MAX query to receive the max value of column
     *
     * @param string $column
     * @return string|null
     * @see RoleModel::max
     */
    public static function max(string $column): ?string
    {
    }

    /**
     * Execute a delete query with specified conditions
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return int
     * @see RoleModel::delete
     */
    public static function delete($column = null, $operator = null, $value = null): int
    {
    }

    /**
     * Sets the position of the first result to retrieve (the "offset")
     *
     * @param int|float|string $offset The first result to return
     * @return $this
     * @see RoleModel::offset
     */
    public static function offset($offset): self
    {
    }

    /**
     * Sets the maximum number of results to retrieve (the "limit")
     *
     * @param int|float|string $limit The maximum number of results to retrieve
     * @return $this
     * @see RoleModel::limit
     */
    public static function limit($limit): self
    {
    }

    /**
     * Sets the page number, the "OFFSET" value is equals "($page - 1) * LIMIT"
     *
     * @param int $page The page number
     * @return $this
     * @see RoleModel::page
     */
    public static function page($page): self
    {
    }

    /**
     * Specifies an item that is to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns the selection expressions
     * @return $this
     * @see RoleModel::select
     */
    public static function select($columns = ['*']): self
    {
    }

    /**
     * @param array|string $columns
     * @return $this
     * @see RoleModel::selectDistinct
     */
    public static function selectDistinct($columns): self
    {
    }

    /**
     * @param string $expression
     * @return $this
     * @see RoleModel::selectRaw
     */
    public static function selectRaw($expression): self
    {
    }

    /**
     * Specifies columns that are not to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns
     * @return $this
     * @see RoleModel::selectExcept
     */
    public static function selectExcept($columns): self
    {
    }

    /**
     * Specifies an item of the main table that is to be returned in the query result.
     * Default to all columns of the main table
     *
     * @param string $column
     * @return $this
     * @see RoleModel::selectMain
     */
    public static function selectMain(string $column = '*'): self
    {
    }

    /**
     * Sets table for FROM query
     *
     * @param string $table
     * @param string|null $alias
     * @return $this
     * @see RoleModel::from
     */
    public static function from(string $table, $alias = null): self
    {
    }

    /**
     * @param string $table
     * @param mixed|null $alias
     * @return $this
     * @see RoleModel::table
     */
    public static function table(string $table, $alias = null): self
    {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @param string $type
     * @return $this
     * @see RoleModel::join
     */
    public static function join(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null,
        string $type = 'INNER'
    ): self {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see RoleModel::innerJoin
     */
    public static function innerJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Adds a left join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see RoleModel::leftJoin
     */
    public static function leftJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Adds a right join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see RoleModel::rightJoin
     */
    public static function rightJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Specifies one or more restrictions to the query result.
     * Replaces any previously specified restrictions, if any.
     *
     * ```php
     * $user = wei()->db('user')->where('id = 1');
     * $user = wei()->db('user')->where('id = ?', 1);
     * $users = wei()->db('user')->where(array('id' => '1', 'username' => 'twin'));
     * $users = wei()->where(array('id' => array('1', '2', '3')));
     * ```
     *
     * @param array|Closure|string|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @see RoleModel::where
     */
    public static function where($column = null, $operator = null, $value = null): self
    {
    }

    /**
     * @param string $expression
     * @param mixed $params
     * @return $this
     * @see RoleModel::whereRaw
     */
    public static function whereRaw($expression, $params = null): self
    {
    }

    /**
     * @param mixed $column
     * @param mixed $value
     * @return $this
     * @see RoleModel::whereNot
     */
    public static function whereNot($column, $value): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see RoleModel::whereBetween
     */
    public static function whereBetween(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see RoleModel::whereNotBetween
     */
    public static function whereNotBetween(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see RoleModel::whereIn
     */
    public static function whereIn(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see RoleModel::whereNotIn
     */
    public static function whereNotIn(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see RoleModel::whereNull
     */
    public static function whereNull(string $column): self
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see RoleModel::whereNotNull
     */
    public static function whereNotNull(string $column): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see RoleModel::whereDate
     */
    public static function whereDate(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see RoleModel::whereMonth
     */
    public static function whereMonth(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see RoleModel::whereDay
     */
    public static function whereDay(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see RoleModel::whereYear
     */
    public static function whereYear(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see RoleModel::whereTime
     */
    public static function whereTime(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrColumn2
     * @param mixed|null $column2
     * @return $this
     * @see RoleModel::whereColumn
     */
    public static function whereColumn(string $column, $opOrColumn2, $column2 = null): self
    {
    }

    /**
     * 搜索字段是否包含某个值
     *
     * @param string $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see RoleModel::whereContains
     */
    public static function whereContains(string $column, $value, string $condition = 'AND'): self
    {
    }

    /**
     * @param string $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see RoleModel::whereNotContains
     */
    public static function whereNotContains(string $column, $value, string $condition = 'OR'): self
    {
    }

    /**
     * Search whether a column has a value other than the default value
     *
     * @param string $column
     * @param bool $has
     * @return $this
     * @see RoleModel::whereHas
     */
    public static function whereHas(string $column, bool $has = true): self
    {
    }

    /**
     * Search whether a column dont have a value other than the default value
     *
     * @param string $column
     * @return $this
     * @see RoleModel::whereNotHas
     */
    public static function whereNotHas(string $column): self
    {
    }

    /**
     * Specifies a grouping over the results of the query.
     * Replaces any previously specified groupings, if any.
     *
     * @param mixed $column the grouping column
     * @return $this
     * @see RoleModel::groupBy
     */
    public static function groupBy($column): self
    {
    }

    /**
     * Specifies a restriction over the groups of the query.
     * Replaces any previous having restrictions, if any.
     *
     * @param mixed $column
     * @param mixed $operator
     * @param mixed|null $value
     * @param mixed $condition
     * @return $this
     * @see RoleModel::having
     */
    public static function having($column, $operator, $value = null, $condition = 'AND'): self
    {
    }

    /**
     * Specifies an ordering for the query results.
     * Replaces any previously specified orderings, if any.
     *
     * @param string|Raw $column the ordering expression
     * @param string $order the ordering direction
     * @return $this
     * @see RoleModel::orderBy
     */
    public static function orderBy($column, $order = 'ASC'): self
    {
    }

    /**
     * @param string $expression
     * @return $this
     * @see RoleModel::orderByRaw
     */
    public static function orderByRaw($expression): self
    {
    }

    /**
     * Adds a DESC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see RoleModel::desc
     */
    public static function desc(string $field): self
    {
    }

    /**
     * Add an ASC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see RoleModel::asc
     */
    public static function asc(string $field): self
    {
    }

    /**
     * @return $this
     * @see RoleModel::forUpdate
     */
    public static function forUpdate(): self
    {
    }

    /**
     * @return $this
     * @see RoleModel::forShare
     */
    public static function forShare(): self
    {
    }

    /**
     * @param string|bool $lock
     * @return $this
     * @see RoleModel::lock
     */
    public static function lock($lock): self
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see RoleModel::when
     */
    public static function when($value, callable $callback, callable $default = null): self
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see RoleModel::unless
     */
    public static function unless($value, callable $callback, callable $default = null): self
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see RoleModel::setDbKeyConverter
     */
    public static function setDbKeyConverter(callable $converter = null): self
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see RoleModel::setPhpKeyConverter
     */
    public static function setPhpKeyConverter(callable $converter = null): self
    {
    }

    /**
     * Add a (inner) join base on the relation to the query
     *
     * @param string|array $name
     * @param string $type
     * @return $this
     * @see RoleModel::joinRelation
     */
    public static function joinRelation($name, string $type = 'INNER'): self
    {
    }

    /**
     * Add a inner join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see RoleModel::innerJoinRelation
     */
    public static function innerJoinRelation($name): self
    {
    }

    /**
     * Add a left join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see RoleModel::leftJoinRelation
     */
    public static function leftJoinRelation($name): self
    {
    }

    /**
     * Add a right join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see RoleModel::rightJoinRelation
     */
    public static function rightJoinRelation($name): self
    {
    }

    /**
     * Check if the model method defines the "Relation" attribute (or the "@Relation" tag in doc comment)
     *
     * This method only checks whether the specified method has the "Relation" attribute,
     * and does not check the actual logic.
     * It is provided for external use to avoid directly calling `$this->$relation()` to cause attacks.
     *
     * @param string $method
     * @return bool
     * @see RoleModel::isRelation
     */
    public static function isRelation(string $method): bool
    {
    }

    /**
     * Really remove the record from database
     *
     * @param int|string $id
     * @return $this
     * @see RoleModel::reallyDestroy
     */
    public static function reallyDestroy($id = null): self
    {
    }

    /**
     * Add a query to filter soft deleted records
     *
     * @return $this
     * @see RoleModel::withoutDeleted
     */
    public static function withoutDeleted(): self
    {
    }

    /**
     * Add a query to return only deleted records
     *
     * @return $this
     * @see RoleModel::onlyDeleted
     */
    public static function onlyDeleted(): self
    {
    }

    /**
     * Remove "withoutDeleted" in the query, expect to return all records
     *
     * @return $this
     * @see RoleModel::withDeleted
     */
    public static function withDeleted(): self
    {
    }

    /**
     * Add a query to return only purged records
     *
     * @return $this
     * @see RoleModel::onlyPurged
     */
    public static function onlyPurged(): self
    {
    }
}

class RolesUserModel
{
    /**
     * Returns the success result with model data
     *
     * @param array|string|BaseResource|mixed $merge
     * @return Ret
     * @see RolesUserModel::toRet
     */
    public static function toRet($merge = []): \Wei\Ret
    {
    }

    /**
     * Set each attribute value, without checking whether the column is fillable, and save the model
     *
     * @param iterable $attributes
     * @return $this
     * @see RolesUserModel::saveAttributes
     */
    public static function saveAttributes(iterable $attributes = []): self
    {
    }

    /**
     * Returns the record data as array
     *
     * @param array|callable $returnFields A indexed array specified the fields to return
     * @param callable|null $prepend
     * @return array
     * @see RolesUserModel::toArray
     */
    public static function toArray($returnFields = [], callable $prepend = null): array
    {
    }

    /**
     * Return the record table name
     *
     * @return string
     * @see RolesUserModel::getTable
     */
    public static function getTable(): string
    {
    }

    /**
     * Import a PHP array in this record
     *
     * @param iterable $array
     * @return $this
     * @see RolesUserModel::fromArray
     */
    public static function fromArray(iterable $array): self
    {
    }

    /**
     * Save the record or data to database
     *
     * @param iterable $attributes
     * @return $this
     * @see RolesUserModel::save
     */
    public static function save(iterable $attributes = []): self
    {
    }

    /**
     * Delete the current record and trigger the beforeDestroy and afterDestroy callback
     *
     * @param int|string $id
     * @return $this
     * @see RolesUserModel::destroy
     */
    public static function destroy($id = null): self
    {
    }

    /**
     * Find a record by primary key, or throws 404 exception if record not found, then destroy the record
     *
     * @param string|int $id
     * @return $this
     * @throws \Exception when record not found
     * @see RolesUserModel::destroyOrFail
     */
    public static function destroyOrFail($id): self
    {
    }

    /**
     * Set the record field value
     *
     * @param string|int|null $name
     * @param mixed $value
     * @param bool $throwException
     * @return $this|false
     * @see RolesUserModel::set
     */
    public static function set($name, $value, bool $throwException = true)
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or false
     *
     * @param int|string|array|null $id
     * @return $this|null
     * @see RolesUserModel::find
     */
    public static function find($id): ?self
    {
    }

    /**
     * Find a record by primary key, or throws 404 exception if record not found
     *
     * @param int|string $id
     * @return $this
     * @throws \Exception
     * @see RolesUserModel::findOrFail
     */
    public static function findOrFail($id): self
    {
    }

    /**
     * Find a record by primary key, or init with the specified attributes if record not found
     *
     * @param int|string $id
     * @param array|object $attributes
     * @return $this
     * @see RolesUserModel::findOrInit
     */
    public static function findOrInit($id = null, $attributes = []): self
    {
    }

    /**
     * Find a record by primary key, or save with the specified attributes if record not found
     *
     * @param int|string $id
     * @param array $attributes
     * @return $this
     * @see RolesUserModel::findOrCreate
     */
    public static function findOrCreate($id, $attributes = []): self
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see RolesUserModel::findByOrCreate
     */
    public static function findByOrCreate($attributes, $data = []): self
    {
    }

    /**
     * Executes the generated SQL and returns the found record collection object or false
     *
     * @param array $ids
     * @return $this|$this[]
     * @phpstan-return $this
     * @see RolesUserModel::findAll
     */
    public static function findAll(array $ids): self
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|null
     * @see RolesUserModel::findBy
     */
    public static function findBy($column, $operator = null, $value = null): ?self
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|$this[]
     * @phpstan-return $this
     * @see RolesUserModel::findAllBy
     */
    public static function findAllBy($column, $operator = null, $value = null): self
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see RolesUserModel::findOrInitBy
     */
    public static function findOrInitBy(array $attributes = [], $data = []): self
    {
    }

    /**
     * Find a record by primary key value and throws 404 exception if record not found
     *
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @throws \Exception
     * @see RolesUserModel::findByOrFail
     */
    public static function findByOrFail($column, $operator = null, $value = null): self
    {
    }

    /**
     * @param Req|null $req
     * @return $this
     * @throws \Exception
     * @see RolesUserModel::findFromReq
     */
    public static function findFromReq(\Wei\Req $req = null): self
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or null if not found
     *
     * @return $this|null
     * @see RolesUserModel::first
     */
    public static function first(): ?self
    {
    }

    /**
     * @return $this|$this[]
     * @phpstan-return $this
     * @see RolesUserModel::all
     */
    public static function all(): self
    {
    }

    /**
     * Coll: Specifies a field to be the key of the fetched array
     *
     * @param string $column
     * @return $this
     * @see RolesUserModel::indexBy
     */
    public static function indexBy(string $column): self
    {
    }

    /**
     * Execute a update query with specified data
     *
     * @param array|string $set
     * @param mixed $value
     * @return int
     * @see RolesUserModel::update
     */
    public static function update($set = [], $value = null): int
    {
    }

    /**
     * @param array|string|true $scopes
     * @return $this
     * @see RolesUserModel::unscoped
     */
    public static function unscoped($scopes = []): self
    {
    }

    /**
     * Set or remove cache time for the query
     *
     * @param int|null $seconds
     * @return $this
     * @see RolesUserModel::setCacheTime
     */
    public static function setCacheTime(?int $seconds): self
    {
    }

    /**
     * Returns the name of columns of current table
     *
     * @return array
     * @see RolesUserModel::getColumns
     */
    public static function getColumns(): array
    {
    }

    /**
     * Check if column name exists
     *
     * @param string|int|null $name
     * @return bool
     * @see RolesUserModel::hasColumn
     */
    public static function hasColumn($name): bool
    {
    }

    /**
     * Executes the generated query and returns the first array result
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array|null
     * @see RolesUserModel::fetch
     */
    public static function fetch($column = null, $operator = null, $value = null): ?array
    {
    }

    /**
     * Executes the generated query and returns all array results
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array
     * @see RolesUserModel::fetchAll
     */
    public static function fetchAll($column = null, $operator = null, $value = null): array
    {
    }

    /**
     * @param string $column
     * @param string|null $index
     * @return array
     * @see RolesUserModel::pluck
     */
    public static function pluck(string $column, string $index = null): array
    {
    }

    /**
     * @param int $count
     * @param callable $callback
     * @return bool
     * @see RolesUserModel::chunk
     */
    public static function chunk(int $count, callable $callback): bool
    {
    }

    /**
     * Executes a COUNT query to receive the rows number
     *
     * @param string $column
     * @return int
     * @see RolesUserModel::cnt
     */
    public static function cnt($column = '*'): int
    {
    }

    /**
     * Executes a MAX query to receive the max value of column
     *
     * @param string $column
     * @return string|null
     * @see RolesUserModel::max
     */
    public static function max(string $column): ?string
    {
    }

    /**
     * Execute a delete query with specified conditions
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return int
     * @see RolesUserModel::delete
     */
    public static function delete($column = null, $operator = null, $value = null): int
    {
    }

    /**
     * Sets the position of the first result to retrieve (the "offset")
     *
     * @param int|float|string $offset The first result to return
     * @return $this
     * @see RolesUserModel::offset
     */
    public static function offset($offset): self
    {
    }

    /**
     * Sets the maximum number of results to retrieve (the "limit")
     *
     * @param int|float|string $limit The maximum number of results to retrieve
     * @return $this
     * @see RolesUserModel::limit
     */
    public static function limit($limit): self
    {
    }

    /**
     * Sets the page number, the "OFFSET" value is equals "($page - 1) * LIMIT"
     *
     * @param int $page The page number
     * @return $this
     * @see RolesUserModel::page
     */
    public static function page($page): self
    {
    }

    /**
     * Specifies an item that is to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns the selection expressions
     * @return $this
     * @see RolesUserModel::select
     */
    public static function select($columns = ['*']): self
    {
    }

    /**
     * @param array|string $columns
     * @return $this
     * @see RolesUserModel::selectDistinct
     */
    public static function selectDistinct($columns): self
    {
    }

    /**
     * @param string $expression
     * @return $this
     * @see RolesUserModel::selectRaw
     */
    public static function selectRaw($expression): self
    {
    }

    /**
     * Specifies columns that are not to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns
     * @return $this
     * @see RolesUserModel::selectExcept
     */
    public static function selectExcept($columns): self
    {
    }

    /**
     * Specifies an item of the main table that is to be returned in the query result.
     * Default to all columns of the main table
     *
     * @param string $column
     * @return $this
     * @see RolesUserModel::selectMain
     */
    public static function selectMain(string $column = '*'): self
    {
    }

    /**
     * Sets table for FROM query
     *
     * @param string $table
     * @param string|null $alias
     * @return $this
     * @see RolesUserModel::from
     */
    public static function from(string $table, $alias = null): self
    {
    }

    /**
     * @param string $table
     * @param mixed|null $alias
     * @return $this
     * @see RolesUserModel::table
     */
    public static function table(string $table, $alias = null): self
    {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @param string $type
     * @return $this
     * @see RolesUserModel::join
     */
    public static function join(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null,
        string $type = 'INNER'
    ): self {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see RolesUserModel::innerJoin
     */
    public static function innerJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Adds a left join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see RolesUserModel::leftJoin
     */
    public static function leftJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Adds a right join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see RolesUserModel::rightJoin
     */
    public static function rightJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Specifies one or more restrictions to the query result.
     * Replaces any previously specified restrictions, if any.
     *
     * ```php
     * $user = wei()->db('user')->where('id = 1');
     * $user = wei()->db('user')->where('id = ?', 1);
     * $users = wei()->db('user')->where(array('id' => '1', 'username' => 'twin'));
     * $users = wei()->where(array('id' => array('1', '2', '3')));
     * ```
     *
     * @param array|Closure|string|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @see RolesUserModel::where
     */
    public static function where($column = null, $operator = null, $value = null): self
    {
    }

    /**
     * @param string $expression
     * @param mixed $params
     * @return $this
     * @see RolesUserModel::whereRaw
     */
    public static function whereRaw($expression, $params = null): self
    {
    }

    /**
     * @param mixed $column
     * @param mixed $value
     * @return $this
     * @see RolesUserModel::whereNot
     */
    public static function whereNot($column, $value): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see RolesUserModel::whereBetween
     */
    public static function whereBetween(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see RolesUserModel::whereNotBetween
     */
    public static function whereNotBetween(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see RolesUserModel::whereIn
     */
    public static function whereIn(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see RolesUserModel::whereNotIn
     */
    public static function whereNotIn(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see RolesUserModel::whereNull
     */
    public static function whereNull(string $column): self
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see RolesUserModel::whereNotNull
     */
    public static function whereNotNull(string $column): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see RolesUserModel::whereDate
     */
    public static function whereDate(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see RolesUserModel::whereMonth
     */
    public static function whereMonth(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see RolesUserModel::whereDay
     */
    public static function whereDay(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see RolesUserModel::whereYear
     */
    public static function whereYear(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see RolesUserModel::whereTime
     */
    public static function whereTime(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrColumn2
     * @param mixed|null $column2
     * @return $this
     * @see RolesUserModel::whereColumn
     */
    public static function whereColumn(string $column, $opOrColumn2, $column2 = null): self
    {
    }

    /**
     * 搜索字段是否包含某个值
     *
     * @param string $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see RolesUserModel::whereContains
     */
    public static function whereContains(string $column, $value, string $condition = 'AND'): self
    {
    }

    /**
     * @param string $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see RolesUserModel::whereNotContains
     */
    public static function whereNotContains(string $column, $value, string $condition = 'OR'): self
    {
    }

    /**
     * Search whether a column has a value other than the default value
     *
     * @param string $column
     * @param bool $has
     * @return $this
     * @see RolesUserModel::whereHas
     */
    public static function whereHas(string $column, bool $has = true): self
    {
    }

    /**
     * Search whether a column dont have a value other than the default value
     *
     * @param string $column
     * @return $this
     * @see RolesUserModel::whereNotHas
     */
    public static function whereNotHas(string $column): self
    {
    }

    /**
     * Specifies a grouping over the results of the query.
     * Replaces any previously specified groupings, if any.
     *
     * @param mixed $column the grouping column
     * @return $this
     * @see RolesUserModel::groupBy
     */
    public static function groupBy($column): self
    {
    }

    /**
     * Specifies a restriction over the groups of the query.
     * Replaces any previous having restrictions, if any.
     *
     * @param mixed $column
     * @param mixed $operator
     * @param mixed|null $value
     * @param mixed $condition
     * @return $this
     * @see RolesUserModel::having
     */
    public static function having($column, $operator, $value = null, $condition = 'AND'): self
    {
    }

    /**
     * Specifies an ordering for the query results.
     * Replaces any previously specified orderings, if any.
     *
     * @param string|Raw $column the ordering expression
     * @param string $order the ordering direction
     * @return $this
     * @see RolesUserModel::orderBy
     */
    public static function orderBy($column, $order = 'ASC'): self
    {
    }

    /**
     * @param string $expression
     * @return $this
     * @see RolesUserModel::orderByRaw
     */
    public static function orderByRaw($expression): self
    {
    }

    /**
     * Adds a DESC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see RolesUserModel::desc
     */
    public static function desc(string $field): self
    {
    }

    /**
     * Add an ASC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see RolesUserModel::asc
     */
    public static function asc(string $field): self
    {
    }

    /**
     * @return $this
     * @see RolesUserModel::forUpdate
     */
    public static function forUpdate(): self
    {
    }

    /**
     * @return $this
     * @see RolesUserModel::forShare
     */
    public static function forShare(): self
    {
    }

    /**
     * @param string|bool $lock
     * @return $this
     * @see RolesUserModel::lock
     */
    public static function lock($lock): self
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see RolesUserModel::when
     */
    public static function when($value, callable $callback, callable $default = null): self
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see RolesUserModel::unless
     */
    public static function unless($value, callable $callback, callable $default = null): self
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see RolesUserModel::setDbKeyConverter
     */
    public static function setDbKeyConverter(callable $converter = null): self
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see RolesUserModel::setPhpKeyConverter
     */
    public static function setPhpKeyConverter(callable $converter = null): self
    {
    }

    /**
     * Add a (inner) join base on the relation to the query
     *
     * @param string|array $name
     * @param string $type
     * @return $this
     * @see RolesUserModel::joinRelation
     */
    public static function joinRelation($name, string $type = 'INNER'): self
    {
    }

    /**
     * Add a inner join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see RolesUserModel::innerJoinRelation
     */
    public static function innerJoinRelation($name): self
    {
    }

    /**
     * Add a left join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see RolesUserModel::leftJoinRelation
     */
    public static function leftJoinRelation($name): self
    {
    }

    /**
     * Add a right join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see RolesUserModel::rightJoinRelation
     */
    public static function rightJoinRelation($name): self
    {
    }

    /**
     * Check if the model method defines the "Relation" attribute (or the "@Relation" tag in doc comment)
     *
     * This method only checks whether the specified method has the "Relation" attribute,
     * and does not check the actual logic.
     * It is provided for external use to avoid directly calling `$this->$relation()` to cause attacks.
     *
     * @param string $method
     * @return bool
     * @see RolesUserModel::isRelation
     */
    public static function isRelation(string $method): bool
    {
    }

    /**
     * Really remove the record from database
     *
     * @param int|string $id
     * @return $this
     * @see RolesUserModel::reallyDestroy
     */
    public static function reallyDestroy($id = null): self
    {
    }

    /**
     * Add a query to filter soft deleted records
     *
     * @return $this
     * @see RolesUserModel::withoutDeleted
     */
    public static function withoutDeleted(): self
    {
    }

    /**
     * Add a query to return only deleted records
     *
     * @return $this
     * @see RolesUserModel::onlyDeleted
     */
    public static function onlyDeleted(): self
    {
    }

    /**
     * Remove "withoutDeleted" in the query, expect to return all records
     *
     * @return $this
     * @see RolesUserModel::withDeleted
     */
    public static function withDeleted(): self
    {
    }

    /**
     * Add a query to return only purged records
     *
     * @return $this
     * @see RolesUserModel::onlyPurged
     */
    public static function onlyPurged(): self
    {
    }
}

class UserModel
{
    /**
     * 通过外部检查用户是否有某个权限
     *
     * @param string $permissionId
     * @return bool
     * @see UserModel::can
     */
    public static function can($permissionId)
    {
    }

    /**
     * @param array|\ArrayAccess $req
     * @return \Wei\Ret
     * @see UserModel::updatePassword
     */
    public static function updatePassword($req)
    {
    }

    /**
     * Returns the success result with model data
     *
     * @param array|string|BaseResource|mixed $merge
     * @return Ret
     * @see UserModel::toRet
     */
    public static function toRet($merge = []): \Wei\Ret
    {
    }

    /**
     * Set each attribute value, without checking whether the column is fillable, and save the model
     *
     * @param iterable $attributes
     * @return $this
     * @see UserModel::saveAttributes
     */
    public static function saveAttributes(iterable $attributes = []): self
    {
    }

    /**
     * Returns the record data as array
     *
     * @param array|callable $returnFields A indexed array specified the fields to return
     * @param callable|null $prepend
     * @return array
     * @see UserModel::toArray
     */
    public static function toArray($returnFields = [], callable $prepend = null): array
    {
    }

    /**
     * Return the record table name
     *
     * @return string
     * @see UserModel::getTable
     */
    public static function getTable(): string
    {
    }

    /**
     * Import a PHP array in this record
     *
     * @param iterable $array
     * @return $this
     * @see UserModel::fromArray
     */
    public static function fromArray(iterable $array): self
    {
    }

    /**
     * Save the record or data to database
     *
     * @param iterable $attributes
     * @return $this
     * @see UserModel::save
     */
    public static function save(iterable $attributes = []): self
    {
    }

    /**
     * Delete the current record and trigger the beforeDestroy and afterDestroy callback
     *
     * @param int|string $id
     * @return $this
     * @see UserModel::destroy
     */
    public static function destroy($id = null): self
    {
    }

    /**
     * Find a record by primary key, or throws 404 exception if record not found, then destroy the record
     *
     * @param string|int $id
     * @return $this
     * @throws \Exception when record not found
     * @see UserModel::destroyOrFail
     */
    public static function destroyOrFail($id): self
    {
    }

    /**
     * Set the record field value
     *
     * @param string|int|null $name
     * @param mixed $value
     * @param bool $throwException
     * @return $this|false
     * @see UserModel::set
     */
    public static function set($name, $value, bool $throwException = true)
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or false
     *
     * @param int|string|array|null $id
     * @return $this|null
     * @see UserModel::find
     */
    public static function find($id): ?self
    {
    }

    /**
     * Find a record by primary key, or throws 404 exception if record not found
     *
     * @param int|string $id
     * @return $this
     * @throws \Exception
     * @see UserModel::findOrFail
     */
    public static function findOrFail($id): self
    {
    }

    /**
     * Find a record by primary key, or init with the specified attributes if record not found
     *
     * @param int|string $id
     * @param array|object $attributes
     * @return $this
     * @see UserModel::findOrInit
     */
    public static function findOrInit($id = null, $attributes = []): self
    {
    }

    /**
     * Find a record by primary key, or save with the specified attributes if record not found
     *
     * @param int|string $id
     * @param array $attributes
     * @return $this
     * @see UserModel::findOrCreate
     */
    public static function findOrCreate($id, $attributes = []): self
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see UserModel::findByOrCreate
     */
    public static function findByOrCreate($attributes, $data = []): self
    {
    }

    /**
     * Executes the generated SQL and returns the found record collection object or false
     *
     * @param array $ids
     * @return $this|$this[]
     * @phpstan-return $this
     * @see UserModel::findAll
     */
    public static function findAll(array $ids): self
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|null
     * @see UserModel::findBy
     */
    public static function findBy($column, $operator = null, $value = null): ?self
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|$this[]
     * @phpstan-return $this
     * @see UserModel::findAllBy
     */
    public static function findAllBy($column, $operator = null, $value = null): self
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see UserModel::findOrInitBy
     */
    public static function findOrInitBy(array $attributes = [], $data = []): self
    {
    }

    /**
     * Find a record by primary key value and throws 404 exception if record not found
     *
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @throws \Exception
     * @see UserModel::findByOrFail
     */
    public static function findByOrFail($column, $operator = null, $value = null): self
    {
    }

    /**
     * @param Req|null $req
     * @return $this
     * @throws \Exception
     * @see UserModel::findFromReq
     */
    public static function findFromReq(\Wei\Req $req = null): self
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or null if not found
     *
     * @return $this|null
     * @see UserModel::first
     */
    public static function first(): ?self
    {
    }

    /**
     * @return $this|$this[]
     * @phpstan-return $this
     * @see UserModel::all
     */
    public static function all(): self
    {
    }

    /**
     * Coll: Specifies a field to be the key of the fetched array
     *
     * @param string $column
     * @return $this
     * @see UserModel::indexBy
     */
    public static function indexBy(string $column): self
    {
    }

    /**
     * Execute a update query with specified data
     *
     * @param array|string $set
     * @param mixed $value
     * @return int
     * @see UserModel::update
     */
    public static function update($set = [], $value = null): int
    {
    }

    /**
     * @param array|string|true $scopes
     * @return $this
     * @see UserModel::unscoped
     */
    public static function unscoped($scopes = []): self
    {
    }

    /**
     * Set or remove cache time for the query
     *
     * @param int|null $seconds
     * @return $this
     * @see UserModel::setCacheTime
     */
    public static function setCacheTime(?int $seconds): self
    {
    }

    /**
     * Returns the name of columns of current table
     *
     * @return array
     * @see UserModel::getColumns
     */
    public static function getColumns(): array
    {
    }

    /**
     * Check if column name exists
     *
     * @param string|int|null $name
     * @return bool
     * @see UserModel::hasColumn
     */
    public static function hasColumn($name): bool
    {
    }

    /**
     * Executes the generated query and returns the first array result
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array|null
     * @see UserModel::fetch
     */
    public static function fetch($column = null, $operator = null, $value = null): ?array
    {
    }

    /**
     * Executes the generated query and returns all array results
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array
     * @see UserModel::fetchAll
     */
    public static function fetchAll($column = null, $operator = null, $value = null): array
    {
    }

    /**
     * @param string $column
     * @param string|null $index
     * @return array
     * @see UserModel::pluck
     */
    public static function pluck(string $column, string $index = null): array
    {
    }

    /**
     * @param int $count
     * @param callable $callback
     * @return bool
     * @see UserModel::chunk
     */
    public static function chunk(int $count, callable $callback): bool
    {
    }

    /**
     * Executes a COUNT query to receive the rows number
     *
     * @param string $column
     * @return int
     * @see UserModel::cnt
     */
    public static function cnt($column = '*'): int
    {
    }

    /**
     * Executes a MAX query to receive the max value of column
     *
     * @param string $column
     * @return string|null
     * @see UserModel::max
     */
    public static function max(string $column): ?string
    {
    }

    /**
     * Execute a delete query with specified conditions
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return int
     * @see UserModel::delete
     */
    public static function delete($column = null, $operator = null, $value = null): int
    {
    }

    /**
     * Sets the position of the first result to retrieve (the "offset")
     *
     * @param int|float|string $offset The first result to return
     * @return $this
     * @see UserModel::offset
     */
    public static function offset($offset): self
    {
    }

    /**
     * Sets the maximum number of results to retrieve (the "limit")
     *
     * @param int|float|string $limit The maximum number of results to retrieve
     * @return $this
     * @see UserModel::limit
     */
    public static function limit($limit): self
    {
    }

    /**
     * Sets the page number, the "OFFSET" value is equals "($page - 1) * LIMIT"
     *
     * @param int $page The page number
     * @return $this
     * @see UserModel::page
     */
    public static function page($page): self
    {
    }

    /**
     * Specifies an item that is to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns the selection expressions
     * @return $this
     * @see UserModel::select
     */
    public static function select($columns = ['*']): self
    {
    }

    /**
     * @param array|string $columns
     * @return $this
     * @see UserModel::selectDistinct
     */
    public static function selectDistinct($columns): self
    {
    }

    /**
     * @param string $expression
     * @return $this
     * @see UserModel::selectRaw
     */
    public static function selectRaw($expression): self
    {
    }

    /**
     * Specifies columns that are not to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns
     * @return $this
     * @see UserModel::selectExcept
     */
    public static function selectExcept($columns): self
    {
    }

    /**
     * Specifies an item of the main table that is to be returned in the query result.
     * Default to all columns of the main table
     *
     * @param string $column
     * @return $this
     * @see UserModel::selectMain
     */
    public static function selectMain(string $column = '*'): self
    {
    }

    /**
     * Sets table for FROM query
     *
     * @param string $table
     * @param string|null $alias
     * @return $this
     * @see UserModel::from
     */
    public static function from(string $table, $alias = null): self
    {
    }

    /**
     * @param string $table
     * @param mixed|null $alias
     * @return $this
     * @see UserModel::table
     */
    public static function table(string $table, $alias = null): self
    {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @param string $type
     * @return $this
     * @see UserModel::join
     */
    public static function join(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null,
        string $type = 'INNER'
    ): self {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see UserModel::innerJoin
     */
    public static function innerJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Adds a left join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see UserModel::leftJoin
     */
    public static function leftJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Adds a right join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see UserModel::rightJoin
     */
    public static function rightJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Specifies one or more restrictions to the query result.
     * Replaces any previously specified restrictions, if any.
     *
     * ```php
     * $user = wei()->db('user')->where('id = 1');
     * $user = wei()->db('user')->where('id = ?', 1);
     * $users = wei()->db('user')->where(array('id' => '1', 'username' => 'twin'));
     * $users = wei()->where(array('id' => array('1', '2', '3')));
     * ```
     *
     * @param array|Closure|string|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @see UserModel::where
     */
    public static function where($column = null, $operator = null, $value = null): self
    {
    }

    /**
     * @param string $expression
     * @param mixed $params
     * @return $this
     * @see UserModel::whereRaw
     */
    public static function whereRaw($expression, $params = null): self
    {
    }

    /**
     * @param mixed $column
     * @param mixed $value
     * @return $this
     * @see UserModel::whereNot
     */
    public static function whereNot($column, $value): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see UserModel::whereBetween
     */
    public static function whereBetween(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see UserModel::whereNotBetween
     */
    public static function whereNotBetween(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see UserModel::whereIn
     */
    public static function whereIn(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see UserModel::whereNotIn
     */
    public static function whereNotIn(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see UserModel::whereNull
     */
    public static function whereNull(string $column): self
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see UserModel::whereNotNull
     */
    public static function whereNotNull(string $column): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see UserModel::whereDate
     */
    public static function whereDate(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see UserModel::whereMonth
     */
    public static function whereMonth(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see UserModel::whereDay
     */
    public static function whereDay(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see UserModel::whereYear
     */
    public static function whereYear(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see UserModel::whereTime
     */
    public static function whereTime(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrColumn2
     * @param mixed|null $column2
     * @return $this
     * @see UserModel::whereColumn
     */
    public static function whereColumn(string $column, $opOrColumn2, $column2 = null): self
    {
    }

    /**
     * 搜索字段是否包含某个值
     *
     * @param string $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see UserModel::whereContains
     */
    public static function whereContains(string $column, $value, string $condition = 'AND'): self
    {
    }

    /**
     * @param string $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see UserModel::whereNotContains
     */
    public static function whereNotContains(string $column, $value, string $condition = 'OR'): self
    {
    }

    /**
     * Search whether a column has a value other than the default value
     *
     * @param string $column
     * @param bool $has
     * @return $this
     * @see UserModel::whereHas
     */
    public static function whereHas(string $column, bool $has = true): self
    {
    }

    /**
     * Search whether a column dont have a value other than the default value
     *
     * @param string $column
     * @return $this
     * @see UserModel::whereNotHas
     */
    public static function whereNotHas(string $column): self
    {
    }

    /**
     * Specifies a grouping over the results of the query.
     * Replaces any previously specified groupings, if any.
     *
     * @param mixed $column the grouping column
     * @return $this
     * @see UserModel::groupBy
     */
    public static function groupBy($column): self
    {
    }

    /**
     * Specifies a restriction over the groups of the query.
     * Replaces any previous having restrictions, if any.
     *
     * @param mixed $column
     * @param mixed $operator
     * @param mixed|null $value
     * @param mixed $condition
     * @return $this
     * @see UserModel::having
     */
    public static function having($column, $operator, $value = null, $condition = 'AND'): self
    {
    }

    /**
     * Specifies an ordering for the query results.
     * Replaces any previously specified orderings, if any.
     *
     * @param string|Raw $column the ordering expression
     * @param string $order the ordering direction
     * @return $this
     * @see UserModel::orderBy
     */
    public static function orderBy($column, $order = 'ASC'): self
    {
    }

    /**
     * @param string $expression
     * @return $this
     * @see UserModel::orderByRaw
     */
    public static function orderByRaw($expression): self
    {
    }

    /**
     * Adds a DESC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see UserModel::desc
     */
    public static function desc(string $field): self
    {
    }

    /**
     * Add an ASC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see UserModel::asc
     */
    public static function asc(string $field): self
    {
    }

    /**
     * @return $this
     * @see UserModel::forUpdate
     */
    public static function forUpdate(): self
    {
    }

    /**
     * @return $this
     * @see UserModel::forShare
     */
    public static function forShare(): self
    {
    }

    /**
     * @param string|bool $lock
     * @return $this
     * @see UserModel::lock
     */
    public static function lock($lock): self
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see UserModel::when
     */
    public static function when($value, callable $callback, callable $default = null): self
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see UserModel::unless
     */
    public static function unless($value, callable $callback, callable $default = null): self
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see UserModel::setDbKeyConverter
     */
    public static function setDbKeyConverter(callable $converter = null): self
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see UserModel::setPhpKeyConverter
     */
    public static function setPhpKeyConverter(callable $converter = null): self
    {
    }

    /**
     * Add a (inner) join base on the relation to the query
     *
     * @param string|array $name
     * @param string $type
     * @return $this
     * @see UserModel::joinRelation
     */
    public static function joinRelation($name, string $type = 'INNER'): self
    {
    }

    /**
     * Add a inner join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see UserModel::innerJoinRelation
     */
    public static function innerJoinRelation($name): self
    {
    }

    /**
     * Add a left join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see UserModel::leftJoinRelation
     */
    public static function leftJoinRelation($name): self
    {
    }

    /**
     * Add a right join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see UserModel::rightJoinRelation
     */
    public static function rightJoinRelation($name): self
    {
    }

    /**
     * Check if the model method defines the "Relation" attribute (or the "@Relation" tag in doc comment)
     *
     * This method only checks whether the specified method has the "Relation" attribute,
     * and does not check the actual logic.
     * It is provided for external use to avoid directly calling `$this->$relation()` to cause attacks.
     *
     * @param string $method
     * @return bool
     * @see UserModel::isRelation
     */
    public static function isRelation(string $method): bool
    {
    }
}

namespace Miaoxing\App\Service;

if (0) {
    class GroupModel
    {
        /**
         * Returns the success result with model data
         *
         * @param array|string|BaseResource|mixed $merge
         * @return Ret
         * @see GroupModel::toRet
         */
        public function toRet($merge = []): \Wei\Ret
        {
        }

        /**
         * Set each attribute value, without checking whether the column is fillable, and save the model
         *
         * @param iterable $attributes
         * @return $this
         * @see GroupModel::saveAttributes
         */
        public function saveAttributes(iterable $attributes = []): self
        {
        }

        /**
         * Returns the record data as array
         *
         * @param array|callable $returnFields A indexed array specified the fields to return
         * @param callable|null $prepend
         * @return array
         * @see GroupModel::toArray
         */
        public function toArray($returnFields = [], callable $prepend = null): array
        {
        }

        /**
         * Return the record table name
         *
         * @return string
         * @see GroupModel::getTable
         */
        public function getTable(): string
        {
        }

        /**
         * Import a PHP array in this record
         *
         * @param iterable $array
         * @return $this
         * @see GroupModel::fromArray
         */
        public function fromArray(iterable $array): self
        {
        }

        /**
         * Save the record or data to database
         *
         * @param iterable $attributes
         * @return $this
         * @see GroupModel::save
         */
        public function save(iterable $attributes = []): self
        {
        }

        /**
         * Delete the current record and trigger the beforeDestroy and afterDestroy callback
         *
         * @param int|string $id
         * @return $this
         * @see GroupModel::destroy
         */
        public function destroy($id = null): self
        {
        }

        /**
         * Find a record by primary key, or throws 404 exception if record not found, then destroy the record
         *
         * @param string|int $id
         * @return $this
         * @throws \Exception when record not found
         * @see GroupModel::destroyOrFail
         */
        public function destroyOrFail($id): self
        {
        }

        /**
         * Set the record field value
         *
         * @param string|int|null $name
         * @param mixed $value
         * @param bool $throwException
         * @return $this|false
         * @see GroupModel::set
         */
        public function set($name, $value, bool $throwException = true)
        {
        }

        /**
         * Executes the generated SQL and returns the found record object or false
         *
         * @param int|string|array|null $id
         * @return $this|null
         * @see GroupModel::find
         */
        public function find($id): ?self
        {
        }

        /**
         * Find a record by primary key, or throws 404 exception if record not found
         *
         * @param int|string $id
         * @return $this
         * @throws \Exception
         * @see GroupModel::findOrFail
         */
        public function findOrFail($id): self
        {
        }

        /**
         * Find a record by primary key, or init with the specified attributes if record not found
         *
         * @param int|string $id
         * @param array|object $attributes
         * @return $this
         * @see GroupModel::findOrInit
         */
        public function findOrInit($id = null, $attributes = []): self
        {
        }

        /**
         * Find a record by primary key, or save with the specified attributes if record not found
         *
         * @param int|string $id
         * @param array $attributes
         * @return $this
         * @see GroupModel::findOrCreate
         */
        public function findOrCreate($id, $attributes = []): self
        {
        }

        /**
         * @param array $attributes
         * @param array|object $data
         * @return $this
         * @see GroupModel::findByOrCreate
         */
        public function findByOrCreate($attributes, $data = []): self
        {
        }

        /**
         * Executes the generated SQL and returns the found record collection object or false
         *
         * @param array $ids
         * @return $this|$this[]
         * @phpstan-return $this
         * @see GroupModel::findAll
         */
        public function findAll(array $ids): self
        {
        }

        /**
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this|null
         * @see GroupModel::findBy
         */
        public function findBy($column, $operator = null, $value = null): ?self
        {
        }

        /**
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this|$this[]
         * @phpstan-return $this
         * @see GroupModel::findAllBy
         */
        public function findAllBy($column, $operator = null, $value = null): self
        {
        }

        /**
         * @param array $attributes
         * @param array|object $data
         * @return $this
         * @see GroupModel::findOrInitBy
         */
        public function findOrInitBy(array $attributes = [], $data = []): self
        {
        }

        /**
         * Find a record by primary key value and throws 404 exception if record not found
         *
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this
         * @throws \Exception
         * @see GroupModel::findByOrFail
         */
        public function findByOrFail($column, $operator = null, $value = null): self
        {
        }

        /**
         * @param Req|null $req
         * @return $this
         * @throws \Exception
         * @see GroupModel::findFromReq
         */
        public function findFromReq(\Wei\Req $req = null): self
        {
        }

        /**
         * Executes the generated SQL and returns the found record object or null if not found
         *
         * @return $this|null
         * @see GroupModel::first
         */
        public function first(): ?self
        {
        }

        /**
         * @return $this|$this[]
         * @phpstan-return $this
         * @see GroupModel::all
         */
        public function all(): self
        {
        }

        /**
         * Coll: Specifies a field to be the key of the fetched array
         *
         * @param string $column
         * @return $this
         * @see GroupModel::indexBy
         */
        public function indexBy(string $column): self
        {
        }

        /**
         * Execute a update query with specified data
         *
         * @param array|string $set
         * @param mixed $value
         * @return int
         * @see GroupModel::update
         */
        public function update($set = [], $value = null): int
        {
        }

        /**
         * @param array|string|true $scopes
         * @return $this
         * @see GroupModel::unscoped
         */
        public function unscoped($scopes = []): self
        {
        }

        /**
         * Set or remove cache time for the query
         *
         * @param int|null $seconds
         * @return $this
         * @see GroupModel::setCacheTime
         */
        public function setCacheTime(?int $seconds): self
        {
        }

        /**
         * Returns the name of columns of current table
         *
         * @return array
         * @see GroupModel::getColumns
         */
        public function getColumns(): array
        {
        }

        /**
         * Check if column name exists
         *
         * @param string|int|null $name
         * @return bool
         * @see GroupModel::hasColumn
         */
        public function hasColumn($name): bool
        {
        }

        /**
         * Executes the generated query and returns the first array result
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return array|null
         * @see GroupModel::fetch
         */
        public function fetch($column = null, $operator = null, $value = null): ?array
        {
        }

        /**
         * Executes the generated query and returns all array results
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return array
         * @see GroupModel::fetchAll
         */
        public function fetchAll($column = null, $operator = null, $value = null): array
        {
        }

        /**
         * @param string $column
         * @param string|null $index
         * @return array
         * @see GroupModel::pluck
         */
        public function pluck(string $column, string $index = null): array
        {
        }

        /**
         * @param int $count
         * @param callable $callback
         * @return bool
         * @see GroupModel::chunk
         */
        public function chunk(int $count, callable $callback): bool
        {
        }

        /**
         * Executes a COUNT query to receive the rows number
         *
         * @param string $column
         * @return int
         * @see GroupModel::cnt
         */
        public function cnt($column = '*'): int
        {
        }

        /**
         * Executes a MAX query to receive the max value of column
         *
         * @param string $column
         * @return string|null
         * @see GroupModel::max
         */
        public function max(string $column): ?string
        {
        }

        /**
         * Execute a delete query with specified conditions
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return int
         * @see GroupModel::delete
         */
        public function delete($column = null, $operator = null, $value = null): int
        {
        }

        /**
         * Sets the position of the first result to retrieve (the "offset")
         *
         * @param int|float|string $offset The first result to return
         * @return $this
         * @see GroupModel::offset
         */
        public function offset($offset): self
        {
        }

        /**
         * Sets the maximum number of results to retrieve (the "limit")
         *
         * @param int|float|string $limit The maximum number of results to retrieve
         * @return $this
         * @see GroupModel::limit
         */
        public function limit($limit): self
        {
        }

        /**
         * Sets the page number, the "OFFSET" value is equals "($page - 1) * LIMIT"
         *
         * @param int $page The page number
         * @return $this
         * @see GroupModel::page
         */
        public function page($page): self
        {
        }

        /**
         * Specifies an item that is to be returned in the query result.
         * Replaces any previously specified selections, if any.
         *
         * @param array|string $columns the selection expressions
         * @return $this
         * @see GroupModel::select
         */
        public function select($columns = ['*']): self
        {
        }

        /**
         * @param array|string $columns
         * @return $this
         * @see GroupModel::selectDistinct
         */
        public function selectDistinct($columns): self
        {
        }

        /**
         * @param string $expression
         * @return $this
         * @see GroupModel::selectRaw
         */
        public function selectRaw($expression): self
        {
        }

        /**
         * Specifies columns that are not to be returned in the query result.
         * Replaces any previously specified selections, if any.
         *
         * @param array|string $columns
         * @return $this
         * @see GroupModel::selectExcept
         */
        public function selectExcept($columns): self
        {
        }

        /**
         * Specifies an item of the main table that is to be returned in the query result.
         * Default to all columns of the main table
         *
         * @param string $column
         * @return $this
         * @see GroupModel::selectMain
         */
        public function selectMain(string $column = '*'): self
        {
        }

        /**
         * Sets table for FROM query
         *
         * @param string $table
         * @param string|null $alias
         * @return $this
         * @see GroupModel::from
         */
        public function from(string $table, $alias = null): self
        {
        }

        /**
         * @param string $table
         * @param mixed|null $alias
         * @return $this
         * @see GroupModel::table
         */
        public function table(string $table, $alias = null): self
        {
        }

        /**
         * Adds a inner join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @param string $type
         * @return $this
         * @see GroupModel::join
         */
        public function join(
            string $table,
            string $first = null,
            string $operator = '=',
            string $second = null,
            string $type = 'INNER'
        ): self {
        }

        /**
         * Adds a inner join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see GroupModel::innerJoin
         */
        public function innerJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Adds a left join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see GroupModel::leftJoin
         */
        public function leftJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Adds a right join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see GroupModel::rightJoin
         */
        public function rightJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Specifies one or more restrictions to the query result.
         * Replaces any previously specified restrictions, if any.
         *
         * ```php
         * $user = wei()->db('user')->where('id = 1');
         * $user = wei()->db('user')->where('id = ?', 1);
         * $users = wei()->db('user')->where(array('id' => '1', 'username' => 'twin'));
         * $users = wei()->where(array('id' => array('1', '2', '3')));
         * ```
         *
         * @param array|Closure|string|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this
         * @see GroupModel::where
         */
        public function where($column = null, $operator = null, $value = null): self
        {
        }

        /**
         * @param string $expression
         * @param mixed $params
         * @return $this
         * @see GroupModel::whereRaw
         */
        public function whereRaw($expression, $params = null): self
        {
        }

        /**
         * @param mixed $column
         * @param mixed $value
         * @return $this
         * @see GroupModel::whereNot
         */
        public function whereNot($column, $value): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see GroupModel::whereBetween
         */
        public function whereBetween(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see GroupModel::whereNotBetween
         */
        public function whereNotBetween(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see GroupModel::whereIn
         */
        public function whereIn(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see GroupModel::whereNotIn
         */
        public function whereNotIn(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @return $this
         * @see GroupModel::whereNull
         */
        public function whereNull(string $column): self
        {
        }

        /**
         * @param string $column
         * @return $this
         * @see GroupModel::whereNotNull
         */
        public function whereNotNull(string $column): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see GroupModel::whereDate
         */
        public function whereDate(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see GroupModel::whereMonth
         */
        public function whereMonth(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see GroupModel::whereDay
         */
        public function whereDay(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see GroupModel::whereYear
         */
        public function whereYear(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see GroupModel::whereTime
         */
        public function whereTime(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrColumn2
         * @param mixed|null $column2
         * @return $this
         * @see GroupModel::whereColumn
         */
        public function whereColumn(string $column, $opOrColumn2, $column2 = null): self
        {
        }

        /**
         * 搜索字段是否包含某个值
         *
         * @param string $column
         * @param mixed $value
         * @param string $condition
         * @return $this
         * @see GroupModel::whereContains
         */
        public function whereContains(string $column, $value, string $condition = 'AND'): self
        {
        }

        /**
         * @param string $column
         * @param mixed $value
         * @param string $condition
         * @return $this
         * @see GroupModel::whereNotContains
         */
        public function whereNotContains(string $column, $value, string $condition = 'OR'): self
        {
        }

        /**
         * Search whether a column has a value other than the default value
         *
         * @param string $column
         * @param bool $has
         * @return $this
         * @see GroupModel::whereHas
         */
        public function whereHas(string $column, bool $has = true): self
        {
        }

        /**
         * Search whether a column dont have a value other than the default value
         *
         * @param string $column
         * @return $this
         * @see GroupModel::whereNotHas
         */
        public function whereNotHas(string $column): self
        {
        }

        /**
         * Specifies a grouping over the results of the query.
         * Replaces any previously specified groupings, if any.
         *
         * @param mixed $column the grouping column
         * @return $this
         * @see GroupModel::groupBy
         */
        public function groupBy($column): self
        {
        }

        /**
         * Specifies a restriction over the groups of the query.
         * Replaces any previous having restrictions, if any.
         *
         * @param mixed $column
         * @param mixed $operator
         * @param mixed|null $value
         * @param mixed $condition
         * @return $this
         * @see GroupModel::having
         */
        public function having($column, $operator, $value = null, $condition = 'AND'): self
        {
        }

        /**
         * Specifies an ordering for the query results.
         * Replaces any previously specified orderings, if any.
         *
         * @param string|Raw $column the ordering expression
         * @param string $order the ordering direction
         * @return $this
         * @see GroupModel::orderBy
         */
        public function orderBy($column, $order = 'ASC'): self
        {
        }

        /**
         * @param string $expression
         * @return $this
         * @see GroupModel::orderByRaw
         */
        public function orderByRaw($expression): self
        {
        }

        /**
         * Adds a DESC ordering to the query
         *
         * @param string $field The name of field
         * @return $this
         * @see GroupModel::desc
         */
        public function desc(string $field): self
        {
        }

        /**
         * Add an ASC ordering to the query
         *
         * @param string $field The name of field
         * @return $this
         * @see GroupModel::asc
         */
        public function asc(string $field): self
        {
        }

        /**
         * @return $this
         * @see GroupModel::forUpdate
         */
        public function forUpdate(): self
        {
        }

        /**
         * @return $this
         * @see GroupModel::forShare
         */
        public function forShare(): self
        {
        }

        /**
         * @param string|bool $lock
         * @return $this
         * @see GroupModel::lock
         */
        public function lock($lock): self
        {
        }

        /**
         * @param mixed $value
         * @param callable $callback
         * @param callable|null $default
         * @return $this
         * @see GroupModel::when
         */
        public function when($value, callable $callback, callable $default = null): self
        {
        }

        /**
         * @param mixed $value
         * @param callable $callback
         * @param callable|null $default
         * @return $this
         * @see GroupModel::unless
         */
        public function unless($value, callable $callback, callable $default = null): self
        {
        }

        /**
         * @param callable|null $converter
         * @return $this
         * @see GroupModel::setDbKeyConverter
         */
        public function setDbKeyConverter(callable $converter = null): self
        {
        }

        /**
         * @param callable|null $converter
         * @return $this
         * @see GroupModel::setPhpKeyConverter
         */
        public function setPhpKeyConverter(callable $converter = null): self
        {
        }

        /**
         * Add a (inner) join base on the relation to the query
         *
         * @param string|array $name
         * @param string $type
         * @return $this
         * @see GroupModel::joinRelation
         */
        public function joinRelation($name, string $type = 'INNER'): self
        {
        }

        /**
         * Add a inner join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see GroupModel::innerJoinRelation
         */
        public function innerJoinRelation($name): self
        {
        }

        /**
         * Add a left join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see GroupModel::leftJoinRelation
         */
        public function leftJoinRelation($name): self
        {
        }

        /**
         * Add a right join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see GroupModel::rightJoinRelation
         */
        public function rightJoinRelation($name): self
        {
        }

        /**
         * Check if the model method defines the "Relation" attribute (or the "@Relation" tag in doc comment)
         *
         * This method only checks whether the specified method has the "Relation" attribute,
         * and does not check the actual logic.
         * It is provided for external use to avoid directly calling `$this->$relation()` to cause attacks.
         *
         * @param string $method
         * @return bool
         * @see GroupModel::isRelation
         */
        public function isRelation(string $method): bool
        {
        }

        /**
         * Really remove the record from database
         *
         * @param int|string $id
         * @return $this
         * @see GroupModel::reallyDestroy
         */
        public function reallyDestroy($id = null): self
        {
        }

        /**
         * Add a query to filter soft deleted records
         *
         * @return $this
         * @see GroupModel::withoutDeleted
         */
        public function withoutDeleted(): self
        {
        }

        /**
         * Add a query to return only deleted records
         *
         * @return $this
         * @see GroupModel::onlyDeleted
         */
        public function onlyDeleted(): self
        {
        }

        /**
         * Remove "withoutDeleted" in the query, expect to return all records
         *
         * @return $this
         * @see GroupModel::withDeleted
         */
        public function withDeleted(): self
        {
        }

        /**
         * Add a query to return only purged records
         *
         * @return $this
         * @see GroupModel::onlyPurged
         */
        public function onlyPurged(): self
        {
        }
    }

    class JsConfig
    {
        /**
         * @return array
         * @see JsConfig::toArray
         */
        public function toArray()
        {
        }
    }

    class Permission
    {
        /**
         * Whether enabled check permission
         *
         * @return bool
         * @see Permission::isEnabledCheck
         */
        public function isEnabledCheck(): bool
        {
        }

        /**
         * Whether enabled role management
         *
         * @return bool
         * @see Permission::isEnabledRoleManage
         */
        public function isEnabledRoleManage(): bool
        {
        }

        /**
         * Whether enabled permission management
         *
         * @return bool
         * @see Permission::isEnabledPermissionManage
         */
        public function isEnabledPermissionManage(): bool
        {
        }
    }

    class PermissionMap
    {
    }

    class PermissionModel
    {
        /**
         * Returns the success result with model data
         *
         * @param array|string|BaseResource|mixed $merge
         * @return Ret
         * @see PermissionModel::toRet
         */
        public function toRet($merge = []): \Wei\Ret
        {
        }

        /**
         * Set each attribute value, without checking whether the column is fillable, and save the model
         *
         * @param iterable $attributes
         * @return $this
         * @see PermissionModel::saveAttributes
         */
        public function saveAttributes(iterable $attributes = []): self
        {
        }

        /**
         * Returns the record data as array
         *
         * @param array|callable $returnFields A indexed array specified the fields to return
         * @param callable|null $prepend
         * @return array
         * @see PermissionModel::toArray
         */
        public function toArray($returnFields = [], callable $prepend = null): array
        {
        }

        /**
         * Return the record table name
         *
         * @return string
         * @see PermissionModel::getTable
         */
        public function getTable(): string
        {
        }

        /**
         * Import a PHP array in this record
         *
         * @param iterable $array
         * @return $this
         * @see PermissionModel::fromArray
         */
        public function fromArray(iterable $array): self
        {
        }

        /**
         * Save the record or data to database
         *
         * @param iterable $attributes
         * @return $this
         * @see PermissionModel::save
         */
        public function save(iterable $attributes = []): self
        {
        }

        /**
         * Delete the current record and trigger the beforeDestroy and afterDestroy callback
         *
         * @param int|string $id
         * @return $this
         * @see PermissionModel::destroy
         */
        public function destroy($id = null): self
        {
        }

        /**
         * Find a record by primary key, or throws 404 exception if record not found, then destroy the record
         *
         * @param string|int $id
         * @return $this
         * @throws \Exception when record not found
         * @see PermissionModel::destroyOrFail
         */
        public function destroyOrFail($id): self
        {
        }

        /**
         * Set the record field value
         *
         * @param string|int|null $name
         * @param mixed $value
         * @param bool $throwException
         * @return $this|false
         * @see PermissionModel::set
         */
        public function set($name, $value, bool $throwException = true)
        {
        }

        /**
         * Executes the generated SQL and returns the found record object or false
         *
         * @param int|string|array|null $id
         * @return $this|null
         * @see PermissionModel::find
         */
        public function find($id): ?self
        {
        }

        /**
         * Find a record by primary key, or throws 404 exception if record not found
         *
         * @param int|string $id
         * @return $this
         * @throws \Exception
         * @see PermissionModel::findOrFail
         */
        public function findOrFail($id): self
        {
        }

        /**
         * Find a record by primary key, or init with the specified attributes if record not found
         *
         * @param int|string $id
         * @param array|object $attributes
         * @return $this
         * @see PermissionModel::findOrInit
         */
        public function findOrInit($id = null, $attributes = []): self
        {
        }

        /**
         * Find a record by primary key, or save with the specified attributes if record not found
         *
         * @param int|string $id
         * @param array $attributes
         * @return $this
         * @see PermissionModel::findOrCreate
         */
        public function findOrCreate($id, $attributes = []): self
        {
        }

        /**
         * @param array $attributes
         * @param array|object $data
         * @return $this
         * @see PermissionModel::findByOrCreate
         */
        public function findByOrCreate($attributes, $data = []): self
        {
        }

        /**
         * Executes the generated SQL and returns the found record collection object or false
         *
         * @param array $ids
         * @return $this|$this[]
         * @phpstan-return $this
         * @see PermissionModel::findAll
         */
        public function findAll(array $ids): self
        {
        }

        /**
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this|null
         * @see PermissionModel::findBy
         */
        public function findBy($column, $operator = null, $value = null): ?self
        {
        }

        /**
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this|$this[]
         * @phpstan-return $this
         * @see PermissionModel::findAllBy
         */
        public function findAllBy($column, $operator = null, $value = null): self
        {
        }

        /**
         * @param array $attributes
         * @param array|object $data
         * @return $this
         * @see PermissionModel::findOrInitBy
         */
        public function findOrInitBy(array $attributes = [], $data = []): self
        {
        }

        /**
         * Find a record by primary key value and throws 404 exception if record not found
         *
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this
         * @throws \Exception
         * @see PermissionModel::findByOrFail
         */
        public function findByOrFail($column, $operator = null, $value = null): self
        {
        }

        /**
         * @param Req|null $req
         * @return $this
         * @throws \Exception
         * @see PermissionModel::findFromReq
         */
        public function findFromReq(\Wei\Req $req = null): self
        {
        }

        /**
         * Executes the generated SQL and returns the found record object or null if not found
         *
         * @return $this|null
         * @see PermissionModel::first
         */
        public function first(): ?self
        {
        }

        /**
         * @return $this|$this[]
         * @phpstan-return $this
         * @see PermissionModel::all
         */
        public function all(): self
        {
        }

        /**
         * Coll: Specifies a field to be the key of the fetched array
         *
         * @param string $column
         * @return $this
         * @see PermissionModel::indexBy
         */
        public function indexBy(string $column): self
        {
        }

        /**
         * Execute a update query with specified data
         *
         * @param array|string $set
         * @param mixed $value
         * @return int
         * @see PermissionModel::update
         */
        public function update($set = [], $value = null): int
        {
        }

        /**
         * @param array|string|true $scopes
         * @return $this
         * @see PermissionModel::unscoped
         */
        public function unscoped($scopes = []): self
        {
        }

        /**
         * Set or remove cache time for the query
         *
         * @param int|null $seconds
         * @return $this
         * @see PermissionModel::setCacheTime
         */
        public function setCacheTime(?int $seconds): self
        {
        }

        /**
         * Returns the name of columns of current table
         *
         * @return array
         * @see PermissionModel::getColumns
         */
        public function getColumns(): array
        {
        }

        /**
         * Check if column name exists
         *
         * @param string|int|null $name
         * @return bool
         * @see PermissionModel::hasColumn
         */
        public function hasColumn($name): bool
        {
        }

        /**
         * Executes the generated query and returns the first array result
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return array|null
         * @see PermissionModel::fetch
         */
        public function fetch($column = null, $operator = null, $value = null): ?array
        {
        }

        /**
         * Executes the generated query and returns all array results
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return array
         * @see PermissionModel::fetchAll
         */
        public function fetchAll($column = null, $operator = null, $value = null): array
        {
        }

        /**
         * @param string $column
         * @param string|null $index
         * @return array
         * @see PermissionModel::pluck
         */
        public function pluck(string $column, string $index = null): array
        {
        }

        /**
         * @param int $count
         * @param callable $callback
         * @return bool
         * @see PermissionModel::chunk
         */
        public function chunk(int $count, callable $callback): bool
        {
        }

        /**
         * Executes a COUNT query to receive the rows number
         *
         * @param string $column
         * @return int
         * @see PermissionModel::cnt
         */
        public function cnt($column = '*'): int
        {
        }

        /**
         * Executes a MAX query to receive the max value of column
         *
         * @param string $column
         * @return string|null
         * @see PermissionModel::max
         */
        public function max(string $column): ?string
        {
        }

        /**
         * Execute a delete query with specified conditions
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return int
         * @see PermissionModel::delete
         */
        public function delete($column = null, $operator = null, $value = null): int
        {
        }

        /**
         * Sets the position of the first result to retrieve (the "offset")
         *
         * @param int|float|string $offset The first result to return
         * @return $this
         * @see PermissionModel::offset
         */
        public function offset($offset): self
        {
        }

        /**
         * Sets the maximum number of results to retrieve (the "limit")
         *
         * @param int|float|string $limit The maximum number of results to retrieve
         * @return $this
         * @see PermissionModel::limit
         */
        public function limit($limit): self
        {
        }

        /**
         * Sets the page number, the "OFFSET" value is equals "($page - 1) * LIMIT"
         *
         * @param int $page The page number
         * @return $this
         * @see PermissionModel::page
         */
        public function page($page): self
        {
        }

        /**
         * Specifies an item that is to be returned in the query result.
         * Replaces any previously specified selections, if any.
         *
         * @param array|string $columns the selection expressions
         * @return $this
         * @see PermissionModel::select
         */
        public function select($columns = ['*']): self
        {
        }

        /**
         * @param array|string $columns
         * @return $this
         * @see PermissionModel::selectDistinct
         */
        public function selectDistinct($columns): self
        {
        }

        /**
         * @param string $expression
         * @return $this
         * @see PermissionModel::selectRaw
         */
        public function selectRaw($expression): self
        {
        }

        /**
         * Specifies columns that are not to be returned in the query result.
         * Replaces any previously specified selections, if any.
         *
         * @param array|string $columns
         * @return $this
         * @see PermissionModel::selectExcept
         */
        public function selectExcept($columns): self
        {
        }

        /**
         * Specifies an item of the main table that is to be returned in the query result.
         * Default to all columns of the main table
         *
         * @param string $column
         * @return $this
         * @see PermissionModel::selectMain
         */
        public function selectMain(string $column = '*'): self
        {
        }

        /**
         * Sets table for FROM query
         *
         * @param string $table
         * @param string|null $alias
         * @return $this
         * @see PermissionModel::from
         */
        public function from(string $table, $alias = null): self
        {
        }

        /**
         * @param string $table
         * @param mixed|null $alias
         * @return $this
         * @see PermissionModel::table
         */
        public function table(string $table, $alias = null): self
        {
        }

        /**
         * Adds a inner join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @param string $type
         * @return $this
         * @see PermissionModel::join
         */
        public function join(
            string $table,
            string $first = null,
            string $operator = '=',
            string $second = null,
            string $type = 'INNER'
        ): self {
        }

        /**
         * Adds a inner join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see PermissionModel::innerJoin
         */
        public function innerJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Adds a left join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see PermissionModel::leftJoin
         */
        public function leftJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Adds a right join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see PermissionModel::rightJoin
         */
        public function rightJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Specifies one or more restrictions to the query result.
         * Replaces any previously specified restrictions, if any.
         *
         * ```php
         * $user = wei()->db('user')->where('id = 1');
         * $user = wei()->db('user')->where('id = ?', 1);
         * $users = wei()->db('user')->where(array('id' => '1', 'username' => 'twin'));
         * $users = wei()->where(array('id' => array('1', '2', '3')));
         * ```
         *
         * @param array|Closure|string|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this
         * @see PermissionModel::where
         */
        public function where($column = null, $operator = null, $value = null): self
        {
        }

        /**
         * @param string $expression
         * @param mixed $params
         * @return $this
         * @see PermissionModel::whereRaw
         */
        public function whereRaw($expression, $params = null): self
        {
        }

        /**
         * @param mixed $column
         * @param mixed $value
         * @return $this
         * @see PermissionModel::whereNot
         */
        public function whereNot($column, $value): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see PermissionModel::whereBetween
         */
        public function whereBetween(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see PermissionModel::whereNotBetween
         */
        public function whereNotBetween(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see PermissionModel::whereIn
         */
        public function whereIn(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see PermissionModel::whereNotIn
         */
        public function whereNotIn(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @return $this
         * @see PermissionModel::whereNull
         */
        public function whereNull(string $column): self
        {
        }

        /**
         * @param string $column
         * @return $this
         * @see PermissionModel::whereNotNull
         */
        public function whereNotNull(string $column): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see PermissionModel::whereDate
         */
        public function whereDate(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see PermissionModel::whereMonth
         */
        public function whereMonth(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see PermissionModel::whereDay
         */
        public function whereDay(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see PermissionModel::whereYear
         */
        public function whereYear(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see PermissionModel::whereTime
         */
        public function whereTime(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrColumn2
         * @param mixed|null $column2
         * @return $this
         * @see PermissionModel::whereColumn
         */
        public function whereColumn(string $column, $opOrColumn2, $column2 = null): self
        {
        }

        /**
         * 搜索字段是否包含某个值
         *
         * @param string $column
         * @param mixed $value
         * @param string $condition
         * @return $this
         * @see PermissionModel::whereContains
         */
        public function whereContains(string $column, $value, string $condition = 'AND'): self
        {
        }

        /**
         * @param string $column
         * @param mixed $value
         * @param string $condition
         * @return $this
         * @see PermissionModel::whereNotContains
         */
        public function whereNotContains(string $column, $value, string $condition = 'OR'): self
        {
        }

        /**
         * Search whether a column has a value other than the default value
         *
         * @param string $column
         * @param bool $has
         * @return $this
         * @see PermissionModel::whereHas
         */
        public function whereHas(string $column, bool $has = true): self
        {
        }

        /**
         * Search whether a column dont have a value other than the default value
         *
         * @param string $column
         * @return $this
         * @see PermissionModel::whereNotHas
         */
        public function whereNotHas(string $column): self
        {
        }

        /**
         * Specifies a grouping over the results of the query.
         * Replaces any previously specified groupings, if any.
         *
         * @param mixed $column the grouping column
         * @return $this
         * @see PermissionModel::groupBy
         */
        public function groupBy($column): self
        {
        }

        /**
         * Specifies a restriction over the groups of the query.
         * Replaces any previous having restrictions, if any.
         *
         * @param mixed $column
         * @param mixed $operator
         * @param mixed|null $value
         * @param mixed $condition
         * @return $this
         * @see PermissionModel::having
         */
        public function having($column, $operator, $value = null, $condition = 'AND'): self
        {
        }

        /**
         * Specifies an ordering for the query results.
         * Replaces any previously specified orderings, if any.
         *
         * @param string|Raw $column the ordering expression
         * @param string $order the ordering direction
         * @return $this
         * @see PermissionModel::orderBy
         */
        public function orderBy($column, $order = 'ASC'): self
        {
        }

        /**
         * @param string $expression
         * @return $this
         * @see PermissionModel::orderByRaw
         */
        public function orderByRaw($expression): self
        {
        }

        /**
         * Adds a DESC ordering to the query
         *
         * @param string $field The name of field
         * @return $this
         * @see PermissionModel::desc
         */
        public function desc(string $field): self
        {
        }

        /**
         * Add an ASC ordering to the query
         *
         * @param string $field The name of field
         * @return $this
         * @see PermissionModel::asc
         */
        public function asc(string $field): self
        {
        }

        /**
         * @return $this
         * @see PermissionModel::forUpdate
         */
        public function forUpdate(): self
        {
        }

        /**
         * @return $this
         * @see PermissionModel::forShare
         */
        public function forShare(): self
        {
        }

        /**
         * @param string|bool $lock
         * @return $this
         * @see PermissionModel::lock
         */
        public function lock($lock): self
        {
        }

        /**
         * @param mixed $value
         * @param callable $callback
         * @param callable|null $default
         * @return $this
         * @see PermissionModel::when
         */
        public function when($value, callable $callback, callable $default = null): self
        {
        }

        /**
         * @param mixed $value
         * @param callable $callback
         * @param callable|null $default
         * @return $this
         * @see PermissionModel::unless
         */
        public function unless($value, callable $callback, callable $default = null): self
        {
        }

        /**
         * @param callable|null $converter
         * @return $this
         * @see PermissionModel::setDbKeyConverter
         */
        public function setDbKeyConverter(callable $converter = null): self
        {
        }

        /**
         * @param callable|null $converter
         * @return $this
         * @see PermissionModel::setPhpKeyConverter
         */
        public function setPhpKeyConverter(callable $converter = null): self
        {
        }

        /**
         * Add a (inner) join base on the relation to the query
         *
         * @param string|array $name
         * @param string $type
         * @return $this
         * @see PermissionModel::joinRelation
         */
        public function joinRelation($name, string $type = 'INNER'): self
        {
        }

        /**
         * Add a inner join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see PermissionModel::innerJoinRelation
         */
        public function innerJoinRelation($name): self
        {
        }

        /**
         * Add a left join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see PermissionModel::leftJoinRelation
         */
        public function leftJoinRelation($name): self
        {
        }

        /**
         * Add a right join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see PermissionModel::rightJoinRelation
         */
        public function rightJoinRelation($name): self
        {
        }

        /**
         * Check if the model method defines the "Relation" attribute (or the "@Relation" tag in doc comment)
         *
         * This method only checks whether the specified method has the "Relation" attribute,
         * and does not check the actual logic.
         * It is provided for external use to avoid directly calling `$this->$relation()` to cause attacks.
         *
         * @param string $method
         * @return bool
         * @see PermissionModel::isRelation
         */
        public function isRelation(string $method): bool
        {
        }

        /**
         * Really remove the record from database
         *
         * @param int|string $id
         * @return $this
         * @see PermissionModel::reallyDestroy
         */
        public function reallyDestroy($id = null): self
        {
        }

        /**
         * Add a query to filter soft deleted records
         *
         * @return $this
         * @see PermissionModel::withoutDeleted
         */
        public function withoutDeleted(): self
        {
        }

        /**
         * Add a query to return only deleted records
         *
         * @return $this
         * @see PermissionModel::onlyDeleted
         */
        public function onlyDeleted(): self
        {
        }

        /**
         * Remove "withoutDeleted" in the query, expect to return all records
         *
         * @return $this
         * @see PermissionModel::withDeleted
         */
        public function withDeleted(): self
        {
        }

        /**
         * Add a query to return only purged records
         *
         * @return $this
         * @see PermissionModel::onlyPurged
         */
        public function onlyPurged(): self
        {
        }
    }

    class PermissionsRoleModel
    {
        /**
         * Returns the success result with model data
         *
         * @param array|string|BaseResource|mixed $merge
         * @return Ret
         * @see PermissionsRoleModel::toRet
         */
        public function toRet($merge = []): \Wei\Ret
        {
        }

        /**
         * Set each attribute value, without checking whether the column is fillable, and save the model
         *
         * @param iterable $attributes
         * @return $this
         * @see PermissionsRoleModel::saveAttributes
         */
        public function saveAttributes(iterable $attributes = []): self
        {
        }

        /**
         * Returns the record data as array
         *
         * @param array|callable $returnFields A indexed array specified the fields to return
         * @param callable|null $prepend
         * @return array
         * @see PermissionsRoleModel::toArray
         */
        public function toArray($returnFields = [], callable $prepend = null): array
        {
        }

        /**
         * Return the record table name
         *
         * @return string
         * @see PermissionsRoleModel::getTable
         */
        public function getTable(): string
        {
        }

        /**
         * Import a PHP array in this record
         *
         * @param iterable $array
         * @return $this
         * @see PermissionsRoleModel::fromArray
         */
        public function fromArray(iterable $array): self
        {
        }

        /**
         * Save the record or data to database
         *
         * @param iterable $attributes
         * @return $this
         * @see PermissionsRoleModel::save
         */
        public function save(iterable $attributes = []): self
        {
        }

        /**
         * Delete the current record and trigger the beforeDestroy and afterDestroy callback
         *
         * @param int|string $id
         * @return $this
         * @see PermissionsRoleModel::destroy
         */
        public function destroy($id = null): self
        {
        }

        /**
         * Find a record by primary key, or throws 404 exception if record not found, then destroy the record
         *
         * @param string|int $id
         * @return $this
         * @throws \Exception when record not found
         * @see PermissionsRoleModel::destroyOrFail
         */
        public function destroyOrFail($id): self
        {
        }

        /**
         * Set the record field value
         *
         * @param string|int|null $name
         * @param mixed $value
         * @param bool $throwException
         * @return $this|false
         * @see PermissionsRoleModel::set
         */
        public function set($name, $value, bool $throwException = true)
        {
        }

        /**
         * Executes the generated SQL and returns the found record object or false
         *
         * @param int|string|array|null $id
         * @return $this|null
         * @see PermissionsRoleModel::find
         */
        public function find($id): ?self
        {
        }

        /**
         * Find a record by primary key, or throws 404 exception if record not found
         *
         * @param int|string $id
         * @return $this
         * @throws \Exception
         * @see PermissionsRoleModel::findOrFail
         */
        public function findOrFail($id): self
        {
        }

        /**
         * Find a record by primary key, or init with the specified attributes if record not found
         *
         * @param int|string $id
         * @param array|object $attributes
         * @return $this
         * @see PermissionsRoleModel::findOrInit
         */
        public function findOrInit($id = null, $attributes = []): self
        {
        }

        /**
         * Find a record by primary key, or save with the specified attributes if record not found
         *
         * @param int|string $id
         * @param array $attributes
         * @return $this
         * @see PermissionsRoleModel::findOrCreate
         */
        public function findOrCreate($id, $attributes = []): self
        {
        }

        /**
         * @param array $attributes
         * @param array|object $data
         * @return $this
         * @see PermissionsRoleModel::findByOrCreate
         */
        public function findByOrCreate($attributes, $data = []): self
        {
        }

        /**
         * Executes the generated SQL and returns the found record collection object or false
         *
         * @param array $ids
         * @return $this|$this[]
         * @phpstan-return $this
         * @see PermissionsRoleModel::findAll
         */
        public function findAll(array $ids): self
        {
        }

        /**
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this|null
         * @see PermissionsRoleModel::findBy
         */
        public function findBy($column, $operator = null, $value = null): ?self
        {
        }

        /**
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this|$this[]
         * @phpstan-return $this
         * @see PermissionsRoleModel::findAllBy
         */
        public function findAllBy($column, $operator = null, $value = null): self
        {
        }

        /**
         * @param array $attributes
         * @param array|object $data
         * @return $this
         * @see PermissionsRoleModel::findOrInitBy
         */
        public function findOrInitBy(array $attributes = [], $data = []): self
        {
        }

        /**
         * Find a record by primary key value and throws 404 exception if record not found
         *
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this
         * @throws \Exception
         * @see PermissionsRoleModel::findByOrFail
         */
        public function findByOrFail($column, $operator = null, $value = null): self
        {
        }

        /**
         * @param Req|null $req
         * @return $this
         * @throws \Exception
         * @see PermissionsRoleModel::findFromReq
         */
        public function findFromReq(\Wei\Req $req = null): self
        {
        }

        /**
         * Executes the generated SQL and returns the found record object or null if not found
         *
         * @return $this|null
         * @see PermissionsRoleModel::first
         */
        public function first(): ?self
        {
        }

        /**
         * @return $this|$this[]
         * @phpstan-return $this
         * @see PermissionsRoleModel::all
         */
        public function all(): self
        {
        }

        /**
         * Coll: Specifies a field to be the key of the fetched array
         *
         * @param string $column
         * @return $this
         * @see PermissionsRoleModel::indexBy
         */
        public function indexBy(string $column): self
        {
        }

        /**
         * Execute a update query with specified data
         *
         * @param array|string $set
         * @param mixed $value
         * @return int
         * @see PermissionsRoleModel::update
         */
        public function update($set = [], $value = null): int
        {
        }

        /**
         * @param array|string|true $scopes
         * @return $this
         * @see PermissionsRoleModel::unscoped
         */
        public function unscoped($scopes = []): self
        {
        }

        /**
         * Set or remove cache time for the query
         *
         * @param int|null $seconds
         * @return $this
         * @see PermissionsRoleModel::setCacheTime
         */
        public function setCacheTime(?int $seconds): self
        {
        }

        /**
         * Returns the name of columns of current table
         *
         * @return array
         * @see PermissionsRoleModel::getColumns
         */
        public function getColumns(): array
        {
        }

        /**
         * Check if column name exists
         *
         * @param string|int|null $name
         * @return bool
         * @see PermissionsRoleModel::hasColumn
         */
        public function hasColumn($name): bool
        {
        }

        /**
         * Executes the generated query and returns the first array result
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return array|null
         * @see PermissionsRoleModel::fetch
         */
        public function fetch($column = null, $operator = null, $value = null): ?array
        {
        }

        /**
         * Executes the generated query and returns all array results
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return array
         * @see PermissionsRoleModel::fetchAll
         */
        public function fetchAll($column = null, $operator = null, $value = null): array
        {
        }

        /**
         * @param string $column
         * @param string|null $index
         * @return array
         * @see PermissionsRoleModel::pluck
         */
        public function pluck(string $column, string $index = null): array
        {
        }

        /**
         * @param int $count
         * @param callable $callback
         * @return bool
         * @see PermissionsRoleModel::chunk
         */
        public function chunk(int $count, callable $callback): bool
        {
        }

        /**
         * Executes a COUNT query to receive the rows number
         *
         * @param string $column
         * @return int
         * @see PermissionsRoleModel::cnt
         */
        public function cnt($column = '*'): int
        {
        }

        /**
         * Executes a MAX query to receive the max value of column
         *
         * @param string $column
         * @return string|null
         * @see PermissionsRoleModel::max
         */
        public function max(string $column): ?string
        {
        }

        /**
         * Execute a delete query with specified conditions
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return int
         * @see PermissionsRoleModel::delete
         */
        public function delete($column = null, $operator = null, $value = null): int
        {
        }

        /**
         * Sets the position of the first result to retrieve (the "offset")
         *
         * @param int|float|string $offset The first result to return
         * @return $this
         * @see PermissionsRoleModel::offset
         */
        public function offset($offset): self
        {
        }

        /**
         * Sets the maximum number of results to retrieve (the "limit")
         *
         * @param int|float|string $limit The maximum number of results to retrieve
         * @return $this
         * @see PermissionsRoleModel::limit
         */
        public function limit($limit): self
        {
        }

        /**
         * Sets the page number, the "OFFSET" value is equals "($page - 1) * LIMIT"
         *
         * @param int $page The page number
         * @return $this
         * @see PermissionsRoleModel::page
         */
        public function page($page): self
        {
        }

        /**
         * Specifies an item that is to be returned in the query result.
         * Replaces any previously specified selections, if any.
         *
         * @param array|string $columns the selection expressions
         * @return $this
         * @see PermissionsRoleModel::select
         */
        public function select($columns = ['*']): self
        {
        }

        /**
         * @param array|string $columns
         * @return $this
         * @see PermissionsRoleModel::selectDistinct
         */
        public function selectDistinct($columns): self
        {
        }

        /**
         * @param string $expression
         * @return $this
         * @see PermissionsRoleModel::selectRaw
         */
        public function selectRaw($expression): self
        {
        }

        /**
         * Specifies columns that are not to be returned in the query result.
         * Replaces any previously specified selections, if any.
         *
         * @param array|string $columns
         * @return $this
         * @see PermissionsRoleModel::selectExcept
         */
        public function selectExcept($columns): self
        {
        }

        /**
         * Specifies an item of the main table that is to be returned in the query result.
         * Default to all columns of the main table
         *
         * @param string $column
         * @return $this
         * @see PermissionsRoleModel::selectMain
         */
        public function selectMain(string $column = '*'): self
        {
        }

        /**
         * Sets table for FROM query
         *
         * @param string $table
         * @param string|null $alias
         * @return $this
         * @see PermissionsRoleModel::from
         */
        public function from(string $table, $alias = null): self
        {
        }

        /**
         * @param string $table
         * @param mixed|null $alias
         * @return $this
         * @see PermissionsRoleModel::table
         */
        public function table(string $table, $alias = null): self
        {
        }

        /**
         * Adds a inner join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @param string $type
         * @return $this
         * @see PermissionsRoleModel::join
         */
        public function join(
            string $table,
            string $first = null,
            string $operator = '=',
            string $second = null,
            string $type = 'INNER'
        ): self {
        }

        /**
         * Adds a inner join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see PermissionsRoleModel::innerJoin
         */
        public function innerJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Adds a left join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see PermissionsRoleModel::leftJoin
         */
        public function leftJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Adds a right join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see PermissionsRoleModel::rightJoin
         */
        public function rightJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Specifies one or more restrictions to the query result.
         * Replaces any previously specified restrictions, if any.
         *
         * ```php
         * $user = wei()->db('user')->where('id = 1');
         * $user = wei()->db('user')->where('id = ?', 1);
         * $users = wei()->db('user')->where(array('id' => '1', 'username' => 'twin'));
         * $users = wei()->where(array('id' => array('1', '2', '3')));
         * ```
         *
         * @param array|Closure|string|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this
         * @see PermissionsRoleModel::where
         */
        public function where($column = null, $operator = null, $value = null): self
        {
        }

        /**
         * @param string $expression
         * @param mixed $params
         * @return $this
         * @see PermissionsRoleModel::whereRaw
         */
        public function whereRaw($expression, $params = null): self
        {
        }

        /**
         * @param mixed $column
         * @param mixed $value
         * @return $this
         * @see PermissionsRoleModel::whereNot
         */
        public function whereNot($column, $value): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see PermissionsRoleModel::whereBetween
         */
        public function whereBetween(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see PermissionsRoleModel::whereNotBetween
         */
        public function whereNotBetween(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see PermissionsRoleModel::whereIn
         */
        public function whereIn(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see PermissionsRoleModel::whereNotIn
         */
        public function whereNotIn(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @return $this
         * @see PermissionsRoleModel::whereNull
         */
        public function whereNull(string $column): self
        {
        }

        /**
         * @param string $column
         * @return $this
         * @see PermissionsRoleModel::whereNotNull
         */
        public function whereNotNull(string $column): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see PermissionsRoleModel::whereDate
         */
        public function whereDate(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see PermissionsRoleModel::whereMonth
         */
        public function whereMonth(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see PermissionsRoleModel::whereDay
         */
        public function whereDay(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see PermissionsRoleModel::whereYear
         */
        public function whereYear(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see PermissionsRoleModel::whereTime
         */
        public function whereTime(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrColumn2
         * @param mixed|null $column2
         * @return $this
         * @see PermissionsRoleModel::whereColumn
         */
        public function whereColumn(string $column, $opOrColumn2, $column2 = null): self
        {
        }

        /**
         * 搜索字段是否包含某个值
         *
         * @param string $column
         * @param mixed $value
         * @param string $condition
         * @return $this
         * @see PermissionsRoleModel::whereContains
         */
        public function whereContains(string $column, $value, string $condition = 'AND'): self
        {
        }

        /**
         * @param string $column
         * @param mixed $value
         * @param string $condition
         * @return $this
         * @see PermissionsRoleModel::whereNotContains
         */
        public function whereNotContains(string $column, $value, string $condition = 'OR'): self
        {
        }

        /**
         * Search whether a column has a value other than the default value
         *
         * @param string $column
         * @param bool $has
         * @return $this
         * @see PermissionsRoleModel::whereHas
         */
        public function whereHas(string $column, bool $has = true): self
        {
        }

        /**
         * Search whether a column dont have a value other than the default value
         *
         * @param string $column
         * @return $this
         * @see PermissionsRoleModel::whereNotHas
         */
        public function whereNotHas(string $column): self
        {
        }

        /**
         * Specifies a grouping over the results of the query.
         * Replaces any previously specified groupings, if any.
         *
         * @param mixed $column the grouping column
         * @return $this
         * @see PermissionsRoleModel::groupBy
         */
        public function groupBy($column): self
        {
        }

        /**
         * Specifies a restriction over the groups of the query.
         * Replaces any previous having restrictions, if any.
         *
         * @param mixed $column
         * @param mixed $operator
         * @param mixed|null $value
         * @param mixed $condition
         * @return $this
         * @see PermissionsRoleModel::having
         */
        public function having($column, $operator, $value = null, $condition = 'AND'): self
        {
        }

        /**
         * Specifies an ordering for the query results.
         * Replaces any previously specified orderings, if any.
         *
         * @param string|Raw $column the ordering expression
         * @param string $order the ordering direction
         * @return $this
         * @see PermissionsRoleModel::orderBy
         */
        public function orderBy($column, $order = 'ASC'): self
        {
        }

        /**
         * @param string $expression
         * @return $this
         * @see PermissionsRoleModel::orderByRaw
         */
        public function orderByRaw($expression): self
        {
        }

        /**
         * Adds a DESC ordering to the query
         *
         * @param string $field The name of field
         * @return $this
         * @see PermissionsRoleModel::desc
         */
        public function desc(string $field): self
        {
        }

        /**
         * Add an ASC ordering to the query
         *
         * @param string $field The name of field
         * @return $this
         * @see PermissionsRoleModel::asc
         */
        public function asc(string $field): self
        {
        }

        /**
         * @return $this
         * @see PermissionsRoleModel::forUpdate
         */
        public function forUpdate(): self
        {
        }

        /**
         * @return $this
         * @see PermissionsRoleModel::forShare
         */
        public function forShare(): self
        {
        }

        /**
         * @param string|bool $lock
         * @return $this
         * @see PermissionsRoleModel::lock
         */
        public function lock($lock): self
        {
        }

        /**
         * @param mixed $value
         * @param callable $callback
         * @param callable|null $default
         * @return $this
         * @see PermissionsRoleModel::when
         */
        public function when($value, callable $callback, callable $default = null): self
        {
        }

        /**
         * @param mixed $value
         * @param callable $callback
         * @param callable|null $default
         * @return $this
         * @see PermissionsRoleModel::unless
         */
        public function unless($value, callable $callback, callable $default = null): self
        {
        }

        /**
         * @param callable|null $converter
         * @return $this
         * @see PermissionsRoleModel::setDbKeyConverter
         */
        public function setDbKeyConverter(callable $converter = null): self
        {
        }

        /**
         * @param callable|null $converter
         * @return $this
         * @see PermissionsRoleModel::setPhpKeyConverter
         */
        public function setPhpKeyConverter(callable $converter = null): self
        {
        }

        /**
         * Add a (inner) join base on the relation to the query
         *
         * @param string|array $name
         * @param string $type
         * @return $this
         * @see PermissionsRoleModel::joinRelation
         */
        public function joinRelation($name, string $type = 'INNER'): self
        {
        }

        /**
         * Add a inner join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see PermissionsRoleModel::innerJoinRelation
         */
        public function innerJoinRelation($name): self
        {
        }

        /**
         * Add a left join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see PermissionsRoleModel::leftJoinRelation
         */
        public function leftJoinRelation($name): self
        {
        }

        /**
         * Add a right join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see PermissionsRoleModel::rightJoinRelation
         */
        public function rightJoinRelation($name): self
        {
        }

        /**
         * Check if the model method defines the "Relation" attribute (or the "@Relation" tag in doc comment)
         *
         * This method only checks whether the specified method has the "Relation" attribute,
         * and does not check the actual logic.
         * It is provided for external use to avoid directly calling `$this->$relation()` to cause attacks.
         *
         * @param string $method
         * @return bool
         * @see PermissionsRoleModel::isRelation
         */
        public function isRelation(string $method): bool
        {
        }

        /**
         * Really remove the record from database
         *
         * @param int|string $id
         * @return $this
         * @see PermissionsRoleModel::reallyDestroy
         */
        public function reallyDestroy($id = null): self
        {
        }

        /**
         * Add a query to filter soft deleted records
         *
         * @return $this
         * @see PermissionsRoleModel::withoutDeleted
         */
        public function withoutDeleted(): self
        {
        }

        /**
         * Add a query to return only deleted records
         *
         * @return $this
         * @see PermissionsRoleModel::onlyDeleted
         */
        public function onlyDeleted(): self
        {
        }

        /**
         * Remove "withoutDeleted" in the query, expect to return all records
         *
         * @return $this
         * @see PermissionsRoleModel::withDeleted
         */
        public function withDeleted(): self
        {
        }

        /**
         * Add a query to return only purged records
         *
         * @return $this
         * @see PermissionsRoleModel::onlyPurged
         */
        public function onlyPurged(): self
        {
        }
    }

    class RoleModel
    {
        /**
         * Returns the success result with model data
         *
         * @param array|string|BaseResource|mixed $merge
         * @return Ret
         * @see RoleModel::toRet
         */
        public function toRet($merge = []): \Wei\Ret
        {
        }

        /**
         * Set each attribute value, without checking whether the column is fillable, and save the model
         *
         * @param iterable $attributes
         * @return $this
         * @see RoleModel::saveAttributes
         */
        public function saveAttributes(iterable $attributes = []): self
        {
        }

        /**
         * Returns the record data as array
         *
         * @param array|callable $returnFields A indexed array specified the fields to return
         * @param callable|null $prepend
         * @return array
         * @see RoleModel::toArray
         */
        public function toArray($returnFields = [], callable $prepend = null): array
        {
        }

        /**
         * Return the record table name
         *
         * @return string
         * @see RoleModel::getTable
         */
        public function getTable(): string
        {
        }

        /**
         * Import a PHP array in this record
         *
         * @param iterable $array
         * @return $this
         * @see RoleModel::fromArray
         */
        public function fromArray(iterable $array): self
        {
        }

        /**
         * Save the record or data to database
         *
         * @param iterable $attributes
         * @return $this
         * @see RoleModel::save
         */
        public function save(iterable $attributes = []): self
        {
        }

        /**
         * Delete the current record and trigger the beforeDestroy and afterDestroy callback
         *
         * @param int|string $id
         * @return $this
         * @see RoleModel::destroy
         */
        public function destroy($id = null): self
        {
        }

        /**
         * Find a record by primary key, or throws 404 exception if record not found, then destroy the record
         *
         * @param string|int $id
         * @return $this
         * @throws \Exception when record not found
         * @see RoleModel::destroyOrFail
         */
        public function destroyOrFail($id): self
        {
        }

        /**
         * Set the record field value
         *
         * @param string|int|null $name
         * @param mixed $value
         * @param bool $throwException
         * @return $this|false
         * @see RoleModel::set
         */
        public function set($name, $value, bool $throwException = true)
        {
        }

        /**
         * Executes the generated SQL and returns the found record object or false
         *
         * @param int|string|array|null $id
         * @return $this|null
         * @see RoleModel::find
         */
        public function find($id): ?self
        {
        }

        /**
         * Find a record by primary key, or throws 404 exception if record not found
         *
         * @param int|string $id
         * @return $this
         * @throws \Exception
         * @see RoleModel::findOrFail
         */
        public function findOrFail($id): self
        {
        }

        /**
         * Find a record by primary key, or init with the specified attributes if record not found
         *
         * @param int|string $id
         * @param array|object $attributes
         * @return $this
         * @see RoleModel::findOrInit
         */
        public function findOrInit($id = null, $attributes = []): self
        {
        }

        /**
         * Find a record by primary key, or save with the specified attributes if record not found
         *
         * @param int|string $id
         * @param array $attributes
         * @return $this
         * @see RoleModel::findOrCreate
         */
        public function findOrCreate($id, $attributes = []): self
        {
        }

        /**
         * @param array $attributes
         * @param array|object $data
         * @return $this
         * @see RoleModel::findByOrCreate
         */
        public function findByOrCreate($attributes, $data = []): self
        {
        }

        /**
         * Executes the generated SQL and returns the found record collection object or false
         *
         * @param array $ids
         * @return $this|$this[]
         * @phpstan-return $this
         * @see RoleModel::findAll
         */
        public function findAll(array $ids): self
        {
        }

        /**
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this|null
         * @see RoleModel::findBy
         */
        public function findBy($column, $operator = null, $value = null): ?self
        {
        }

        /**
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this|$this[]
         * @phpstan-return $this
         * @see RoleModel::findAllBy
         */
        public function findAllBy($column, $operator = null, $value = null): self
        {
        }

        /**
         * @param array $attributes
         * @param array|object $data
         * @return $this
         * @see RoleModel::findOrInitBy
         */
        public function findOrInitBy(array $attributes = [], $data = []): self
        {
        }

        /**
         * Find a record by primary key value and throws 404 exception if record not found
         *
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this
         * @throws \Exception
         * @see RoleModel::findByOrFail
         */
        public function findByOrFail($column, $operator = null, $value = null): self
        {
        }

        /**
         * @param Req|null $req
         * @return $this
         * @throws \Exception
         * @see RoleModel::findFromReq
         */
        public function findFromReq(\Wei\Req $req = null): self
        {
        }

        /**
         * Executes the generated SQL and returns the found record object or null if not found
         *
         * @return $this|null
         * @see RoleModel::first
         */
        public function first(): ?self
        {
        }

        /**
         * @return $this|$this[]
         * @phpstan-return $this
         * @see RoleModel::all
         */
        public function all(): self
        {
        }

        /**
         * Coll: Specifies a field to be the key of the fetched array
         *
         * @param string $column
         * @return $this
         * @see RoleModel::indexBy
         */
        public function indexBy(string $column): self
        {
        }

        /**
         * Execute a update query with specified data
         *
         * @param array|string $set
         * @param mixed $value
         * @return int
         * @see RoleModel::update
         */
        public function update($set = [], $value = null): int
        {
        }

        /**
         * @param array|string|true $scopes
         * @return $this
         * @see RoleModel::unscoped
         */
        public function unscoped($scopes = []): self
        {
        }

        /**
         * Set or remove cache time for the query
         *
         * @param int|null $seconds
         * @return $this
         * @see RoleModel::setCacheTime
         */
        public function setCacheTime(?int $seconds): self
        {
        }

        /**
         * Returns the name of columns of current table
         *
         * @return array
         * @see RoleModel::getColumns
         */
        public function getColumns(): array
        {
        }

        /**
         * Check if column name exists
         *
         * @param string|int|null $name
         * @return bool
         * @see RoleModel::hasColumn
         */
        public function hasColumn($name): bool
        {
        }

        /**
         * Executes the generated query and returns the first array result
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return array|null
         * @see RoleModel::fetch
         */
        public function fetch($column = null, $operator = null, $value = null): ?array
        {
        }

        /**
         * Executes the generated query and returns all array results
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return array
         * @see RoleModel::fetchAll
         */
        public function fetchAll($column = null, $operator = null, $value = null): array
        {
        }

        /**
         * @param string $column
         * @param string|null $index
         * @return array
         * @see RoleModel::pluck
         */
        public function pluck(string $column, string $index = null): array
        {
        }

        /**
         * @param int $count
         * @param callable $callback
         * @return bool
         * @see RoleModel::chunk
         */
        public function chunk(int $count, callable $callback): bool
        {
        }

        /**
         * Executes a COUNT query to receive the rows number
         *
         * @param string $column
         * @return int
         * @see RoleModel::cnt
         */
        public function cnt($column = '*'): int
        {
        }

        /**
         * Executes a MAX query to receive the max value of column
         *
         * @param string $column
         * @return string|null
         * @see RoleModel::max
         */
        public function max(string $column): ?string
        {
        }

        /**
         * Execute a delete query with specified conditions
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return int
         * @see RoleModel::delete
         */
        public function delete($column = null, $operator = null, $value = null): int
        {
        }

        /**
         * Sets the position of the first result to retrieve (the "offset")
         *
         * @param int|float|string $offset The first result to return
         * @return $this
         * @see RoleModel::offset
         */
        public function offset($offset): self
        {
        }

        /**
         * Sets the maximum number of results to retrieve (the "limit")
         *
         * @param int|float|string $limit The maximum number of results to retrieve
         * @return $this
         * @see RoleModel::limit
         */
        public function limit($limit): self
        {
        }

        /**
         * Sets the page number, the "OFFSET" value is equals "($page - 1) * LIMIT"
         *
         * @param int $page The page number
         * @return $this
         * @see RoleModel::page
         */
        public function page($page): self
        {
        }

        /**
         * Specifies an item that is to be returned in the query result.
         * Replaces any previously specified selections, if any.
         *
         * @param array|string $columns the selection expressions
         * @return $this
         * @see RoleModel::select
         */
        public function select($columns = ['*']): self
        {
        }

        /**
         * @param array|string $columns
         * @return $this
         * @see RoleModel::selectDistinct
         */
        public function selectDistinct($columns): self
        {
        }

        /**
         * @param string $expression
         * @return $this
         * @see RoleModel::selectRaw
         */
        public function selectRaw($expression): self
        {
        }

        /**
         * Specifies columns that are not to be returned in the query result.
         * Replaces any previously specified selections, if any.
         *
         * @param array|string $columns
         * @return $this
         * @see RoleModel::selectExcept
         */
        public function selectExcept($columns): self
        {
        }

        /**
         * Specifies an item of the main table that is to be returned in the query result.
         * Default to all columns of the main table
         *
         * @param string $column
         * @return $this
         * @see RoleModel::selectMain
         */
        public function selectMain(string $column = '*'): self
        {
        }

        /**
         * Sets table for FROM query
         *
         * @param string $table
         * @param string|null $alias
         * @return $this
         * @see RoleModel::from
         */
        public function from(string $table, $alias = null): self
        {
        }

        /**
         * @param string $table
         * @param mixed|null $alias
         * @return $this
         * @see RoleModel::table
         */
        public function table(string $table, $alias = null): self
        {
        }

        /**
         * Adds a inner join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @param string $type
         * @return $this
         * @see RoleModel::join
         */
        public function join(
            string $table,
            string $first = null,
            string $operator = '=',
            string $second = null,
            string $type = 'INNER'
        ): self {
        }

        /**
         * Adds a inner join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see RoleModel::innerJoin
         */
        public function innerJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Adds a left join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see RoleModel::leftJoin
         */
        public function leftJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Adds a right join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see RoleModel::rightJoin
         */
        public function rightJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Specifies one or more restrictions to the query result.
         * Replaces any previously specified restrictions, if any.
         *
         * ```php
         * $user = wei()->db('user')->where('id = 1');
         * $user = wei()->db('user')->where('id = ?', 1);
         * $users = wei()->db('user')->where(array('id' => '1', 'username' => 'twin'));
         * $users = wei()->where(array('id' => array('1', '2', '3')));
         * ```
         *
         * @param array|Closure|string|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this
         * @see RoleModel::where
         */
        public function where($column = null, $operator = null, $value = null): self
        {
        }

        /**
         * @param string $expression
         * @param mixed $params
         * @return $this
         * @see RoleModel::whereRaw
         */
        public function whereRaw($expression, $params = null): self
        {
        }

        /**
         * @param mixed $column
         * @param mixed $value
         * @return $this
         * @see RoleModel::whereNot
         */
        public function whereNot($column, $value): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see RoleModel::whereBetween
         */
        public function whereBetween(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see RoleModel::whereNotBetween
         */
        public function whereNotBetween(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see RoleModel::whereIn
         */
        public function whereIn(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see RoleModel::whereNotIn
         */
        public function whereNotIn(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @return $this
         * @see RoleModel::whereNull
         */
        public function whereNull(string $column): self
        {
        }

        /**
         * @param string $column
         * @return $this
         * @see RoleModel::whereNotNull
         */
        public function whereNotNull(string $column): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see RoleModel::whereDate
         */
        public function whereDate(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see RoleModel::whereMonth
         */
        public function whereMonth(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see RoleModel::whereDay
         */
        public function whereDay(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see RoleModel::whereYear
         */
        public function whereYear(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see RoleModel::whereTime
         */
        public function whereTime(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrColumn2
         * @param mixed|null $column2
         * @return $this
         * @see RoleModel::whereColumn
         */
        public function whereColumn(string $column, $opOrColumn2, $column2 = null): self
        {
        }

        /**
         * 搜索字段是否包含某个值
         *
         * @param string $column
         * @param mixed $value
         * @param string $condition
         * @return $this
         * @see RoleModel::whereContains
         */
        public function whereContains(string $column, $value, string $condition = 'AND'): self
        {
        }

        /**
         * @param string $column
         * @param mixed $value
         * @param string $condition
         * @return $this
         * @see RoleModel::whereNotContains
         */
        public function whereNotContains(string $column, $value, string $condition = 'OR'): self
        {
        }

        /**
         * Search whether a column has a value other than the default value
         *
         * @param string $column
         * @param bool $has
         * @return $this
         * @see RoleModel::whereHas
         */
        public function whereHas(string $column, bool $has = true): self
        {
        }

        /**
         * Search whether a column dont have a value other than the default value
         *
         * @param string $column
         * @return $this
         * @see RoleModel::whereNotHas
         */
        public function whereNotHas(string $column): self
        {
        }

        /**
         * Specifies a grouping over the results of the query.
         * Replaces any previously specified groupings, if any.
         *
         * @param mixed $column the grouping column
         * @return $this
         * @see RoleModel::groupBy
         */
        public function groupBy($column): self
        {
        }

        /**
         * Specifies a restriction over the groups of the query.
         * Replaces any previous having restrictions, if any.
         *
         * @param mixed $column
         * @param mixed $operator
         * @param mixed|null $value
         * @param mixed $condition
         * @return $this
         * @see RoleModel::having
         */
        public function having($column, $operator, $value = null, $condition = 'AND'): self
        {
        }

        /**
         * Specifies an ordering for the query results.
         * Replaces any previously specified orderings, if any.
         *
         * @param string|Raw $column the ordering expression
         * @param string $order the ordering direction
         * @return $this
         * @see RoleModel::orderBy
         */
        public function orderBy($column, $order = 'ASC'): self
        {
        }

        /**
         * @param string $expression
         * @return $this
         * @see RoleModel::orderByRaw
         */
        public function orderByRaw($expression): self
        {
        }

        /**
         * Adds a DESC ordering to the query
         *
         * @param string $field The name of field
         * @return $this
         * @see RoleModel::desc
         */
        public function desc(string $field): self
        {
        }

        /**
         * Add an ASC ordering to the query
         *
         * @param string $field The name of field
         * @return $this
         * @see RoleModel::asc
         */
        public function asc(string $field): self
        {
        }

        /**
         * @return $this
         * @see RoleModel::forUpdate
         */
        public function forUpdate(): self
        {
        }

        /**
         * @return $this
         * @see RoleModel::forShare
         */
        public function forShare(): self
        {
        }

        /**
         * @param string|bool $lock
         * @return $this
         * @see RoleModel::lock
         */
        public function lock($lock): self
        {
        }

        /**
         * @param mixed $value
         * @param callable $callback
         * @param callable|null $default
         * @return $this
         * @see RoleModel::when
         */
        public function when($value, callable $callback, callable $default = null): self
        {
        }

        /**
         * @param mixed $value
         * @param callable $callback
         * @param callable|null $default
         * @return $this
         * @see RoleModel::unless
         */
        public function unless($value, callable $callback, callable $default = null): self
        {
        }

        /**
         * @param callable|null $converter
         * @return $this
         * @see RoleModel::setDbKeyConverter
         */
        public function setDbKeyConverter(callable $converter = null): self
        {
        }

        /**
         * @param callable|null $converter
         * @return $this
         * @see RoleModel::setPhpKeyConverter
         */
        public function setPhpKeyConverter(callable $converter = null): self
        {
        }

        /**
         * Add a (inner) join base on the relation to the query
         *
         * @param string|array $name
         * @param string $type
         * @return $this
         * @see RoleModel::joinRelation
         */
        public function joinRelation($name, string $type = 'INNER'): self
        {
        }

        /**
         * Add a inner join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see RoleModel::innerJoinRelation
         */
        public function innerJoinRelation($name): self
        {
        }

        /**
         * Add a left join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see RoleModel::leftJoinRelation
         */
        public function leftJoinRelation($name): self
        {
        }

        /**
         * Add a right join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see RoleModel::rightJoinRelation
         */
        public function rightJoinRelation($name): self
        {
        }

        /**
         * Check if the model method defines the "Relation" attribute (or the "@Relation" tag in doc comment)
         *
         * This method only checks whether the specified method has the "Relation" attribute,
         * and does not check the actual logic.
         * It is provided for external use to avoid directly calling `$this->$relation()` to cause attacks.
         *
         * @param string $method
         * @return bool
         * @see RoleModel::isRelation
         */
        public function isRelation(string $method): bool
        {
        }

        /**
         * Really remove the record from database
         *
         * @param int|string $id
         * @return $this
         * @see RoleModel::reallyDestroy
         */
        public function reallyDestroy($id = null): self
        {
        }

        /**
         * Add a query to filter soft deleted records
         *
         * @return $this
         * @see RoleModel::withoutDeleted
         */
        public function withoutDeleted(): self
        {
        }

        /**
         * Add a query to return only deleted records
         *
         * @return $this
         * @see RoleModel::onlyDeleted
         */
        public function onlyDeleted(): self
        {
        }

        /**
         * Remove "withoutDeleted" in the query, expect to return all records
         *
         * @return $this
         * @see RoleModel::withDeleted
         */
        public function withDeleted(): self
        {
        }

        /**
         * Add a query to return only purged records
         *
         * @return $this
         * @see RoleModel::onlyPurged
         */
        public function onlyPurged(): self
        {
        }
    }

    class RolesUserModel
    {
        /**
         * Returns the success result with model data
         *
         * @param array|string|BaseResource|mixed $merge
         * @return Ret
         * @see RolesUserModel::toRet
         */
        public function toRet($merge = []): \Wei\Ret
        {
        }

        /**
         * Set each attribute value, without checking whether the column is fillable, and save the model
         *
         * @param iterable $attributes
         * @return $this
         * @see RolesUserModel::saveAttributes
         */
        public function saveAttributes(iterable $attributes = []): self
        {
        }

        /**
         * Returns the record data as array
         *
         * @param array|callable $returnFields A indexed array specified the fields to return
         * @param callable|null $prepend
         * @return array
         * @see RolesUserModel::toArray
         */
        public function toArray($returnFields = [], callable $prepend = null): array
        {
        }

        /**
         * Return the record table name
         *
         * @return string
         * @see RolesUserModel::getTable
         */
        public function getTable(): string
        {
        }

        /**
         * Import a PHP array in this record
         *
         * @param iterable $array
         * @return $this
         * @see RolesUserModel::fromArray
         */
        public function fromArray(iterable $array): self
        {
        }

        /**
         * Save the record or data to database
         *
         * @param iterable $attributes
         * @return $this
         * @see RolesUserModel::save
         */
        public function save(iterable $attributes = []): self
        {
        }

        /**
         * Delete the current record and trigger the beforeDestroy and afterDestroy callback
         *
         * @param int|string $id
         * @return $this
         * @see RolesUserModel::destroy
         */
        public function destroy($id = null): self
        {
        }

        /**
         * Find a record by primary key, or throws 404 exception if record not found, then destroy the record
         *
         * @param string|int $id
         * @return $this
         * @throws \Exception when record not found
         * @see RolesUserModel::destroyOrFail
         */
        public function destroyOrFail($id): self
        {
        }

        /**
         * Set the record field value
         *
         * @param string|int|null $name
         * @param mixed $value
         * @param bool $throwException
         * @return $this|false
         * @see RolesUserModel::set
         */
        public function set($name, $value, bool $throwException = true)
        {
        }

        /**
         * Executes the generated SQL and returns the found record object or false
         *
         * @param int|string|array|null $id
         * @return $this|null
         * @see RolesUserModel::find
         */
        public function find($id): ?self
        {
        }

        /**
         * Find a record by primary key, or throws 404 exception if record not found
         *
         * @param int|string $id
         * @return $this
         * @throws \Exception
         * @see RolesUserModel::findOrFail
         */
        public function findOrFail($id): self
        {
        }

        /**
         * Find a record by primary key, or init with the specified attributes if record not found
         *
         * @param int|string $id
         * @param array|object $attributes
         * @return $this
         * @see RolesUserModel::findOrInit
         */
        public function findOrInit($id = null, $attributes = []): self
        {
        }

        /**
         * Find a record by primary key, or save with the specified attributes if record not found
         *
         * @param int|string $id
         * @param array $attributes
         * @return $this
         * @see RolesUserModel::findOrCreate
         */
        public function findOrCreate($id, $attributes = []): self
        {
        }

        /**
         * @param array $attributes
         * @param array|object $data
         * @return $this
         * @see RolesUserModel::findByOrCreate
         */
        public function findByOrCreate($attributes, $data = []): self
        {
        }

        /**
         * Executes the generated SQL and returns the found record collection object or false
         *
         * @param array $ids
         * @return $this|$this[]
         * @phpstan-return $this
         * @see RolesUserModel::findAll
         */
        public function findAll(array $ids): self
        {
        }

        /**
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this|null
         * @see RolesUserModel::findBy
         */
        public function findBy($column, $operator = null, $value = null): ?self
        {
        }

        /**
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this|$this[]
         * @phpstan-return $this
         * @see RolesUserModel::findAllBy
         */
        public function findAllBy($column, $operator = null, $value = null): self
        {
        }

        /**
         * @param array $attributes
         * @param array|object $data
         * @return $this
         * @see RolesUserModel::findOrInitBy
         */
        public function findOrInitBy(array $attributes = [], $data = []): self
        {
        }

        /**
         * Find a record by primary key value and throws 404 exception if record not found
         *
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this
         * @throws \Exception
         * @see RolesUserModel::findByOrFail
         */
        public function findByOrFail($column, $operator = null, $value = null): self
        {
        }

        /**
         * @param Req|null $req
         * @return $this
         * @throws \Exception
         * @see RolesUserModel::findFromReq
         */
        public function findFromReq(\Wei\Req $req = null): self
        {
        }

        /**
         * Executes the generated SQL and returns the found record object or null if not found
         *
         * @return $this|null
         * @see RolesUserModel::first
         */
        public function first(): ?self
        {
        }

        /**
         * @return $this|$this[]
         * @phpstan-return $this
         * @see RolesUserModel::all
         */
        public function all(): self
        {
        }

        /**
         * Coll: Specifies a field to be the key of the fetched array
         *
         * @param string $column
         * @return $this
         * @see RolesUserModel::indexBy
         */
        public function indexBy(string $column): self
        {
        }

        /**
         * Execute a update query with specified data
         *
         * @param array|string $set
         * @param mixed $value
         * @return int
         * @see RolesUserModel::update
         */
        public function update($set = [], $value = null): int
        {
        }

        /**
         * @param array|string|true $scopes
         * @return $this
         * @see RolesUserModel::unscoped
         */
        public function unscoped($scopes = []): self
        {
        }

        /**
         * Set or remove cache time for the query
         *
         * @param int|null $seconds
         * @return $this
         * @see RolesUserModel::setCacheTime
         */
        public function setCacheTime(?int $seconds): self
        {
        }

        /**
         * Returns the name of columns of current table
         *
         * @return array
         * @see RolesUserModel::getColumns
         */
        public function getColumns(): array
        {
        }

        /**
         * Check if column name exists
         *
         * @param string|int|null $name
         * @return bool
         * @see RolesUserModel::hasColumn
         */
        public function hasColumn($name): bool
        {
        }

        /**
         * Executes the generated query and returns the first array result
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return array|null
         * @see RolesUserModel::fetch
         */
        public function fetch($column = null, $operator = null, $value = null): ?array
        {
        }

        /**
         * Executes the generated query and returns all array results
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return array
         * @see RolesUserModel::fetchAll
         */
        public function fetchAll($column = null, $operator = null, $value = null): array
        {
        }

        /**
         * @param string $column
         * @param string|null $index
         * @return array
         * @see RolesUserModel::pluck
         */
        public function pluck(string $column, string $index = null): array
        {
        }

        /**
         * @param int $count
         * @param callable $callback
         * @return bool
         * @see RolesUserModel::chunk
         */
        public function chunk(int $count, callable $callback): bool
        {
        }

        /**
         * Executes a COUNT query to receive the rows number
         *
         * @param string $column
         * @return int
         * @see RolesUserModel::cnt
         */
        public function cnt($column = '*'): int
        {
        }

        /**
         * Executes a MAX query to receive the max value of column
         *
         * @param string $column
         * @return string|null
         * @see RolesUserModel::max
         */
        public function max(string $column): ?string
        {
        }

        /**
         * Execute a delete query with specified conditions
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return int
         * @see RolesUserModel::delete
         */
        public function delete($column = null, $operator = null, $value = null): int
        {
        }

        /**
         * Sets the position of the first result to retrieve (the "offset")
         *
         * @param int|float|string $offset The first result to return
         * @return $this
         * @see RolesUserModel::offset
         */
        public function offset($offset): self
        {
        }

        /**
         * Sets the maximum number of results to retrieve (the "limit")
         *
         * @param int|float|string $limit The maximum number of results to retrieve
         * @return $this
         * @see RolesUserModel::limit
         */
        public function limit($limit): self
        {
        }

        /**
         * Sets the page number, the "OFFSET" value is equals "($page - 1) * LIMIT"
         *
         * @param int $page The page number
         * @return $this
         * @see RolesUserModel::page
         */
        public function page($page): self
        {
        }

        /**
         * Specifies an item that is to be returned in the query result.
         * Replaces any previously specified selections, if any.
         *
         * @param array|string $columns the selection expressions
         * @return $this
         * @see RolesUserModel::select
         */
        public function select($columns = ['*']): self
        {
        }

        /**
         * @param array|string $columns
         * @return $this
         * @see RolesUserModel::selectDistinct
         */
        public function selectDistinct($columns): self
        {
        }

        /**
         * @param string $expression
         * @return $this
         * @see RolesUserModel::selectRaw
         */
        public function selectRaw($expression): self
        {
        }

        /**
         * Specifies columns that are not to be returned in the query result.
         * Replaces any previously specified selections, if any.
         *
         * @param array|string $columns
         * @return $this
         * @see RolesUserModel::selectExcept
         */
        public function selectExcept($columns): self
        {
        }

        /**
         * Specifies an item of the main table that is to be returned in the query result.
         * Default to all columns of the main table
         *
         * @param string $column
         * @return $this
         * @see RolesUserModel::selectMain
         */
        public function selectMain(string $column = '*'): self
        {
        }

        /**
         * Sets table for FROM query
         *
         * @param string $table
         * @param string|null $alias
         * @return $this
         * @see RolesUserModel::from
         */
        public function from(string $table, $alias = null): self
        {
        }

        /**
         * @param string $table
         * @param mixed|null $alias
         * @return $this
         * @see RolesUserModel::table
         */
        public function table(string $table, $alias = null): self
        {
        }

        /**
         * Adds a inner join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @param string $type
         * @return $this
         * @see RolesUserModel::join
         */
        public function join(
            string $table,
            string $first = null,
            string $operator = '=',
            string $second = null,
            string $type = 'INNER'
        ): self {
        }

        /**
         * Adds a inner join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see RolesUserModel::innerJoin
         */
        public function innerJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Adds a left join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see RolesUserModel::leftJoin
         */
        public function leftJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Adds a right join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see RolesUserModel::rightJoin
         */
        public function rightJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Specifies one or more restrictions to the query result.
         * Replaces any previously specified restrictions, if any.
         *
         * ```php
         * $user = wei()->db('user')->where('id = 1');
         * $user = wei()->db('user')->where('id = ?', 1);
         * $users = wei()->db('user')->where(array('id' => '1', 'username' => 'twin'));
         * $users = wei()->where(array('id' => array('1', '2', '3')));
         * ```
         *
         * @param array|Closure|string|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this
         * @see RolesUserModel::where
         */
        public function where($column = null, $operator = null, $value = null): self
        {
        }

        /**
         * @param string $expression
         * @param mixed $params
         * @return $this
         * @see RolesUserModel::whereRaw
         */
        public function whereRaw($expression, $params = null): self
        {
        }

        /**
         * @param mixed $column
         * @param mixed $value
         * @return $this
         * @see RolesUserModel::whereNot
         */
        public function whereNot($column, $value): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see RolesUserModel::whereBetween
         */
        public function whereBetween(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see RolesUserModel::whereNotBetween
         */
        public function whereNotBetween(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see RolesUserModel::whereIn
         */
        public function whereIn(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see RolesUserModel::whereNotIn
         */
        public function whereNotIn(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @return $this
         * @see RolesUserModel::whereNull
         */
        public function whereNull(string $column): self
        {
        }

        /**
         * @param string $column
         * @return $this
         * @see RolesUserModel::whereNotNull
         */
        public function whereNotNull(string $column): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see RolesUserModel::whereDate
         */
        public function whereDate(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see RolesUserModel::whereMonth
         */
        public function whereMonth(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see RolesUserModel::whereDay
         */
        public function whereDay(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see RolesUserModel::whereYear
         */
        public function whereYear(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see RolesUserModel::whereTime
         */
        public function whereTime(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrColumn2
         * @param mixed|null $column2
         * @return $this
         * @see RolesUserModel::whereColumn
         */
        public function whereColumn(string $column, $opOrColumn2, $column2 = null): self
        {
        }

        /**
         * 搜索字段是否包含某个值
         *
         * @param string $column
         * @param mixed $value
         * @param string $condition
         * @return $this
         * @see RolesUserModel::whereContains
         */
        public function whereContains(string $column, $value, string $condition = 'AND'): self
        {
        }

        /**
         * @param string $column
         * @param mixed $value
         * @param string $condition
         * @return $this
         * @see RolesUserModel::whereNotContains
         */
        public function whereNotContains(string $column, $value, string $condition = 'OR'): self
        {
        }

        /**
         * Search whether a column has a value other than the default value
         *
         * @param string $column
         * @param bool $has
         * @return $this
         * @see RolesUserModel::whereHas
         */
        public function whereHas(string $column, bool $has = true): self
        {
        }

        /**
         * Search whether a column dont have a value other than the default value
         *
         * @param string $column
         * @return $this
         * @see RolesUserModel::whereNotHas
         */
        public function whereNotHas(string $column): self
        {
        }

        /**
         * Specifies a grouping over the results of the query.
         * Replaces any previously specified groupings, if any.
         *
         * @param mixed $column the grouping column
         * @return $this
         * @see RolesUserModel::groupBy
         */
        public function groupBy($column): self
        {
        }

        /**
         * Specifies a restriction over the groups of the query.
         * Replaces any previous having restrictions, if any.
         *
         * @param mixed $column
         * @param mixed $operator
         * @param mixed|null $value
         * @param mixed $condition
         * @return $this
         * @see RolesUserModel::having
         */
        public function having($column, $operator, $value = null, $condition = 'AND'): self
        {
        }

        /**
         * Specifies an ordering for the query results.
         * Replaces any previously specified orderings, if any.
         *
         * @param string|Raw $column the ordering expression
         * @param string $order the ordering direction
         * @return $this
         * @see RolesUserModel::orderBy
         */
        public function orderBy($column, $order = 'ASC'): self
        {
        }

        /**
         * @param string $expression
         * @return $this
         * @see RolesUserModel::orderByRaw
         */
        public function orderByRaw($expression): self
        {
        }

        /**
         * Adds a DESC ordering to the query
         *
         * @param string $field The name of field
         * @return $this
         * @see RolesUserModel::desc
         */
        public function desc(string $field): self
        {
        }

        /**
         * Add an ASC ordering to the query
         *
         * @param string $field The name of field
         * @return $this
         * @see RolesUserModel::asc
         */
        public function asc(string $field): self
        {
        }

        /**
         * @return $this
         * @see RolesUserModel::forUpdate
         */
        public function forUpdate(): self
        {
        }

        /**
         * @return $this
         * @see RolesUserModel::forShare
         */
        public function forShare(): self
        {
        }

        /**
         * @param string|bool $lock
         * @return $this
         * @see RolesUserModel::lock
         */
        public function lock($lock): self
        {
        }

        /**
         * @param mixed $value
         * @param callable $callback
         * @param callable|null $default
         * @return $this
         * @see RolesUserModel::when
         */
        public function when($value, callable $callback, callable $default = null): self
        {
        }

        /**
         * @param mixed $value
         * @param callable $callback
         * @param callable|null $default
         * @return $this
         * @see RolesUserModel::unless
         */
        public function unless($value, callable $callback, callable $default = null): self
        {
        }

        /**
         * @param callable|null $converter
         * @return $this
         * @see RolesUserModel::setDbKeyConverter
         */
        public function setDbKeyConverter(callable $converter = null): self
        {
        }

        /**
         * @param callable|null $converter
         * @return $this
         * @see RolesUserModel::setPhpKeyConverter
         */
        public function setPhpKeyConverter(callable $converter = null): self
        {
        }

        /**
         * Add a (inner) join base on the relation to the query
         *
         * @param string|array $name
         * @param string $type
         * @return $this
         * @see RolesUserModel::joinRelation
         */
        public function joinRelation($name, string $type = 'INNER'): self
        {
        }

        /**
         * Add a inner join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see RolesUserModel::innerJoinRelation
         */
        public function innerJoinRelation($name): self
        {
        }

        /**
         * Add a left join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see RolesUserModel::leftJoinRelation
         */
        public function leftJoinRelation($name): self
        {
        }

        /**
         * Add a right join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see RolesUserModel::rightJoinRelation
         */
        public function rightJoinRelation($name): self
        {
        }

        /**
         * Check if the model method defines the "Relation" attribute (or the "@Relation" tag in doc comment)
         *
         * This method only checks whether the specified method has the "Relation" attribute,
         * and does not check the actual logic.
         * It is provided for external use to avoid directly calling `$this->$relation()` to cause attacks.
         *
         * @param string $method
         * @return bool
         * @see RolesUserModel::isRelation
         */
        public function isRelation(string $method): bool
        {
        }

        /**
         * Really remove the record from database
         *
         * @param int|string $id
         * @return $this
         * @see RolesUserModel::reallyDestroy
         */
        public function reallyDestroy($id = null): self
        {
        }

        /**
         * Add a query to filter soft deleted records
         *
         * @return $this
         * @see RolesUserModel::withoutDeleted
         */
        public function withoutDeleted(): self
        {
        }

        /**
         * Add a query to return only deleted records
         *
         * @return $this
         * @see RolesUserModel::onlyDeleted
         */
        public function onlyDeleted(): self
        {
        }

        /**
         * Remove "withoutDeleted" in the query, expect to return all records
         *
         * @return $this
         * @see RolesUserModel::withDeleted
         */
        public function withDeleted(): self
        {
        }

        /**
         * Add a query to return only purged records
         *
         * @return $this
         * @see RolesUserModel::onlyPurged
         */
        public function onlyPurged(): self
        {
        }
    }

    class UserModel
    {
        /**
         * 通过外部检查用户是否有某个权限
         *
         * @param string $permissionId
         * @return bool
         * @see UserModel::can
         */
        public function can($permissionId)
        {
        }

        /**
         * @param array|\ArrayAccess $req
         * @return \Wei\Ret
         * @see UserModel::updatePassword
         */
        public function updatePassword($req)
        {
        }

        /**
         * Returns the success result with model data
         *
         * @param array|string|BaseResource|mixed $merge
         * @return Ret
         * @see UserModel::toRet
         */
        public function toRet($merge = []): \Wei\Ret
        {
        }

        /**
         * Set each attribute value, without checking whether the column is fillable, and save the model
         *
         * @param iterable $attributes
         * @return $this
         * @see UserModel::saveAttributes
         */
        public function saveAttributes(iterable $attributes = []): self
        {
        }

        /**
         * Returns the record data as array
         *
         * @param array|callable $returnFields A indexed array specified the fields to return
         * @param callable|null $prepend
         * @return array
         * @see UserModel::toArray
         */
        public function toArray($returnFields = [], callable $prepend = null): array
        {
        }

        /**
         * Return the record table name
         *
         * @return string
         * @see UserModel::getTable
         */
        public function getTable(): string
        {
        }

        /**
         * Import a PHP array in this record
         *
         * @param iterable $array
         * @return $this
         * @see UserModel::fromArray
         */
        public function fromArray(iterable $array): self
        {
        }

        /**
         * Save the record or data to database
         *
         * @param iterable $attributes
         * @return $this
         * @see UserModel::save
         */
        public function save(iterable $attributes = []): self
        {
        }

        /**
         * Delete the current record and trigger the beforeDestroy and afterDestroy callback
         *
         * @param int|string $id
         * @return $this
         * @see UserModel::destroy
         */
        public function destroy($id = null): self
        {
        }

        /**
         * Find a record by primary key, or throws 404 exception if record not found, then destroy the record
         *
         * @param string|int $id
         * @return $this
         * @throws \Exception when record not found
         * @see UserModel::destroyOrFail
         */
        public function destroyOrFail($id): self
        {
        }

        /**
         * Set the record field value
         *
         * @param string|int|null $name
         * @param mixed $value
         * @param bool $throwException
         * @return $this|false
         * @see UserModel::set
         */
        public function set($name, $value, bool $throwException = true)
        {
        }

        /**
         * Executes the generated SQL and returns the found record object or false
         *
         * @param int|string|array|null $id
         * @return $this|null
         * @see UserModel::find
         */
        public function find($id): ?self
        {
        }

        /**
         * Find a record by primary key, or throws 404 exception if record not found
         *
         * @param int|string $id
         * @return $this
         * @throws \Exception
         * @see UserModel::findOrFail
         */
        public function findOrFail($id): self
        {
        }

        /**
         * Find a record by primary key, or init with the specified attributes if record not found
         *
         * @param int|string $id
         * @param array|object $attributes
         * @return $this
         * @see UserModel::findOrInit
         */
        public function findOrInit($id = null, $attributes = []): self
        {
        }

        /**
         * Find a record by primary key, or save with the specified attributes if record not found
         *
         * @param int|string $id
         * @param array $attributes
         * @return $this
         * @see UserModel::findOrCreate
         */
        public function findOrCreate($id, $attributes = []): self
        {
        }

        /**
         * @param array $attributes
         * @param array|object $data
         * @return $this
         * @see UserModel::findByOrCreate
         */
        public function findByOrCreate($attributes, $data = []): self
        {
        }

        /**
         * Executes the generated SQL and returns the found record collection object or false
         *
         * @param array $ids
         * @return $this|$this[]
         * @phpstan-return $this
         * @see UserModel::findAll
         */
        public function findAll(array $ids): self
        {
        }

        /**
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this|null
         * @see UserModel::findBy
         */
        public function findBy($column, $operator = null, $value = null): ?self
        {
        }

        /**
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this|$this[]
         * @phpstan-return $this
         * @see UserModel::findAllBy
         */
        public function findAllBy($column, $operator = null, $value = null): self
        {
        }

        /**
         * @param array $attributes
         * @param array|object $data
         * @return $this
         * @see UserModel::findOrInitBy
         */
        public function findOrInitBy(array $attributes = [], $data = []): self
        {
        }

        /**
         * Find a record by primary key value and throws 404 exception if record not found
         *
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this
         * @throws \Exception
         * @see UserModel::findByOrFail
         */
        public function findByOrFail($column, $operator = null, $value = null): self
        {
        }

        /**
         * @param Req|null $req
         * @return $this
         * @throws \Exception
         * @see UserModel::findFromReq
         */
        public function findFromReq(\Wei\Req $req = null): self
        {
        }

        /**
         * Executes the generated SQL and returns the found record object or null if not found
         *
         * @return $this|null
         * @see UserModel::first
         */
        public function first(): ?self
        {
        }

        /**
         * @return $this|$this[]
         * @phpstan-return $this
         * @see UserModel::all
         */
        public function all(): self
        {
        }

        /**
         * Coll: Specifies a field to be the key of the fetched array
         *
         * @param string $column
         * @return $this
         * @see UserModel::indexBy
         */
        public function indexBy(string $column): self
        {
        }

        /**
         * Execute a update query with specified data
         *
         * @param array|string $set
         * @param mixed $value
         * @return int
         * @see UserModel::update
         */
        public function update($set = [], $value = null): int
        {
        }

        /**
         * @param array|string|true $scopes
         * @return $this
         * @see UserModel::unscoped
         */
        public function unscoped($scopes = []): self
        {
        }

        /**
         * Set or remove cache time for the query
         *
         * @param int|null $seconds
         * @return $this
         * @see UserModel::setCacheTime
         */
        public function setCacheTime(?int $seconds): self
        {
        }

        /**
         * Returns the name of columns of current table
         *
         * @return array
         * @see UserModel::getColumns
         */
        public function getColumns(): array
        {
        }

        /**
         * Check if column name exists
         *
         * @param string|int|null $name
         * @return bool
         * @see UserModel::hasColumn
         */
        public function hasColumn($name): bool
        {
        }

        /**
         * Executes the generated query and returns the first array result
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return array|null
         * @see UserModel::fetch
         */
        public function fetch($column = null, $operator = null, $value = null): ?array
        {
        }

        /**
         * Executes the generated query and returns all array results
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return array
         * @see UserModel::fetchAll
         */
        public function fetchAll($column = null, $operator = null, $value = null): array
        {
        }

        /**
         * @param string $column
         * @param string|null $index
         * @return array
         * @see UserModel::pluck
         */
        public function pluck(string $column, string $index = null): array
        {
        }

        /**
         * @param int $count
         * @param callable $callback
         * @return bool
         * @see UserModel::chunk
         */
        public function chunk(int $count, callable $callback): bool
        {
        }

        /**
         * Executes a COUNT query to receive the rows number
         *
         * @param string $column
         * @return int
         * @see UserModel::cnt
         */
        public function cnt($column = '*'): int
        {
        }

        /**
         * Executes a MAX query to receive the max value of column
         *
         * @param string $column
         * @return string|null
         * @see UserModel::max
         */
        public function max(string $column): ?string
        {
        }

        /**
         * Execute a delete query with specified conditions
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return int
         * @see UserModel::delete
         */
        public function delete($column = null, $operator = null, $value = null): int
        {
        }

        /**
         * Sets the position of the first result to retrieve (the "offset")
         *
         * @param int|float|string $offset The first result to return
         * @return $this
         * @see UserModel::offset
         */
        public function offset($offset): self
        {
        }

        /**
         * Sets the maximum number of results to retrieve (the "limit")
         *
         * @param int|float|string $limit The maximum number of results to retrieve
         * @return $this
         * @see UserModel::limit
         */
        public function limit($limit): self
        {
        }

        /**
         * Sets the page number, the "OFFSET" value is equals "($page - 1) * LIMIT"
         *
         * @param int $page The page number
         * @return $this
         * @see UserModel::page
         */
        public function page($page): self
        {
        }

        /**
         * Specifies an item that is to be returned in the query result.
         * Replaces any previously specified selections, if any.
         *
         * @param array|string $columns the selection expressions
         * @return $this
         * @see UserModel::select
         */
        public function select($columns = ['*']): self
        {
        }

        /**
         * @param array|string $columns
         * @return $this
         * @see UserModel::selectDistinct
         */
        public function selectDistinct($columns): self
        {
        }

        /**
         * @param string $expression
         * @return $this
         * @see UserModel::selectRaw
         */
        public function selectRaw($expression): self
        {
        }

        /**
         * Specifies columns that are not to be returned in the query result.
         * Replaces any previously specified selections, if any.
         *
         * @param array|string $columns
         * @return $this
         * @see UserModel::selectExcept
         */
        public function selectExcept($columns): self
        {
        }

        /**
         * Specifies an item of the main table that is to be returned in the query result.
         * Default to all columns of the main table
         *
         * @param string $column
         * @return $this
         * @see UserModel::selectMain
         */
        public function selectMain(string $column = '*'): self
        {
        }

        /**
         * Sets table for FROM query
         *
         * @param string $table
         * @param string|null $alias
         * @return $this
         * @see UserModel::from
         */
        public function from(string $table, $alias = null): self
        {
        }

        /**
         * @param string $table
         * @param mixed|null $alias
         * @return $this
         * @see UserModel::table
         */
        public function table(string $table, $alias = null): self
        {
        }

        /**
         * Adds a inner join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @param string $type
         * @return $this
         * @see UserModel::join
         */
        public function join(
            string $table,
            string $first = null,
            string $operator = '=',
            string $second = null,
            string $type = 'INNER'
        ): self {
        }

        /**
         * Adds a inner join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see UserModel::innerJoin
         */
        public function innerJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Adds a left join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see UserModel::leftJoin
         */
        public function leftJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Adds a right join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see UserModel::rightJoin
         */
        public function rightJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Specifies one or more restrictions to the query result.
         * Replaces any previously specified restrictions, if any.
         *
         * ```php
         * $user = wei()->db('user')->where('id = 1');
         * $user = wei()->db('user')->where('id = ?', 1);
         * $users = wei()->db('user')->where(array('id' => '1', 'username' => 'twin'));
         * $users = wei()->where(array('id' => array('1', '2', '3')));
         * ```
         *
         * @param array|Closure|string|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this
         * @see UserModel::where
         */
        public function where($column = null, $operator = null, $value = null): self
        {
        }

        /**
         * @param string $expression
         * @param mixed $params
         * @return $this
         * @see UserModel::whereRaw
         */
        public function whereRaw($expression, $params = null): self
        {
        }

        /**
         * @param mixed $column
         * @param mixed $value
         * @return $this
         * @see UserModel::whereNot
         */
        public function whereNot($column, $value): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see UserModel::whereBetween
         */
        public function whereBetween(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see UserModel::whereNotBetween
         */
        public function whereNotBetween(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see UserModel::whereIn
         */
        public function whereIn(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see UserModel::whereNotIn
         */
        public function whereNotIn(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @return $this
         * @see UserModel::whereNull
         */
        public function whereNull(string $column): self
        {
        }

        /**
         * @param string $column
         * @return $this
         * @see UserModel::whereNotNull
         */
        public function whereNotNull(string $column): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see UserModel::whereDate
         */
        public function whereDate(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see UserModel::whereMonth
         */
        public function whereMonth(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see UserModel::whereDay
         */
        public function whereDay(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see UserModel::whereYear
         */
        public function whereYear(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see UserModel::whereTime
         */
        public function whereTime(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrColumn2
         * @param mixed|null $column2
         * @return $this
         * @see UserModel::whereColumn
         */
        public function whereColumn(string $column, $opOrColumn2, $column2 = null): self
        {
        }

        /**
         * 搜索字段是否包含某个值
         *
         * @param string $column
         * @param mixed $value
         * @param string $condition
         * @return $this
         * @see UserModel::whereContains
         */
        public function whereContains(string $column, $value, string $condition = 'AND'): self
        {
        }

        /**
         * @param string $column
         * @param mixed $value
         * @param string $condition
         * @return $this
         * @see UserModel::whereNotContains
         */
        public function whereNotContains(string $column, $value, string $condition = 'OR'): self
        {
        }

        /**
         * Search whether a column has a value other than the default value
         *
         * @param string $column
         * @param bool $has
         * @return $this
         * @see UserModel::whereHas
         */
        public function whereHas(string $column, bool $has = true): self
        {
        }

        /**
         * Search whether a column dont have a value other than the default value
         *
         * @param string $column
         * @return $this
         * @see UserModel::whereNotHas
         */
        public function whereNotHas(string $column): self
        {
        }

        /**
         * Specifies a grouping over the results of the query.
         * Replaces any previously specified groupings, if any.
         *
         * @param mixed $column the grouping column
         * @return $this
         * @see UserModel::groupBy
         */
        public function groupBy($column): self
        {
        }

        /**
         * Specifies a restriction over the groups of the query.
         * Replaces any previous having restrictions, if any.
         *
         * @param mixed $column
         * @param mixed $operator
         * @param mixed|null $value
         * @param mixed $condition
         * @return $this
         * @see UserModel::having
         */
        public function having($column, $operator, $value = null, $condition = 'AND'): self
        {
        }

        /**
         * Specifies an ordering for the query results.
         * Replaces any previously specified orderings, if any.
         *
         * @param string|Raw $column the ordering expression
         * @param string $order the ordering direction
         * @return $this
         * @see UserModel::orderBy
         */
        public function orderBy($column, $order = 'ASC'): self
        {
        }

        /**
         * @param string $expression
         * @return $this
         * @see UserModel::orderByRaw
         */
        public function orderByRaw($expression): self
        {
        }

        /**
         * Adds a DESC ordering to the query
         *
         * @param string $field The name of field
         * @return $this
         * @see UserModel::desc
         */
        public function desc(string $field): self
        {
        }

        /**
         * Add an ASC ordering to the query
         *
         * @param string $field The name of field
         * @return $this
         * @see UserModel::asc
         */
        public function asc(string $field): self
        {
        }

        /**
         * @return $this
         * @see UserModel::forUpdate
         */
        public function forUpdate(): self
        {
        }

        /**
         * @return $this
         * @see UserModel::forShare
         */
        public function forShare(): self
        {
        }

        /**
         * @param string|bool $lock
         * @return $this
         * @see UserModel::lock
         */
        public function lock($lock): self
        {
        }

        /**
         * @param mixed $value
         * @param callable $callback
         * @param callable|null $default
         * @return $this
         * @see UserModel::when
         */
        public function when($value, callable $callback, callable $default = null): self
        {
        }

        /**
         * @param mixed $value
         * @param callable $callback
         * @param callable|null $default
         * @return $this
         * @see UserModel::unless
         */
        public function unless($value, callable $callback, callable $default = null): self
        {
        }

        /**
         * @param callable|null $converter
         * @return $this
         * @see UserModel::setDbKeyConverter
         */
        public function setDbKeyConverter(callable $converter = null): self
        {
        }

        /**
         * @param callable|null $converter
         * @return $this
         * @see UserModel::setPhpKeyConverter
         */
        public function setPhpKeyConverter(callable $converter = null): self
        {
        }

        /**
         * Add a (inner) join base on the relation to the query
         *
         * @param string|array $name
         * @param string $type
         * @return $this
         * @see UserModel::joinRelation
         */
        public function joinRelation($name, string $type = 'INNER'): self
        {
        }

        /**
         * Add a inner join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see UserModel::innerJoinRelation
         */
        public function innerJoinRelation($name): self
        {
        }

        /**
         * Add a left join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see UserModel::leftJoinRelation
         */
        public function leftJoinRelation($name): self
        {
        }

        /**
         * Add a right join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see UserModel::rightJoinRelation
         */
        public function rightJoinRelation($name): self
        {
        }

        /**
         * Check if the model method defines the "Relation" attribute (or the "@Relation" tag in doc comment)
         *
         * This method only checks whether the specified method has the "Relation" attribute,
         * and does not check the actual logic.
         * It is provided for external use to avoid directly calling `$this->$relation()` to cause attacks.
         *
         * @param string $method
         * @return bool
         * @see UserModel::isRelation
         */
        public function isRelation(string $method): bool
        {
        }
    }
}
