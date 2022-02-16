<?php
declare (strict_types=1);
namespace MailPoetVendor\Doctrine\ORM\Mapping;
if (!defined('ABSPATH')) exit;
use Attribute;
use MailPoetVendor\Doctrine\Common\Annotations\Annotation\NamedArgumentConstructor;
#[Attribute(Attribute::TARGET_PROPERTY)]
final class JoinTable implements Annotation
{
 public $name;
 public $schema;
 public $joinColumns = [];
 public $inverseJoinColumns = [];
 public function __construct(?string $name = null, ?string $schema = null, $joinColumns = [], $inverseJoinColumns = [])
 {
 $this->name = $name;
 $this->schema = $schema;
 $this->joinColumns = $joinColumns instanceof JoinColumn ? [$joinColumns] : $joinColumns;
 $this->inverseJoinColumns = $inverseJoinColumns instanceof JoinColumn ? [$inverseJoinColumns] : $inverseJoinColumns;
 }
}
