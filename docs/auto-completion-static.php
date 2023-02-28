<?php

namespace Miaoxing\App\Service;

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
