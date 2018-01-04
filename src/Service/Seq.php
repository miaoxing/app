<?php

namespace Miaoxing\App\Service;

/**
 * @property \Wei\Db $db
 * @property \Wei\Redis $redis
 */
class Seq extends \Miaoxing\Plugin\BaseService
{
    /**
     * @var string
     */
    protected $driver = 'db';

    /**
     * The table name or counter key
     *
     * @var string
     */
    protected $name = 'seq';

    /**
     * @param int $offset
     * @return null|int
     * @throws \Exception
     */
    public function __invoke($offset = 100)
    {
        $name = $this->name;
        $offset = mt_rand(1, $offset);

        switch ($this->driver) {
            case 'redis':
                return $this->redis->incr($name, $offset);

            case 'db':
                $stmt = $this->db->query("REPLACE INTO $name (stub) VALUES (1);SELECT LAST_INSERT_ID();");
                $stmt->nextRowset();

                return (int) $stmt->fetchColumn();

            default:
                throw new \Exception(sprintf('Unsupported driver "%s"', $this->driver));
        }
    }
}
