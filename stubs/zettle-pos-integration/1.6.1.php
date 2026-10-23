<?php
/**
 * Generated stub declarations for zettle-pos-integration 1.6.1.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

namespace Inpsyde\Debug;

interface ExceptionHandler
{
    public function handle(\Throwable $exception): void;
}
class CompositeExceptionHandler implements \Inpsyde\Debug\ExceptionHandler
{
    /**
     * @var ExceptionHandler[]
     */
    private $exceptionHandlers;
    public function __construct(\Inpsyde\Debug\ExceptionHandler ...$exceptionHandlers)
    {
    }
    public function handle(\Throwable $exception): void
    {
    }
}
class DebugProxyFactory
{
    /**
     * @var ExceptionHandler
     */
    private $handler;
    public function __construct(\Inpsyde\Debug\ExceptionHandler $handler)
    {
    }
    /**
     * Creates a new proxy class for that will log any exceptions travelling through
     * the specified methods (or all of them if none are specified)
     * With the help of Reflection, this factory will create a new class that extends
     * as well as decorates the given object. This means it is fully compatible with
     * all of its method signatures and delegates everything to it - after wrapping
     * it into a try/catch block that logs and re-throws any exception that went through it
     *
     * @param $subject
     * @param string ...$methods
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     *
     * @return mixed
     */
    public function forInstanceMethods($subject, string ...$methods)
    {
    }
    private function renderConstructor(string $subjectFqcn): string
    {
    }
    private function renderDebugMethodBody(string $name)
    {
    }
    private function renderDecoratorMethodBody(string $name)
    {
    }
    private function renderClassName(\ReflectionClass $reflectionClass, string $suffix, bool $short = false): string
    {
    }
    private function renderNamespace(\ReflectionClass $reflectionClass): string
    {
    }
    private function determineProxyMethods($subject, array $requestedMethods): array
    {
    }
}
interface ExceptionFormatter
{
    public function format(\Throwable $exception): string;
}
class FallbackFormatter implements \Inpsyde\Debug\ExceptionFormatter
{
    /**
     * @var bool
     */
    private $isDebug;
    public function __construct(bool $isDebug)
    {
    }
    /**
     * Produces a recursive exception trace.
     * If WP_DEBUG is active, the full trace is used, otherwise a shorter on will be produced
     *
     * @param \Throwable $exception
     *
     * @return string
     */
    public function format(\Throwable $exception): string
    {
    }
    /**
     * Recursively formats the exception and all its ascendant into a short error message
     *
     * @param \Throwable $exception
     *
     * @return string
     */
    private function formatShortExceptionTrace(\Throwable $exception): string
    {
    }
    /**
     * Returns the full exception trace by string casting
     *
     * @param \Throwable $exception
     *
     * @return string
     */
    private function formatFullExceptionTrace(\Throwable $exception): string
    {
    }
}
class InpsydeDebugModule implements \Dhii\Modular\Module\ModuleInterface
{
    /**
     * @inheritDoc
     */
    public function setup(): \Interop\Container\ServiceProviderInterface
    {
    }
    /**
     * @inheritDoc
     */
    public function run(\Psr\Container\ContainerInterface $container): void
    {
    }
}
class LogExceptionHandler implements \Inpsyde\Debug\ExceptionHandler
{
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;
    /**
     * @var ExceptionFormatter
     */
    private $formatter;
    /**
     * @var string[]
     */
    private $levels;
    public function __construct(\Psr\Log\LoggerInterface $logger, \Inpsyde\Debug\ExceptionFormatter $formatter, array $levels)
    {
    }
    public function handle(\Throwable $exception): void
    {
    }
    private function determineLogLevel(\Throwable $exception): string
    {
    }
    private function pluckLevel(array $keys, array $levels): ?string
    {
    }
}
class MethodSignature
{
    /**
     * @var \ReflectionMethod
     */
    private $method;
    public function __construct(\ReflectionMethod $method)
    {
    }
    public function __toString(): string
    {
    }
    private function renderParamSignature(): string
    {
    }
    private function renderReturnType(): string
    {
    }
}
class TypeDelegatingFormatter implements \Inpsyde\Debug\ExceptionFormatter
{
    /**
     * @var ExceptionFormatter
     */
    private $fallback;
    /**
     * @var array
     */
    private $formatters;
    public function __construct(\Inpsyde\Debug\ExceptionFormatter $fallback, array $formatters)
    {
    }
    public function format(\Throwable $exception): string
    {
    }
    private function findFormatterByType(\Throwable $exception): ?\Inpsyde\Debug\ExceptionFormatter
    {
    }
}
namespace Inpsyde\Http;

class HttpClientFactory
{
    /**
     * @var \Psr\Http\Client\ClientInterface
     */
    protected $innerClient;
    public function __construct(\Psr\Http\Client\ClientInterface $innerClient)
    {
    }
    public function withPlugins(\Http\Client\Common\Plugin ...$plugins): \Psr\Http\Client\ClientInterface
    {
    }
}
class HttpClientModule implements \Dhii\Modular\Module\ModuleInterface
{
    /**
     * @inheritDoc
     */
    public function setup(): \Interop\Container\ServiceProviderInterface
    {
    }
    /**
     * @inheritDoc
     */
    public function run(\Psr\Container\ContainerInterface $container): void
    {
    }
}
namespace Inpsyde\Queue;

class Bootstrap
{
    /**
     * @var \Inpsyde\Queue\Db\Table[]
     */
    private $tables;
    public function __construct(\Inpsyde\Queue\Db\Table ...$tables)
    {
    }
    public function activate()
    {
    }
    /**
     * phpcs:disable WordPress.DB.PreparedSQL.InterpolatedNotPrepared
     */
    public function deactivate()
    {
    }
}
namespace Inpsyde\Queue\Cli;

class QueueCommand
{
    /**
     * @var \Inpsyde\Queue\Processor\QueueProcessor
     */
    private $processor;
    public function __construct(\Inpsyde\Queue\Processor\QueueProcessor $processor)
    {
    }
    /**
     * Processes current queue items
     *
     * ## OPTIONS
     *
     * [--max-items=<value>]
     * : Whether or not to greet the person with success or error.
     * ---
     * default: -1
     * ---
     *
     * ## EXAMPLES
     *
     *     wp <namespace> queue process
     *
     * @when after_wp_load
     */
    public function process(array $args, array $assocArgs)
    {
    }
    /**
     * Intended to run forever, checking for new jobs to run every 2 seconds
     *
     * ## OPTIONS
     *
     * [--max-items=<value>]
     * : Whether or not to greet the person with success or error.
     * ---
     * default: -1
     * ---
     *
     * ## EXAMPLES
     *
     *     wp <namespace> queue live
     *
     * @when after_wp_load
     */
    public function live(array $args, array $assocArgs)
    {
    }
}
namespace Inpsyde\Queue\Db;

/**
 * Interface Table
 */
interface Table
{
    const MAX_INDEX_LENGTH = 191;
    /**
     * The name of the database table
     *
     * @return string
     */
    public function name(): string;
    /**
     * The table schema
     *
     * @return string
     */
    public function schema(): string;
}
/**
 * Class QueueTable
 * @package Inpsyde\OneStock\Db
 */
class QueueTable implements \Inpsyde\Queue\Db\Table
{
    /**
     * @var string
     */
    private $namespace;
    public function __construct(string $namespace)
    {
    }
    /**
     * @return string
     */
    public function name(): string
    {
    }
    /**
     * @return string
     */
    public function schema(): string
    {
    }
}
namespace Inpsyde\Queue\Exception;

interface QueueException extends \Throwable
{
}
class InvalidJobException extends \Exception implements \Inpsyde\Queue\Exception\QueueException
{
}
class QueueLockedException extends \Exception implements \Inpsyde\Queue\Exception\QueueException
{
}
class QueueRuntimeException extends \Exception implements \Inpsyde\Queue\Exception\QueueException
{
}
namespace Inpsyde\Queue;

trait ExceptionLoggingTrait
{
    /**
     * Produces an exception trace and passes that to the Logger.
     * if WP_DEBUG is active, the full trace is used, otherwise a shorter on will be produced
     *
     * @param \Throwable $exception
     * @param \Psr\Log\LoggerInterface $logger
     * @param string $logLevel
     */
    protected function logException(\Throwable $exception, \Psr\Log\LoggerInterface $logger, string $logLevel = \Psr\Log\LogLevel::WARNING)
    {
    }
    /**
     * Recursively formats the exception and all its ascendant into a short error message
     *
     * @param \Throwable $exception
     *
     * @return string
     */
    private function formatShortExceptionTrace(\Throwable $exception): string
    {
    }
    /**
     * Returns the full exception trace by string casting
     *
     * @param \Throwable $exception
     *
     * @return string
     */
    private function formatFullExceptionTrace(\Throwable $exception): string
    {
    }
}
namespace Inpsyde\Queue\Log;

/**
 * Class ArrayLogger
 *
 * This is a special logger implementation that can return everything it logged.
 * Its primary use-case is to enable putting queue logs into our REST response.
 *
 * It optionally decorates a child LoggerInterface so that it can be used
 * on top of an existing logging chain
 *
 * @package Inpsyde\Queue\Log
 */
class ArrayLogger implements \Psr\Log\LoggerInterface
{
    use \Psr\Log\LoggerTrait;
    /**
     * @var array
     */
    private $storage = [];
    /**
     * @var \Psr\Log\LoggerInterface|null
     */
    private $childLogger;
    public function __construct(\Psr\Log\LoggerInterface $childLogger = null)
    {
    }
    /**
     * @inheritDoc
     */
    public function log($level, $message, array $context = [])
    {
    }
    /**
     * Return the logs of a specific LogLevel, or all logs if no parameter is given
     *
     * @param string|null $logLevel
     *
     * @return array
     */
    public function logs(string $logLevel = null): array
    {
    }
}
class WpCliLogger implements \Psr\Log\LoggerInterface
{
    /**
     * @inheritDoc
     */
    public function emergency($message, array $context = [])
    {
    }
    /**
     * @inheritDoc
     */
    public function alert($message, array $context = [])
    {
    }
    /**
     * @inheritDoc
     */
    public function critical($message, array $context = [])
    {
    }
    /**
     * @inheritDoc
     */
    public function error($message, array $context = [])
    {
    }
    /**
     * @inheritDoc
     */
    public function warning($message, array $context = [])
    {
    }
    /**
     * @inheritDoc
     */
    public function notice($message, array $context = [])
    {
    }
    /**
     * @inheritDoc
     */
    public function info($message, array $context = [])
    {
    }
    /**
     * @inheritDoc
     */
    public function debug($message, array $context = [])
    {
    }
    /**
     * @inheritDoc
     */
    public function log($level, $message, array $context = [])
    {
    }
}
namespace Inpsyde\Queue\Logger;

interface LoggerProviderInterface extends \Psr\Log\LoggerAwareInterface
{
    /**
     * Get a logger instance on the object.
     *
     * @return \Psr\Log\LoggerInterface
     */
    public function logger(): \Psr\Log\LoggerInterface;
}
namespace Inpsyde\Queue;

class NetworkState
{
    /**
     * @var int
     */
    private $siteId;
    /**
     * @var int[]
     */
    private $stack;
    private function __construct()
    {
    }
    /**
     * Returns a new instance for the global site ID and switched stack.
     *
     * @return static
     */
    public static function create(): \Inpsyde\Queue\NetworkState
    {
    }
    /**
     * Restores the stored site state.
     *
     * @return int
     */
    public function restore(): int
    {
    }
}
namespace Inpsyde\Queue\Processor;

interface QueueProcessor
{
    /**
     * Return the JobRepository
     *
     * @return \Inpsyde\Queue\Queue\Job\JobRepository
     */
    public function repository(): \Inpsyde\Queue\Queue\Job\JobRepository;
    /**
     * Return the amount of processed Jobs
     * @throws \Inpsyde\Queue\Exception\QueueLockedException
     * @return int
     */
    public function process(): int;
}
/**
 * Class NetworkQueueProcessor
 *
 * Basically performs the current queue tasks in the process() method. Each site of the
 * network will execute this process in a cron job, bound to the action NetworkQueueProcessor::HOOK.
 *
 * @package Inpsyde\Queue\Queue
 */
class BasicQueueProcessor implements \Inpsyde\Queue\Processor\QueueProcessor, \Inpsyde\Queue\Logger\LoggerProviderInterface
{
    /**
     * @var \Inpsyde\Queue\Queue\Job\JobRepository
     */
    private $jobRepository;
    /**
     * @var \Inpsyde\Queue\Queue\QueueWalker
     */
    private $walker;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;
    /**
     * @var \Inpsyde\Queue\Queue\Job\JobRecordFactoryInterface
     */
    private $recordFactory;
    /**
     * @var callable
     */
    private $exceptionHandler;
    /**
     * @var int
     */
    private $maxRetriesCount;
    public function __construct(\Inpsyde\Queue\Queue\Job\JobRepository $jobRepository, \Inpsyde\Queue\Queue\Job\JobRecordFactoryInterface $recordFactory, \Inpsyde\Queue\Queue\QueueWalker $walker, \Psr\Log\LoggerInterface $logger, int $maxRetriesCount, ?callable $exceptionHandler = null)
    {
    }
    /**
     * @inheritDoc
     * phpcs:disable Inpsyde.CodeQuality.NoAccessors.NoSetter
     */
    public function setLogger(\Psr\Log\LoggerInterface $logger): void
    {
    }
    /**
     * @inheritDoc
     */
    public function logger(): \Psr\Log\LoggerInterface
    {
    }
    /**
     * @inheritDoc
     */
    public function repository(): \Inpsyde\Queue\Queue\Job\JobRepository
    {
    }
    /**
     * Lock the queue, walk over all available jobs, unlock again
     *
     * @return int
     * @throws \Inpsyde\Queue\Exception\QueueLockedException
     */
    public function process(): int
    {
    }
    /**
     * @param \Inpsyde\Queue\Queue\Job\JobRecord $jobRecord
     *
     * @return bool
     * @throws \Throwable
     */
    public function processSingleJob(\Inpsyde\Queue\Queue\Job\JobRecord $jobRecord): bool
    {
    }
    /**
     * @param \Inpsyde\Queue\Queue\Job\JobRecord $record
     *
     * @return \Inpsyde\Queue\Queue\Job\JobRecord
     * @throws \Inpsyde\Queue\Exception\InvalidJobException
     */
    private function createRetry(\Inpsyde\Queue\Queue\Job\JobRecord $record): \Inpsyde\Queue\Queue\Job\JobRecord
    {
    }
    private function maybeRetry(\Inpsyde\Queue\Queue\Job\JobRecord $record): bool
    {
    }
}
trait DecoratingLoggingProviderTrait
{
    abstract protected function inner(): \Inpsyde\Queue\Processor\QueueProcessor;
    /**
     * @inheritDoc
     * phpcs:disable Inpsyde.CodeQuality.NoAccessors.NoSetter
     */
    public function setLogger(\Psr\Log\LoggerInterface $logger)
    {
    }
    /**
     * @inheritDoc
     */
    public function logger(): \Psr\Log\LoggerInterface
    {
    }
}
class LockingQueueProcessor implements \Inpsyde\Queue\Processor\QueueProcessor
{
    use \Inpsyde\Queue\Processor\DecoratingLoggingProviderTrait;
    /**
     * @var QueueProcessor
     */
    private $inner;
    /**
     * @var \Inpsyde\Queue\Queue\Locker
     */
    private $locker;
    public function __construct(\Inpsyde\Queue\Processor\QueueProcessor $inner, \Inpsyde\Queue\Queue\Locker $locker)
    {
    }
    public function repository(): \Inpsyde\Queue\Queue\Job\JobRepository
    {
    }
    public function process(): int
    {
    }
    protected function inner(): \Inpsyde\Queue\Processor\QueueProcessor
    {
    }
}
/**
 * Class NetworkQueueProcessor
 *
 * Decorates another QueueProcessor and ensures
 * that the current blog is restored when all jobs are processed
 *
 * @package Inpsyde\Queue\Queue
 */
class NetworkQueueProcessor implements \Inpsyde\Queue\Processor\QueueProcessor, \Inpsyde\Queue\Logger\LoggerProviderInterface
{
    use \Inpsyde\Queue\Processor\DecoratingLoggingProviderTrait;
    /**
     * @var QueueProcessor
     */
    private $inner;
    /**
     * @var callable The function returning NetworkState object
     */
    private $networkStateFactory;
    /**
     * NetworkQueueProcessor constructor.
     *
     * @param QueueProcessor $inner
     * @param callable $networkStateFactory The function returning NetworkState object
     */
    public function __construct(\Inpsyde\Queue\Processor\QueueProcessor $inner, callable $networkStateFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function repository(): \Inpsyde\Queue\Queue\Job\JobRepository
    {
    }
    /**
     * Lock the queue, walk over all available jobs, unlock again
     *
     * @return int
     * @throws \Inpsyde\Queue\Exception\QueueException
     */
    public function process(): int
    {
    }
    protected function inner(): \Inpsyde\Queue\Processor\QueueProcessor
    {
    }
}
/**
 * Streamlines the creation of QueueProcessor instances with a fluent API
 */
class ProcessorBuilder
{
    /**
     * @var \Inpsyde\Queue\Queue\Job\EphemeralJobRepository
     */
    private $repository;
    /**
     * @var \Inpsyde\Queue\Queue\Stopper|null
     */
    private $stopper;
    /**
     * @var array
     */
    private $types = [];
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;
    /**
     * @var \Inpsyde\Queue\Queue\Job\JobRecordFactoryInterface
     */
    private $jobRecordFactory;
    /**
     * @var \Inpsyde\Queue\Queue\Locker|null
     */
    private $locker;
    /**
     * @var bool
     */
    private $isMultisite = false;
    /**
     * @var callable
     */
    private $exceptionHandler;
    /**
     * @var int
     */
    private $maxRetriesCount = 0;
    public function __construct(\Inpsyde\Queue\Queue\Job\JobRecordFactoryInterface $jobRecordFactory)
    {
    }
    public function withStopper(\Inpsyde\Queue\Queue\Stopper $stopper): self
    {
    }
    /**
     * Adds a Locker to the Builder
     * This will cause usage of the LockingQueueProcessor decorator during build()
     * @param \Inpsyde\Queue\Queue\Locker $locker
     *
     * @return $this
     */
    public function withLocker(\Inpsyde\Queue\Queue\Locker $locker): self
    {
    }
    /**
     * Uses a specific JobRepository. By default, EphemeralJobRepository is used
     * @param \Inpsyde\Queue\Queue\Job\JobRepository $repository
     *
     * @return $this
     */
    public function withRepository(\Inpsyde\Queue\Queue\Job\JobRepository $repository): self
    {
    }
    public function withLogger(\Psr\Log\LoggerInterface $logger): self
    {
    }
    /**
     * Makes the resulting processor work only on the specified types of jobs
     * @param array $types
     *
     * @return $this
     */
    public function withJobTypes(array $types): self
    {
    }
    /**
     * If this is configured, the Processor will be built wrapped in a NetworkQueueProcessor
     * @param bool $state
     *
     * @return $this
     */
    public function withNetworkSupport(bool $state = true): self
    {
    }
    public function withExceptionHandler(callable $handler): self
    {
    }
    public function withMaxRetriesCount(int $maxRetriesCount): self
    {
    }
    public function build(): \Inpsyde\Queue\Processor\QueueProcessor
    {
    }
    private function createWalker(\Inpsyde\Queue\Queue\Job\JobIterator $jobIterator): \Inpsyde\Queue\Queue\QueueWalker
    {
    }
}
namespace Inpsyde\Queue\Queue;

/**
 * Interface Locker
 * @package Inpsyde\Queue\Queue
 */
interface Locker
{
    /**
     * @return bool
     */
    public function lock(): bool;
    /**
     * @return bool
     */
    public function unlock(): bool;
    /**
     * @return bool
     */
    public function isLocked(): bool;
}
/**
 * Class EphemeralLocker
 * Locks and unlocks without providing any sort of persistence.
 * Used for acceptance testing
 *
 * @package Inpsyde\Queue\Queue
 */
class EphemeralLocker implements \Inpsyde\Queue\Queue\Locker
{
    private $isLocked = false;
    /**
     * @inheritDoc
     */
    public function lock(): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function unlock(): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function isLocked(): bool
    {
    }
}
class FileBasedLocker implements \Inpsyde\Queue\Queue\Locker
{
    /**
     * @var int
     */
    private $timeout;
    /**
     * @var string
     */
    private $file;
    /**
     * FileBasedLocker constructor.
     *
     * @param int $timeout
     * @param string $file
     */
    public function __construct(int $timeout, string $file)
    {
    }
    /**
     * @return bool
     */
    public function lock(): bool
    {
    }
    /**
     * @return bool
     */
    public function unlock(): bool
    {
    }
    /**
     * @return bool
     */
    public function isLocked(): bool
    {
    }
}
/**
 * Interface Stopper
 *
 * An object implementing this interface can be used to stop a process
 * that would otherwise be running indefinitely by returning `true` in the `isStopped` method.
 * You can use the time laps or the number of rounds or whatever
 * you want to signal the Walker to stop its work.
 *
 * @package Inpsyde\Queue\Queue
 */
interface Stopper
{
    /**
     * This method can be used to perform initialization logic ie. storing a timestamp
     * It will be called whenever a "stoppable" process starts
     *
     * @return bool
     */
    public function start(): bool;
    /**
     * Whether or not this stopper has finished already. Expect this to be called frequently,
     * so this method should not perform expensive calculations.
     *
     * @return bool
     */
    public function isStopped(): bool;
}
/**
 * Class ItemsCountStopper
 * @package Inpsyde\Queue\Queue
 */
class ItemsCountStopper implements \Inpsyde\Queue\Queue\Stopper
{
    /**
     * @var int
     */
    private $processedItems = 0;
    /**
     * @var int
     */
    private $maxItems = 0;
    /**
     * ItemsCountStopper constructor.
     * @param int $maxItems
     */
    public function __construct(int $maxItems)
    {
    }
    /**
     * @return bool
     */
    public function start(): bool
    {
    }
    /**
     * @return bool
     */
    public function isStopped(): bool
    {
    }
}
namespace Inpsyde\Queue\Queue\Job;

interface JobRecord
{
    public function job(): \Inpsyde\Queue\Queue\Job\Job;
    public function context(): \Inpsyde\Queue\Queue\Job\ContextInterface;
}
class BasicJobRecord implements \Inpsyde\Queue\Queue\Job\JobRecord
{
    /**
     * @var Job
     */
    private $job;
    /**
     * @var ContextInterface
     */
    private $context;
    public function __construct(\Inpsyde\Queue\Queue\Job\Job $job, \Inpsyde\Queue\Queue\Job\ContextInterface $context)
    {
    }
    public function job(): \Inpsyde\Queue\Queue\Job\Job
    {
    }
    public function context(): \Inpsyde\Queue\Queue\Job\ContextInterface
    {
    }
}
trait ClassNameTypeTrait
{
    /**
     * The type is needed to restore the specific QueueJob from the database in the QueueJobFactory.
     * @return string
     */
    public function type(): string
    {
    }
}
interface JobRecordFactoryInterface
{
    /**
     * @param string $class
     * @param ContextInterface $context
     * @throws \Inpsyde\Queue\Exception\InvalidJobException
     * @return JobRecord
     */
    public function fromData(string $class, \Inpsyde\Queue\Queue\Job\ContextInterface $context): \Inpsyde\Queue\Queue\Job\JobRecord;
}
/**
 * Class QueueJobFactory
 *
 * @package Inpsyde\Queue\Queue
 */
class ContainerAwareJobRecordFactory implements \Inpsyde\Queue\Queue\Job\JobRecordFactoryInterface
{
    /**
     * @var \Psr\Container\ContainerInterface
     */
    private $container;
    /**
     * QueueEntryFactory constructor.
     *
     * @param \Psr\Container\ContainerInterface $container
     */
    public function __construct(\Psr\Container\ContainerInterface $container)
    {
    }
    /**
     * @inheritDoc
     */
    public function fromData(string $type, \Inpsyde\Queue\Queue\Job\ContextInterface $context): \Inpsyde\Queue\Queue\Job\JobRecord
    {
    }
}
interface ContextInterface
{
    public function id(): int;
    /**
     * The blog ID of the site the job is supposed to run on
     * @return int
     */
    public function forSite(): int;
    /**
     * Scalar (or at least serializable) arguments for the job instance
     * @return object
     */
    public function args(): object;
    /**
     * Time of creation of the Job
     * @return \DateTime
     */
    public function created(): \DateTime;
    /**
     * Jobs may be re-run after failure for a set amount of times.
     * This methods returns the amount of times a Job has been retried.
     * @return int
     */
    public function retryCount(): int;
    /**
     * Returns a new instance of ContextInterface with the retry count incremented by 1
     * @return $this
     */
    public function withIncrementedRetryCount(): self;
}
class Context implements \Inpsyde\Queue\Queue\Job\ContextInterface
{
    /**
     * @var object
     */
    private $args;
    /**
     * @var \DateTime
     */
    private $created;
    /**
     * @var int
     */
    private $siteId;
    /**
     * @var int
     */
    private $id;
    /**
     * @var int
     */
    private $retryCount;
    public function __construct(object $args, \DateTime $created, int $siteId, int $retryCount = 0, int $id = 0)
    {
    }
    public function id(): int
    {
    }
    public function forSite(): int
    {
    }
    public function args(): object
    {
    }
    public function created(): \DateTime
    {
    }
    public function retryCount(): int
    {
    }
    public static function fromArray(array $data, ?int $siteId = null, int $retryCount = 0, ?\DateTime $created = null, int $id = 0): \Inpsyde\Queue\Queue\Job\ContextInterface
    {
    }
    public function withIncrementedRetryCount(): \Inpsyde\Queue\Queue\Job\ContextInterface
    {
    }
    /**
     * For consistency, we update the creation date if the object is cloned
     * - for example using the wither above
     */
    public function __clone()
    {
    }
}
trait ContextCourierTrait
{
    /**
     * @var ContextInterface
     */
    protected $context;
    /**
     * @inheritDoc
     */
    public function args(): \stdClass
    {
    }
    /**
     * @inheritDoc
     */
    public function id(): int
    {
    }
    /**
     * @inheritDoc
     */
    public function forSite(): int
    {
    }
    /**
     * @inheritDoc
     */
    public function created(): \DateTime
    {
    }
}
/**
 * Interface JobRepository
 *
 * @package Inpsyde\Queue\Queue
 */
interface JobRepository
{
    /**
     * Adds a QueueJob to the repository
     *
     * @param JobRecord ...$jobRecords
     *
     * @return bool
     */
    public function add(\Inpsyde\Queue\Queue\Job\JobRecord ...$jobRecords): bool;
    /**
     * Deletes a QueueJob from the repository
     *
     * @param JobRecord $jobRecord
     *
     * @return bool
     */
    public function delete(\Inpsyde\Queue\Queue\Job\JobRecord $jobRecord): bool;
    /**
     * Returns a number of QueueJobs
     *
     * @param int $limit The amount of QueueJobs to fetch
     *
     * @param array $types
     *
     * @return JobRecord[]
     */
    public function fetch(int $limit = 1, array $types = []): array;
    /**
     * Delete all records in the repository
     *
     * @return bool Whether or not the operation was successful
     */
    public function flush(): bool;
    /**
     * Returns an amount of jobs
     *
     * @param array $types
     *
     * @return int
     */
    public function count(array $types = []): int;
}
/**
 * Class EphemeralJobRepository
 * Stupidly simple array-based repository implementation without any sort of persistence.
 * Used for acceptance-testing
 *
 * @package Inpsyde\Queue\Queue\Job
 */
class EphemeralJobRepository implements \Inpsyde\Queue\Queue\Job\JobRepository
{
    /**
     * @var JobRecord[]
     */
    private $repository = [];
    /**
     * @inheritDoc
     */
    public function add(\Inpsyde\Queue\Queue\Job\JobRecord ...$jobRecords): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function delete(\Inpsyde\Queue\Queue\Job\JobRecord $jobRecord): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function fetch(int $limit = 1, array $types = []): array
    {
    }
    /**
     * @inheritDoc
     */
    public function count(array $types = []): int
    {
    }
    public function flush(): bool
    {
    }
}
/**
 * Interface QueueJob
 *
 * The queue exists of entries, the QueueEntries. The execute method will execute the actions, the
 * job is supposed to do.
 *
 * @package Inpsyde\Queue\Queue
 */
interface Job
{
    /**
     * Executes the specific job.
     *
     * @param ContextInterface $context
     * @param JobRepository $repository
     * @param \Psr\Log\LoggerInterface $logger
     *
     * @return bool
     *
     * @throws \Inpsyde\Queue\Exception\QueueRuntimeException
     */
    public function execute(\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Inpsyde\Queue\Queue\Job\JobRepository $repository, \Psr\Log\LoggerInterface $logger): bool;
    /**
     * If true, the repository will not add a job with the same hash() to the database twice.
     *
     * @return bool
     */
    public function isUnique(): bool;
    /**
     * The type is needed to restore the specific QueueJob from the database in the QueueJobFactory.
     *
     * @return string
     */
    public function type(): string;
}
class JobContainer implements \Psr\Container\ContainerInterface
{
    /**
     * @var \Psr\Container\ContainerInterface
     */
    private $parent;
    /**
     * @var string
     */
    private $prefix;
    public function __construct(\Psr\Container\ContainerInterface $parent, string $prefix)
    {
    }
    /**
     * @inheritDoc
     */
    public function get($id)
    {
    }
    /**
     * @inheritDoc
     */
    public function has($id)
    {
    }
}
/**
 * Class QueueJobIterator
 *
 * @package Inpsyde\Queue\Queue
 */
class JobIterator implements \Iterator
{
    /**
     * Used to fetch a batch of new jobs once we're done with the current one
     * @var JobRepository
     */
    private $repo;
    /**
     * @var array
     */
    private $types;
    /**
     * Current batch of jobs to iterate over
     * @var array
     */
    private $jobs = [];
    /**
     * @var Job
     */
    private $current;
    /**
     * @var int
     */
    private $idx = 0;
    /**
     * @var callable
     */
    private $sortCallback;
    /**
     * QueueJobIterator constructor.
     *
     * @param JobRepository $repo
     * @param array $types
     * @param callable|null $sortCallback
     */
    public function __construct(\Inpsyde\Queue\Queue\Job\JobRepository $repo, array $types = [], ?callable $sortCallback = null)
    {
    }
    /**
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
    }
    /**
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid(): bool
    {
    }
    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     * @since 5.0.0
     */
    public function current(): \Inpsyde\Queue\Queue\Job\JobRecord
    {
    }
    /**
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function next(): void
    {
    }
    /**
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function rewind(): void
    {
    }
}
/**
 * Class NullJob
 *
 * @package Inpsyde\Queue\Queue
 */
class NullJob implements \Inpsyde\Queue\Queue\Job\Job
{
    /**
     * @return bool
     */
    public function execute(\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Inpsyde\Queue\Queue\Job\JobRepository $repository, \Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @return bool
     */
    public function isUnique(): bool
    {
    }
    /**
     * @return \stdClass
     */
    public function args(): \stdClass
    {
    }
    /**
     * @return string
     */
    public function type(): string
    {
    }
}
/**
 * Class NetworkQueueJobRepository
 *
 * @package Inpsyde\Queue\Queue
 */
class WpDbJobRepository implements \Inpsyde\Queue\Queue\Job\JobRepository
{
    /**
     * @var \wpdb
     */
    private $database;
    /**
     * @var \Inpsyde\Queue\Db\Table
     */
    private $queueTable;
    /**
     * @var JobRecordFactoryInterface
     */
    private $jobRecordFactory;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;
    /**
     * NetworkQueueJobRepository constructor.
     *
     * @param \wpdb $database
     * @param \Inpsyde\Queue\Db\Table $queueTable
     * @param JobRecordFactoryInterface $queueFactory
     */
    public function __construct(\wpdb $database, \Inpsyde\Queue\Db\Table $queueTable, \Inpsyde\Queue\Queue\Job\JobRecordFactoryInterface $queueFactory, \Psr\Log\LoggerInterface $logger)
    {
    }
    /**
     * @inheritDoc
     */
    public function add(\Inpsyde\Queue\Queue\Job\JobRecord ...$jobRecords): bool
    {
    }
    /**
     * Checks the hashes of all JobRecords and filters out existing ones if they are supposed to be unique
     *
     * @param JobRecord ...$jobRecords
     *
     * @return array
     */
    private function filterExistingUniqueJobs(\Inpsyde\Queue\Queue\Job\JobRecord ...$jobRecords): array
    {
    }
    /**
     * Returns a hash of a JobRecord object by serializing its data and type.
     *
     * @param JobRecord $jobRecord
     *
     * @return string
     */
    private function jobHash(\Inpsyde\Queue\Queue\Job\JobRecord $jobRecord): string
    {
    }
    /**
     * @param string ...$hashes
     *
     * @return array
     */
    private function getEntriesByHash(string ...$hashes): array
    {
    }
    /**
     * @inheritDoc
     */
    public function delete(\Inpsyde\Queue\Queue\Job\JobRecord $jobRecord): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function fetch(int $limit = 1, array $types = []): array
    {
    }
    /**
     * Generates the WHERE clause for an array of job types
     *
     * @param array $types
     *
     * @return string
     */
    private function whereTypes(array $types = []): string
    {
    }
    /**
     * @inheritDoc
     */
    public function count(array $types = []): int
    {
    }
    /**
     * Transforms raw DB data into a JobRecord object
     *
     * @param \stdClass $row
     *
     * @return JobRecord
     * @throws \Inpsyde\Queue\Exception\InvalidJobException
     * @throws \Exception
     */
    private function castJobRecord(\stdClass $row): \Inpsyde\Queue\Queue\Job\JobRecord
    {
    }
    /**
     * Empty the queue table
     * @return bool
     */
    public function flush(): bool
    {
    }
}
namespace Inpsyde\Queue\Queue;

/**
 * Interface QueueWalker
 * @package Inpsyde\Queue\Queue
 */
interface QueueWalker
{
    /**
     * Iterates over a list of QueueItems and perform a callback on every one of them
     *
     * @param callable $callback will receive the current QueueItem as an argument
     * @return int The number of items processed
     */
    public function walk(callable $callback): int;
}
namespace Inpsyde\Queue\Queue\Runner;

/**
 * Interface Runner
 *
 * Implementations of this interface should hook themselves into the request lifecycle
 * and ensure that the Queue starts processing.
 *
 * @package Inpsyde\Queue\Queue\Runner
 */
interface Runner
{
    /**
     * Register a method to call QueueProcessor::process() at some point.
     *
     * @param \Inpsyde\Queue\Processor\QueueProcessor $queueProcessor
     */
    public function initialize(\Inpsyde\Queue\Processor\QueueProcessor $queueProcessor): void;
}
/**
 * Class DelegatingRunner
 *
 * Initializes any number of child runners
 *
 * @package Inpsyde\Queue\Queue\Runner
 */
class AggregateRunner implements \Inpsyde\Queue\Queue\Runner\Runner
{
    /**
     * @var Runner[]
     */
    private $runners;
    /**
     * AggregateRunner constructor.
     *
     * @param Runner ...$runners
     */
    public function __construct(\Inpsyde\Queue\Queue\Runner\Runner ...$runners)
    {
    }
    /**
     * Initializes all child runners
     * @param \Inpsyde\Queue\Processor\QueueProcessor $queueProcessor
     */
    public function initialize(\Inpsyde\Queue\Processor\QueueProcessor $queueProcessor): void
    {
    }
}
/**
 * Class AsyncRequestRunner
 *
 * Triggers the internal REST endpoint with a non-blocking HTTP request
 * so that the queue is processed without blocking the current request
 *
 * @package Inpsyde\Queue\Queue\Runner
 */
class AsyncRequestRunner implements \Inpsyde\Queue\Queue\Runner\Runner
{
    public const DEFAULT_TIMEOUT = 0.01;
    public const DEFAULT_IS_BLOCKING = false;
    /**
     * @var string Path (not the full URL!) to our REST endpoint
     */
    private $restPath;
    /**
     * AsyncRequestRunner constructor.
     *
     * @param string $restPath
     */
    public function __construct(string $restPath)
    {
    }
    /**
     * Craft and dispatch a non-blocking HTTP request with the current authentication headers
     *
     * @param \Inpsyde\Queue\Processor\QueueProcessor $queueProcessor
     */
    public function initialize(\Inpsyde\Queue\Processor\QueueProcessor $queueProcessor): void
    {
    }
    /**
     * Let's not act if we are already doing REST or an ajax call
     * just to sidestep potential infinite loops
     *
     * @return bool
     */
    private function shouldTrigger(): bool
    {
    }
}
/**
 * Class WpCronRunner
 *
 * Processes the Queue in a wp-cron request that always fires whenever cron is called
 *
 * @package Inpsyde\Queue\Queue\Runner
 */
class WpCronRunner implements \Inpsyde\Queue\Queue\Runner\Runner
{
    /**
     * @var string
     */
    private $namespace;
    /**
     * WpCronRunner constructor.
     *
     * @param string $namespace
     */
    public function __construct(string $namespace)
    {
    }
    /**
     * Schedules a wp-cron event that always fires.
     *
     * @param \Inpsyde\Queue\Processor\QueueProcessor $queueProcessor
     */
    public function initialize(\Inpsyde\Queue\Processor\QueueProcessor $queueProcessor): void
    {
    }
}
/**
 * A Runner that initializes a WpShutdownRunner during heartbeat requests
 */
class WpHeartbeatRunner implements \Inpsyde\Queue\Queue\Runner\Runner
{
    /**
     * @var WpShutdownRunner
     */
    private $shutdownRunner;
    public function __construct(\Inpsyde\Queue\Queue\Runner\WpShutdownRunner $shutdownRunner)
    {
    }
    public function initialize(\Inpsyde\Queue\Processor\QueueProcessor $queueProcessor): void
    {
    }
}
/**
 * Class WpShutdownRunner
 *
 * Hooks into 'shutdown' to process the queue as late as possible in the current request.
 * This of course is no longer "background" processing as it still blocks the current request,
 * so use with caution.
 *
 * Still, since WP calls this action via 'register_shutdown_function' we at least
 * know that any HTML has already been sent to the user
 *
 * @package Inpsyde\Queue\Queue\Runner
 */
class WpShutdownRunner implements \Inpsyde\Queue\Queue\Runner\Runner
{
    private $called = false;
    /**
     * Hook the QueueProcessor into the shutdown action.
     * Ensures that the Runner is only being onvoked once even if the hook is called multiple times.
     *
     * @param \Inpsyde\Queue\Processor\QueueProcessor $queueProcessor
     */
    public function initialize(\Inpsyde\Queue\Processor\QueueProcessor $queueProcessor): void
    {
    }
}
namespace Inpsyde\Queue\Queue;

/**
 * Class SiteOptionLocker
 *
 * @package Inpsyde\Queue\Queue
 */
class SiteOptionLocker implements \Inpsyde\Queue\Queue\Locker
{
    /**
     * @var \Inpsyde\Zettle\Operator\Option\OptionOperatorInterface
     */
    private $optionOperator;
    /**
     * @var int
     */
    private $timeout;
    /**
     * @var string
     */
    private $optionKey;
    /**
     * SiteOptionLocker constructor.
     *
     * @param \Inpsyde\Zettle\Operator\Option\OptionOperatorInterface $optionOperator
     * @param int $timeout
     * @param string $optionKey
     */
    public function __construct(\Inpsyde\Zettle\Operator\Option\OptionOperatorInterface $optionOperator, int $timeout, string $optionKey)
    {
    }
    /**
     * @return bool
     */
    public function lock(): bool
    {
    }
    /**
     * @return bool
     */
    public function unlock(): bool
    {
    }
    /**
     * @return bool
     */
    public function isLocked(): bool
    {
    }
}
/**
 * Class TimeoutQueueWalker
 *
 * Walks the Queue until a specified timeout is hit
 *
 * @package Inpsyde\Queue\Queue
 */
class StoppableQueueWalker implements \Inpsyde\Queue\Queue\QueueWalker
{
    /**
     * @var \Iterator
     */
    private $iterator;
    /**
     * @var Stopper
     */
    private $stopper;
    /**
     * TimeoutQueueWalker constructor.
     *
     * @param \Iterator $iterator
     * @param Stopper $stopper
     */
    public function __construct(\Iterator $iterator, \Inpsyde\Queue\Queue\Stopper $stopper)
    {
    }
    /**
     * @inheritdoc
     */
    public function walk(callable $callback): int
    {
    }
}
/**
 * Class Timer
 *
 * We want the queue to max. execute a predefined value of microseconds. The timer
 * basically gives us a timer to do so. True, the implementation is not exact science.
 *
 * @package Inpsyde\Queue\Queue
 */
class TimeStopper implements \Inpsyde\Queue\Queue\Stopper
{
    /**
     * @var int
     */
    private $startedAt;
    /**
     * @var int
     */
    private $stopAfter;
    /**
     * Timer constructor.
     * @param float $seconds
     */
    public function __construct(float $seconds)
    {
    }
    /**
     * @return bool
     */
    public function start(): bool
    {
    }
    /**
     * @return bool
     */
    public function isStopped(): bool
    {
    }
    /**
     * @return float
     */
    private function timestamp(): float
    {
    }
}
/**
 * Class TimeoutQueueWalker
 *
 * Walks the Queue until it no longer yields items
 *
 * @package Inpsyde\Queue\Queue
 */
class UnstoppableQueueWalker implements \Inpsyde\Queue\Queue\QueueWalker
{
    /**
     * @var \Iterator
     */
    private $iterator;
    /**
     * UnstoppableQueueWalker constructor.
     *
     * @param \Iterator $iterator
     */
    public function __construct(\Iterator $iterator)
    {
    }
    /**
     * @inheritdoc
     */
    public function walk(callable $callback): int
    {
    }
}
namespace Inpsyde\Queue;

class QueueLibrary
{
    /**
     * @var \Dhii\Container\DelegatingContainer
     */
    private $container;
    /**
     * @var \Dhii\Container\CompositeCachingServiceProvider
     */
    private $provider;
    /**
     * @var QueueModule
     */
    private $module;
    /**
     * QueueLibrary constructor.
     *
     * @param array $factories
     * @param array $extensions
     *
     * @throws \Dhii\Modular\Module\Exception\ModuleExceptionInterface
     */
    public function __construct(array $factories = [], array $extensions = [])
    {
    }
    /**
     * @throws \Dhii\Modular\Module\Exception\ModuleExceptionInterface
     */
    public function initialize()
    {
    }
    public function container(): \Psr\Container\ContainerInterface
    {
    }
}
class QueueModule implements \Dhii\Modular\Module\ModuleInterface
{
    /**
     * @inheritDoc
     */
    public function setup(): \Interop\Container\ServiceProviderInterface
    {
    }
    /**
     * @inheritDoc
     *
     * phpcs:disable Inpsyde.CodeQuality.FunctionLength.TooLong
     */
    public function run(\Psr\Container\ContainerInterface $container): void
    {
    }
}
namespace Inpsyde\Queue\Rest\V1;

interface EndpointInterface
{
    /**
     * @return string
     */
    public function methods(): string;
    /**
     * @return string
     */
    public function version(): string;
    /**
     * @return string
     */
    public function route(): string;
    /**
     * @return bool
     */
    public function permissionCallback(): bool;
    /**
     * @return array
     */
    public function args(): array;
    /**
     * Handle Endpoint Request
     *
     * @param \WP_REST_Request $request
     *
     * @return \WP_REST_Response
     */
    public function handleRequest(\WP_REST_Request $request): \WP_REST_Response;
}
class ProcessEndpoint implements \Inpsyde\Queue\Rest\V1\EndpointInterface
{
    use \Inpsyde\Queue\ExceptionLoggingTrait;
    public const METHODS = \WP_REST_Server::READABLE;
    public const VERSION = 'v1';
    public const ROUTE = '/process';
    public const DEFAULT_EXECUTION_TIME = 10;
    /**
     * @var \Inpsyde\Queue\Processor\ProcessorBuilder
     */
    private $builder;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;
    /**
     * @var callable
     */
    private $metaCallback;
    /**
     * @var \Inpsyde\Queue\Queue\Locker
     */
    private $locker;
    /**
     * @var \Inpsyde\Queue\Queue\Job\JobRepository
     */
    private $repository;
    /**
     * @var bool
     */
    private $isMultisite;
    /**
     * @var int
     */
    private $maxRetriesCount;
    public function __construct(\Inpsyde\Queue\Processor\ProcessorBuilder $processorBuilder, \Inpsyde\Queue\Queue\Job\JobRepository $repository, \Inpsyde\Queue\Queue\Locker $locker, \Psr\Log\LoggerInterface $logger, callable $metaCallback, bool $isMultisite, int $maxRetriesCount)
    {
    }
    /** @inheritDoc */
    public function methods(): string
    {
    }
    /** @inheritDoc */
    public function version(): string
    {
    }
    /** @inheritDoc */
    public function route(): string
    {
    }
    /** @inheritDoc */
    public function permissionCallback(): bool
    {
    }
    /** @inheritDoc */
    public function args(): array
    {
    }
    /**
     * @param \WP_REST_Request $request
     *
     * @return \WP_REST_Response
     */
    public function handleRequest(\WP_REST_Request $request): \WP_REST_Response
    {
    }
    /**
     * @param \Psr\Log\LoggerInterface $logger
     *
     * @return array
     */
    private function getLogs(\Psr\Log\LoggerInterface $logger): array
    {
    }
}
namespace Inpsyde\StateMachine\Event;

/**
 * This can be removed and replaced by fig/event-dispatcher-util's
 * implementation once the switch to PHP7.2 allows using PSR-14
 */
class AggregateProvider implements \Dhii\Events\Listener\ListenerProviderInterface
{
    /**
     * @var array
     */
    protected $providers = [];
    /**
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     * phpcs:disable Inpsyde.CodeQuality.NoAccessors.NoGetter
     * @param object $event
     *
     * @return \Traversable
     */
    public function getListenersForEvent($event): \Traversable
    {
    }
    /**
     * Enqueues a listener provider to this set.
     *
     * @param \Dhii\Events\Listener\ListenerProviderInterface $provider
     *   The provider to add.
     *
     * @return AggregateProvider
     *   The called object.
     */
    public function addProvider(\Dhii\Events\Listener\ListenerProviderInterface $provider): self
    {
    }
}
class EventDispatcher implements \Dhii\Events\Dispatcher\EventDispatcherInterface
{
    /**
     * @var \Dhii\Events\Listener\ListenerProviderInterface[]
     */
    private $listenerProviders;
    public function __construct(\Dhii\Events\Listener\ListenerProviderInterface ...$listenerProviders)
    {
    }
    /**
     * @param object $event
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
     *
     * @return object
     */
    public function dispatch($event)
    {
    }
}
interface Transitioning
{
    public function fromState(): string;
    public function transition(): \Inpsyde\StateMachine\Transition\TransitionInterface;
}
interface PostTransition extends \Inpsyde\StateMachine\Event\Transitioning
{
}
trait TransitionEventTrait
{
    /**
     * @var string
     */
    private $fromState;
    /**
     * @var \Inpsyde\StateMachine\Transition\TransitionInterface
     */
    private $transition;
    public function __construct(string $fromState, \Inpsyde\StateMachine\Transition\TransitionInterface $transition)
    {
    }
    public function fromState(): string
    {
    }
    public function transition(): \Inpsyde\StateMachine\Transition\TransitionInterface
    {
    }
}
class GenericPostTransition implements \Inpsyde\StateMachine\Event\PostTransition
{
    use \Inpsyde\StateMachine\Event\TransitionEventTrait;
}
interface PreTransition extends \Inpsyde\StateMachine\Event\Transitioning
{
}
class GenericPreTransition implements \Inpsyde\StateMachine\Event\PreTransition
{
    use \Inpsyde\StateMachine\Event\TransitionEventTrait;
}
interface StateChange extends \Dhii\Events\Event\IsPropagationStoppedCapableInterface
{
    public function prepare(\Inpsyde\StateMachine\StateMachineInterface $stateMachine);
    public function currentState(): string;
    public function transitionTo(string $state): bool;
    public function targetState(): string;
}
class GenericStateChange implements \Inpsyde\StateMachine\Event\StateChange
{
    /**
     * @var string
     */
    protected $sourceState;
    /**
     * @var string
     */
    protected $newState;
    public function isPropagationStopped(): bool
    {
    }
    public function transitionTo(string $state): bool
    {
    }
    public function targetState(): string
    {
    }
    public function currentState(): string
    {
    }
    public function prepare(\Inpsyde\StateMachine\StateMachineInterface $machine)
    {
    }
}
class GenericTransitionEvent
{
    const PRE_TRANSITION = 'pre-transition';
    const POST_TRANSITION = 'post-transition';
    /**
     * @var \Inpsyde\StateMachine\Transition\TransitionInterface
     */
    protected $transition;
    /**
     * @var \Inpsyde\StateMachine\State\StateInterface
     */
    protected $fromState;
    /**
     * @var \Inpsyde\StateMachine\StateMachineInterface
     */
    protected $stateMachine;
    /**
     * @var \Inpsyde\StateMachine\State\StateInterface
     */
    private $toState;
    public function __construct(\Inpsyde\StateMachine\Transition\TransitionInterface $transition, \Inpsyde\StateMachine\State\StateInterface $fromState, \Inpsyde\StateMachine\State\StateInterface $toState, \Inpsyde\StateMachine\StateMachineInterface $stateMachine)
    {
    }
    /**
     * @return \Inpsyde\StateMachine\Transition\TransitionInterface
     */
    public function transition(): \Inpsyde\StateMachine\Transition\TransitionInterface
    {
    }
    /**
     * @return \Inpsyde\StateMachine\State\StateInterface
     */
    public function fromState(): \Inpsyde\StateMachine\State\StateInterface
    {
    }
    /**
     * @return \Inpsyde\StateMachine\StateMachineInterface
     */
    public function stateMachine(): \Inpsyde\StateMachine\StateMachineInterface
    {
    }
    /**
     * @return \Inpsyde\StateMachine\State\StateInterface
     */
    public function toState(): \Inpsyde\StateMachine\State\StateInterface
    {
    }
}
/**
 * Utility trait to derive the type of event an event listener is for.
 */
trait ParameterDeriverTrait
{
    /**
     * Derives the class type of the first argument of a callable.
     *
     * @param callable $callable
     *   The callable for which we want the parameter type.
     * @return string
     *   The class the parameter is type hinted on.
     *
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     */
    protected function getParameterType($callable): string
    {
    }
    /**
     * Determines if a callable represents a function.
     *
     * Or at least a reasonable approximation, since a function name may not be defined yet.
     *
     * @param callable $callable
     * @return True if the callable represents a function, false otherwise.
     */
    protected function isFunctionCallable(callable $callable): bool
    {
    }
    /**
     * Determines if a callable represents a closure/anonymous function.
     *
     * @param callable $callable
     * @return True if the callable represents a closure object, false otherwise.
     */
    protected function isClosureCallable(callable $callable): bool
    {
    }
    /**
     * Determines if a callable represents a method on an object.
     *
     * @param callable $callable
     * @return True if the callable represents a method object, false otherwise.
     */
    protected function isObjectCallable(callable $callable): bool
    {
    }
    /**
     * Determines if a callable represents a static class method.
     *
     * The parameter here is untyped so that this method may be called with an
     * array that represents a class name and a non-static method.  The routine
     * to determine the parameter type is identical to a static method, but such
     * an array is still not technically callable.  Omitting the parameter type here
     * allows us to use this method to handle both cases.
     *
     * Note that this method must therefore be the first in the switch statement
     * above, or else subsequent calls will break as the array is not going to satisfy
     * the callable type hint but it would pass `is_callable()`.  Because PHP.
     *
     * @param callable $callable
     * @return True if the callable represents a static method, false otherwise.
     *
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     */
    protected function isClassCallable($callable): bool
    {
    }
    /**
     * Determines if a callable is a class that has __invoke() method
     *
     * @param callable $callable
     * @return True if the callable represents an invokable object, false otherwise.
     */
    private function isInvokable(callable $callable): bool
    {
    }
}
class ListenerProvider implements \Dhii\Events\Listener\ListenerProviderInterface
{
    use \Inpsyde\StateMachine\Event\ParameterDeriverTrait;
    private $listeners;
    public function __construct(callable ...$listeners)
    {
    }
    public function addListener(callable $listener)
    {
    }
    /**
     * @param object $event
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     * phpcs:disable Inpsyde.CodeQuality.NoAccessors.NoGetter
     *
     * @return \Traversable
     */
    public function getListenersForEvent($event): \Traversable
    {
    }
}
class StateAwareListenerProvider implements \Dhii\Events\Listener\ListenerProviderInterface
{
    /**
     * @var ListenerProvider[]
     */
    private $listeners = [];
    public function listen(string $state, callable $listener)
    {
    }
    /**
     * @param object $event
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     * phpcs:disable Inpsyde.CodeQuality.NoAccessors.NoGetter
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.InvalidGeneratorManyReturns
     * @return \Traversable
     */
    public function getListenersForEvent($event): \Traversable
    {
    }
}
class TransitionAwareListenerProvider implements \Dhii\Events\Listener\ListenerProviderInterface
{
    /**
     * @var ListenerProvider[]
     */
    private $listeners = [];
    /**
     * @param string $state
     * @param $listener
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     */
    public function listen(string $state, $listener)
    {
    }
    /**
     * @param object $event
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     * phpcs:disable Inpsyde.CodeQuality.NoAccessors.NoGetter
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.InvalidGeneratorManyReturns
     * @return \Traversable
     */
    public function getListenersForEvent($event): \Traversable
    {
    }
}
class WebRequest extends \Inpsyde\StateMachine\Event\GenericStateChange
{
    /**
     * @var array
     */
    private $data;
    public function __construct(array $data)
    {
    }
    public static function fromGlobals(): self
    {
    }
    public function data(): array
    {
    }
}
namespace Inpsyde\StateMachine\Exceptions;

class DenyTransitionException extends \Exception
{
}
namespace Inpsyde\StateMachine\Guard;

interface GuardInterface
{
    /**
     * @param string $transition
     *
     * @param string $fromState
     *
     * @return bool
     */
    public function handles(string $transition, string $fromState): bool;
    public function passes(string $transition, string $fromState): bool;
}
class ContainerAwareGuard implements \Inpsyde\StateMachine\Guard\GuardInterface
{
    /**
     * @var string
     */
    private $namespace;
    /**
     * @var \Psr\Container\ContainerInterface
     */
    private $container;
    public function __construct(string $namespace, \Psr\Container\ContainerInterface $container)
    {
    }
    /**
     * @inheritDoc
     */
    public function handles(string $transition, string $fromState): bool
    {
    }
    public function passes(string $transition, string $fromState): bool
    {
    }
    private function key(string $transition, string $fromState): string
    {
    }
}
class Guard implements \Inpsyde\StateMachine\Guard\GuardInterface
{
    /**
     * @var string
     */
    private $transitionName;
    /**
     * @var callable
     */
    private $callables;
    /**
     * @var string
     */
    private $fromState;
    public function __construct(string $transitionName, ?string $fromState = null, callable ...$callables)
    {
    }
    /**
     * @inheritDoc
     */
    public function handles(string $transition, string $fromState): bool
    {
    }
    public function passes(string $transition, string $fromState): bool
    {
    }
}
namespace Inpsyde\StateMachine\Initializer;

interface InitializerInterface
{
    public function initialize(\Inpsyde\StateMachine\StateMachineInterface $stateMachine, \Inpsyde\StateMachine\State\StateInterface ...$states): \Inpsyde\StateMachine\State\StateInterface;
}
/**
 * Class ContainerInitializer
 *
 * Queries a Container for the current state.
 * Falls back to its child initializer on failure
 *
 * @package Inpsyde\StateMachine\Initializer
 */
class ContainerInitializer implements \Inpsyde\StateMachine\Initializer\InitializerInterface
{
    /**
     * @var string
     */
    private $namespace;
    /**
     * @var \Psr\Container\ContainerInterface
     */
    private $container;
    /**
     * @var InitializerInterface
     */
    private $childInitializer;
    public function __construct(string $namespace, \Psr\Container\ContainerInterface $container, \Inpsyde\StateMachine\Initializer\InitializerInterface $childInitializer)
    {
    }
    public function initialize(\Inpsyde\StateMachine\StateMachineInterface $stateMachine, \Inpsyde\StateMachine\State\StateInterface ...$states): \Inpsyde\StateMachine\State\StateInterface
    {
    }
}
/**
 * Class StateQueryInitializer
 * Initializes a state machine based on the information provided the the State objects themselves
 *
 * @package Inpsyde\StateMachine\Initializer
 */
class StateQueryInitializer implements \Inpsyde\StateMachine\Initializer\InitializerInterface
{
    public function initialize(\Inpsyde\StateMachine\StateMachineInterface $stateMachine, \Inpsyde\StateMachine\State\StateInterface ...$states): \Inpsyde\StateMachine\State\StateInterface
    {
    }
}
namespace Inpsyde\StateMachine\Loader;

interface LoaderInterface
{
    public function load(\Inpsyde\StateMachine\StateMachineInterface $stateMachine): \Inpsyde\StateMachine\StateMachineInterface;
}
class ContainerLoader implements \Inpsyde\StateMachine\Loader\LoaderInterface
{
    /**
     * @var string
     */
    private $namespace;
    /**
     * @var \Psr\Container\ContainerInterface
     */
    private $container;
    /**
     * @var \Inpsyde\StateMachine\Initializer\InitializerInterface
     */
    private $initializer;
    public function __construct(string $namespace, \Inpsyde\StateMachine\Initializer\InitializerInterface $initializer, \Psr\Container\ContainerInterface $container)
    {
    }
    public function load(\Inpsyde\StateMachine\StateMachineInterface $stateMachine): \Inpsyde\StateMachine\StateMachineInterface
    {
    }
    private function loadStates(\Inpsyde\StateMachine\StateMachineInterface $stateMachine)
    {
    }
    private function loadTransitions(\Inpsyde\StateMachine\StateMachineInterface $stateMachine)
    {
    }
    private function loadGuards(\Inpsyde\StateMachine\StateMachineInterface $stateMachine)
    {
    }
}
namespace Inpsyde\StateMachine\State;

interface StateInterface
{
    const TYPE_INITIAL = 'State.Type.Initial';
    const TYPE_NORMAL = 'State.Type.Normal';
    const TYPE_FINAL = 'State.Type.Final';
    /**
     * @return string
     */
    public function name(): string;
    /**
     * @return boolean
     */
    public function isInitial(): bool;
    /**
     * @return boolean
     */
    public function isFinal(): bool;
    /**
     * Return the available transitions
     *
     * @return \Inpsyde\StateMachine\Transition\TransitionInterface[]
     */
    public function transitions(): array;
    public function addTransition(\Inpsyde\StateMachine\Transition\TransitionInterface $transition): bool;
    /**
     * @param \Inpsyde\StateMachine\Transition\TransitionInterface|string $transition
     *
     * @return boolean
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration
     */
    public function can($transition): bool;
}
class State implements \Inpsyde\StateMachine\State\StateInterface
{
    protected $name;
    protected $type;
    /**
     * @var \Inpsyde\StateMachine\Transition\TransitionInterface[]
     */
    protected $transitions;
    public function __construct(string $name, string $type = self::TYPE_NORMAL, array $transitions = [])
    {
    }
    /**
     * @return string
     */
    public function name(): string
    {
    }
    /**
     * @return boolean
     */
    public function isInitial(): bool
    {
    }
    /**
     * @return boolean
     */
    public function isFinal(): bool
    {
    }
    /**
     * Return the available transitions
     *
     * @return array
     */
    public function transitions(): array
    {
    }
    /**
     * @param \Inpsyde\StateMachine\Transition\TransitionInterface $transition
     *
     * @return bool
     */
    public function addTransition(\Inpsyde\StateMachine\Transition\TransitionInterface $transition): bool
    {
    }
    /**
     * @param \Inpsyde\StateMachine\Transition\TransitionInterface $transition
     *
     * @return boolean
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration
     */
    public function can($transition): bool
    {
    }
}
namespace Inpsyde\StateMachine;

interface StateMachineInterface
{
    /**
     * @param string $initialStateName
     */
    public function initialize(string $initialStateName);
    /**
     * @param $event
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     *
     * @return mixed
     */
    public function handle($event);
    /**
     * @param \Inpsyde\StateMachine\Transition\TransitionInterface $transition
     *
     * @return mixed
     */
    public function addTransition(\Inpsyde\StateMachine\Transition\TransitionInterface $transition): \Inpsyde\StateMachine\StateMachineInterface;
    public function addState(\Inpsyde\StateMachine\State\StateInterface $state): \Inpsyde\StateMachine\StateMachineInterface;
    public function addGuard(\Inpsyde\StateMachine\Guard\GuardInterface $state): \Inpsyde\StateMachine\StateMachineInterface;
    /**
     * @param $transition
     *
     * @return StateMachineInterface
     * @throws \Inpsyde\StateMachine\Exceptions\DenyTransitionException
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration
     */
    public function apply($transition): \Inpsyde\StateMachine\StateMachineInterface;
    /**
     * @param string|\Inpsyde\StateMachine\Transition\TransitionInterface $transition
     *
     * @return boolean
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration
     */
    public function can($transition): bool;
    public function currentState(): \Inpsyde\StateMachine\State\StateInterface;
    /**
     * @return \Inpsyde\StateMachine\Transition\TransitionInterface[]
     */
    public function availableTransitions(): array;
    public function initialState(): ?\Inpsyde\StateMachine\State\StateInterface;
}
class StateMachine implements \Inpsyde\StateMachine\StateMachineInterface
{
    /**
     * trigger when change state
     *
     * @var callable|null
     */
    protected $stateHandler;
    /**
     * @var \Dhii\Events\Dispatcher\EventDispatcherInterface
     */
    protected $dispatcher;
    /**
     * @var \Inpsyde\StateMachine\State\StateInterface
     */
    protected $currentState;
    /**
     * @var array
     */
    protected $states = [];
    /**
     * @var array
     */
    protected $transitions = [];
    /**
     * @var \Inpsyde\StateMachine\Guard\GuardInterface[]
     */
    private $guards = [];
    /**
     * @var \Dhii\Events\Dispatcher\EventDispatcherInterface
     */
    private $eventDispatcher;
    public function __construct(\Dhii\Events\Dispatcher\EventDispatcherInterface $eventDispatcher, ?callable $updateStateHandler = null)
    {
    }
    /**
     * @param string $initialStateName
     */
    public function initialize(string $initialStateName)
    {
    }
    /**
     * @param \Inpsyde\StateMachine\Transition\TransitionInterface $transition
     *
     * @return mixed
     */
    public function addTransition(\Inpsyde\StateMachine\Transition\TransitionInterface $transition): \Inpsyde\StateMachine\StateMachineInterface
    {
    }
    /**
     * @param \Inpsyde\StateMachine\State\StateInterface $state
     *
     * @return mixed
     */
    public function addState(\Inpsyde\StateMachine\State\StateInterface $state): \Inpsyde\StateMachine\StateMachineInterface
    {
    }
    /**
     * @param string $transition
     *
     * @return mixed
     * @throws \Inpsyde\StateMachine\Exceptions\DenyTransitionException
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration
     */
    public function apply($transition): \Inpsyde\StateMachine\StateMachineInterface
    {
    }
    /**
     * @param string $transition
     *
     * @return \Inpsyde\StateMachine\Transition\TransitionInterface
     */
    private function transition(string $transition): \Inpsyde\StateMachine\Transition\TransitionInterface
    {
    }
    /**
     * @param string|\Inpsyde\StateMachine\Transition\TransitionInterface $transition
     *
     * @return boolean
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration
     */
    public function can($transition): bool
    {
    }
    /**
     * @return \Inpsyde\StateMachine\State\StateInterface
     */
    public function currentState(): \Inpsyde\StateMachine\State\StateInterface
    {
    }
    /**
     * @param $state
     *
     * @return StateMachineInterface
     */
    protected function setCurrentState($state): \Inpsyde\StateMachine\StateMachineInterface
    {
    }
    /**
     * @return \Inpsyde\StateMachine\Transition\TransitionInterface[]
     */
    public function availableTransitions(): array
    {
    }
    /**
     * @return array
     */
    public function transitions(): array
    {
    }
    /**
     * @param string|\Inpsyde\StateMachine\State\StateInterface $state
     *
     * @return boolean
     * @throws \UnexpectedValueException
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration
     */
    private function getState($state): \Inpsyde\StateMachine\State\StateInterface
    {
    }
    public function initialState(): ?\Inpsyde\StateMachine\State\StateInterface
    {
    }
    public function addGuard(\Inpsyde\StateMachine\Guard\GuardInterface $guard): \Inpsyde\StateMachine\StateMachineInterface
    {
    }
    public function handle($event)
    {
    }
}
/**
 * Class StateMachineLibrary
 * This is a helper class to make it easy to use the StateMachine as a standalone package
 * outside of the module framework. It integrates the customizations passed via constructor
 * and creates its internal container from it.
 *
 * @package Inpsyde\StateMachine
 */
class StateMachineLibrary
{
    /**
     * @var \Dhii\Container\DelegatingContainer
     */
    private $container;
    /**
     * @var \Dhii\Container\CompositeCachingServiceProvider
     */
    private $provider;
    /**
     * @var StateMachineModule
     */
    private $module;
    /**
     * StateMachineLibrary constructor.
     *
     * @param array $factories Overrides for dafault factories
     * @param array $extensions Extensions for default factories
     *
     * @throws \Dhii\Modular\Module\Exception\ModuleExceptionInterface
     */
    public function __construct(array $factories = [], array $extensions = [])
    {
    }
    /**
     * @throws \Dhii\Modular\Module\Exception\ModuleExceptionInterface
     */
    public function initialize()
    {
    }
    public function container(): \Psr\Container\ContainerInterface
    {
    }
}
class StateMachineModule implements \Dhii\Modular\Module\ModuleInterface
{
    /**
     * @inheritDoc
     */
    public function setup(): \Interop\Container\ServiceProviderInterface
    {
    }
    /**
     * @inheritDoc
     */
    public function run(\Psr\Container\ContainerInterface $container): void
    {
    }
}
namespace Inpsyde\StateMachine\Transition;

interface TransitionInterface
{
    /**
     * @return string
     */
    public function name(): string;
    /**
     * @return string[]
     */
    public function fromStates(): array;
    /**
     * Get State Name
     *
     * @return string
     */
    public function toState(): string;
    public function beforeTransitionEventName(): string;
    public function afterTransitionEventName(): string;
}
class Transition implements \Inpsyde\StateMachine\Transition\TransitionInterface
{
    /**
     * @var array
     */
    protected $from;
    /**
     * @var string
     */
    protected $to;
    /**
     * @var string
     */
    protected $name;
    /**
     * Transition constructor.
     *
     * @param string $name
     * @param array $from
     * @param string $to
     */
    public function __construct(string $name, array $from, string $to)
    {
    }
    /**
     * @return string
     */
    public function name(): string
    {
    }
    /**
     * @return array
     */
    public function fromStates(): array
    {
    }
    /**
     * Get State Name
     *
     * @return string
     */
    public function toState(): string
    {
    }
    public function beforeTransitionEventName(): string
    {
    }
    public function afterTransitionEventName(): string
    {
    }
}
namespace Inpsyde\WcEvents;

/**
 * Similar in intention to Toggle, but this class allows preventing dispatch on a per-event basis.
 * Has a method to add deciders from outside
 */
class DispatchDecider
{
    private $deciders;
    /**
     * DispatchDecider constructor.
     * TODO Discuss if there should be a discrete DeciderInterface instead of callable
     *
     * @param array<callable(\Inpsyde\WcEvents\Event\ProductChangeEvent):bool> ...$deciders
     */
    public function __construct(callable ...$deciders)
    {
    }
    /**
     * Calls all deciders and returns true if all deciders returned true
     *
     * @param \Inpsyde\WcEvents\Event\ProductChangeEvent $event
     *
     * @return bool
     */
    public function isEventDispatchable(\Inpsyde\WcEvents\Event\ProductChangeEvent $event): bool
    {
    }
    /**
     * Adds a new decider. Deciders are a callable that accepts a ProductChangeEvent
     * as its only parameter and returns boolean
     * @param callable(\Inpsyde\WcEvents\Event\ProductChangeEvent):bool $decider
     */
    public function addDecider(callable $decider)
    {
    }
}
namespace Inpsyde\WcEvents\Event;

/**
 * This looks like PSR-14, but currently isn't
 * TODO actually implement PSR-14 here
 */
class EventDispatcher
{
    /**
     * @var ProductEventListenerRegistry
     */
    private $listenerProvider;
    /**
     * @var \Inpsyde\WcEvents\Toggle
     */
    private $switch;
    /**
     * @var \Inpsyde\WcEvents\DispatchDecider
     */
    private $decider;
    /**
     * @var \Psr\Log\LoggerInterface|null
     */
    private $logger;
    /**
     * EventDispatcher constructor.
     *
     * @param ProductEventListenerRegistry $listenerProvider
     * @param \Inpsyde\WcEvents\Toggle $switch
     * @param \Inpsyde\WcEvents\DispatchDecider $decider
     * @param \Psr\Log\LoggerInterface|null $logger
     */
    public function __construct(\Inpsyde\WcEvents\Event\ProductEventListenerRegistry $listenerProvider, ?\Psr\Log\LoggerInterface $logger = null)
    {
    }
    /**
     * Retrieves listeners for the current event from the $listenerProvider
     * and calls them.
     *
     * @param ProductChangeEvent $event
     */
    public function dispatch(\Inpsyde\WcEvents\Event\ProductChangeEvent $event): void
    {
    }
}
interface ProductChangeEvent
{
    /**
     * An instance of the WC_Product before the change was applied
     *
     * @return \WC_Product
     */
    public function new(): \WC_Product;
    /**
     * An instance of the WC_Product after the change was applied
     *
     * @return \WC_Product
     */
    public function old(): \WC_Product;
}
/**
 * Represents a change event that is assembled by passing both states via constructor injection
 */
class GenericProductChangeEvent implements \Inpsyde\WcEvents\Event\ProductChangeEvent
{
    /**
     * @var \WC_Product
     */
    private $new;
    /**
     * @var \WC_Product
     */
    private $old;
    /**
     * GenericProductChangeEvent constructor.
     *
     * @param \WC_Product $new Product in its new state
     * @param \WC_Product $old Product in its old state
     */
    public function __construct(\WC_Product $new, \WC_Product $old)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function new(): \WC_Product
    {
    }
    /**
     * {@inheritDoc}
     */
    public function old(): \WC_Product
    {
    }
}
/**
 * This is pretty much a PSR-14 ListenerProvider with some advanced event registration methods.
 * It does not implement PSR-14 currently since we're tied to php7.2
 */
class ProductEventListenerRegistry
{
    /**
     * Used internally to mark a product as deleted.
     */
    public const DELETE_FLAG = '__mark_deleted';
    /**
     * @var array<callable(\WC_Product,\WC_Product):void> The full list of listeners
     */
    private $listeners = [];
    /**
     * @var \Inpsyde\WcEvents\ParameterDeriver
     */
    private $parameterDeriver;
    /**
     * ProductEventListenerRegistry constructor.
     *
     * @param \Inpsyde\WcEvents\ParameterDeriver $parameterDeriver
     */
    public function __construct(\Inpsyde\WcEvents\ParameterDeriver $parameterDeriver)
    {
    }
    /**
     * Inspects the event and returns appropriate listeners.
     *
     * @param ProductChangeEvent $event
     * phpcs:disable Inpsyde.CodeQuality.NoAccessors.NoGetter
     *
     * @return array
     */
    public function getListenersForEvent(\Inpsyde\WcEvents\Event\ProductChangeEvent $event): array
    {
    }
    /**
     * Registers a list of listeners that fire whenever any change happens to a product.
     *
     * @param array<callable(\WC_Product,\WC_Product):void> ...$callables
     */
    public function onChange(callable ...$callables): void
    {
    }
    /**
     * Inspects the change event and fires listeners only if the specified property has changed
     *
     * @param string $property
     * @param array<callable(\WC_Product,\WC_Product):void>  ...$callables
     */
    public function onPropertyChange(string $property, callable ...$callables): void
    {
    }
    /**
     * Inspects the change event and fires listeners only if a product has been
     * transitioned to the specified status.
     *
     * @param string $status
     * @param array<callable(\WC_Product,\WC_Product):void>  ...$callables
     */
    public function onStatusChange(string $status, callable ...$callables): void
    {
    }
    /**
     * Sugar for onStatusChange
     *
     * @param array<callable(\WC_Product,\WC_Product):void> ...$callables
     *
     * @see ProductEventListenerRegistry::onStatusChange()
     */
    public function onPublish(callable ...$callables): void
    {
    }
    /**
     * Sugar for onStatusChange
     *
     * @param array<callable(\WC_Product,\WC_Product):void> ...$callables
     *
     * @see ProductEventListenerRegistry::onStatusChange()
     */
    public function onTrash(callable ...$callables): void
    {
    }
    /**
     * Sugar for onStatusChange
     *
     * @param array<callable(\WC_Product,\WC_Product):void> ...$callables
     *
     * @see ProductEventListenerRegistry::onStatusChange()
     */
    public function onDraft(callable ...$callables): void
    {
    }
    /**
     * Sugar for onStatusChange
     *
     * @param array<callable(\WC_Product,\WC_Product):void> ...$callables
     *
     * @see ProductEventListenerRegistry::onStatusChange()
     */
    public function onPending(callable ...$callables): void
    {
    }
    /**
     * Sugar for onStatusChange
     *
     * @param array<callable(\WC_Product,\WC_Product):void> ...$callables
     *
     * @see ProductEventListenerRegistry::onStatusChange()
     */
    public function onPrivate(callable ...$callables): void
    {
    }
    /**
     * Inspects the change event and fires listeners only if
     * catalog_visibility changed to the specified value.
     *
     * @param string $visibility
     * @param array<callable(\WC_Product,\WC_Product):void>  ...$callables
     */
    public function onCatalogVisibilityChange(string $visibility, callable ...$callables): void
    {
    }
    /**
     * Sugar for onCatalogVisibilityChange
     *
     * @param array<callable(\WC_Product,\WC_Product):void> ...$callables
     *
     * @see ProductEventListenerRegistry::onStatusChange()
     */
    public function onHide(callable ...$callables): void
    {
    }
    /**
     * Sugar for onCatalogVisibilityChange
     *
     * @param array<callable(\WC_Product,\WC_Product):void> ...$callables
     *
     * @see ProductEventListenerRegistry::onStatusChange()
     */
    public function onBecomeVisible(callable ...$callables): void
    {
    }
    /**
     * Sugar for onCatalogVisibilityChange
     *
     * @param array<callable(\WC_Product,\WC_Product):void> ...$callables
     *
     * @see ProductEventListenerRegistry::onStatusChange()
     */
    public function onBecomeSearchOnly(callable ...$callables): void
    {
    }
    /**
     * Sugar for onCatalogVisibilityChange
     *
     * @param array<callable(\WC_Product,\WC_Product):void> ...$callables
     *
     * @see ProductEventListenerRegistry::onStatusChange()
     */
    public function onBecomeCatalogOnly(callable ...$callables): void
    {
    }
    /**
     * @param array<callable(\WC_Product,\WC_Product):void>  ...$callables
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    public function onDelete(callable ...$callables): void
    {
    }
    /**
     * Inspects the change event and fires listeners only if a product has been
     * turned into a different type of product.
     *
     * @param array<callable(\WC_Product,\WC_Product):void> ...$callables
     */
    public function onTypeChange(callable ...$callables): void
    {
    }
    /**
     * Wrap the given callback in a callable that inspects the callback and only
     * executes it if its parameters match the wrapper function's parameter types
     *
     * This will
     *
     * @param callable(\WC_Product,\WC_Product):void $callable
     *
     * @return callable(\WC_Product,\WC_Product):void
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    private function createTypeMatchingGuard(callable $callable): callable
    {
    }
    /**
     * Fires the $listener only if the specified property has changed.
     *
     * @param string $property
     * @param callable(\WC_Product,\WC_Product):void $callable
     *
     * @return callable(\WC_Product,\WC_Product):void
     */
    private function createPropertyGuard(string $property, callable $callable): callable
    {
    }
    /**
     * Fires the $listener only if the WC_Product has transitioned to the specified status.
     *
     * @param string $status
     * @param callable(\WC_Product,\WC_Product):void $callable
     *
     * @return callable(WC_Product,WC_Product)
     */
    private function createStatusGuard(string $status, callable $callable): callable
    {
    }
    /**
     * Fires the $listener only if catalog_visibility changed to the specified value.
     * Similar to createStatusGuard
     *
     * @param string $visibility
     * @param callable(\WC_Product,\WC_Product):void $callable
     *
     * @return callable(WC_Product,WC_Product)
     */
    private function createCatalogVisibilityGuard(string $visibility, callable $callable): callable
    {
    }
    /**
     * Inspects the callback signature to determine if the callback can safely be called with the
     * WC_Product instances passed
     *
     * @param \WC_Product $new
     * @param \WC_Product $old
     * @param callable $listener The callback to inspect.
     *
     * @return bool
     */
    private function shouldReturnListener(\WC_Product $new, \WC_Product $old, callable $listener): bool
    {
    }
}
namespace Inpsyde\WcEvents\Hooks;

/**
 * Hooks into WP&WC to detect any product changes.
 * Fires a ProductChangeEvent whenever a change was detected
 */
class ProductHooks
{
    /**
     * @var \WC_Product[]
     */
    private $snapshots = [];
    /**
     * @var \Inpsyde\WcEvents\Event\EventDispatcher
     */
    private $dispatcher;
    /**
     * @var \Inpsyde\WcEvents\Toggle
     */
    private $toggle;
    /**
     * @var \Inpsyde\WcEvents\DispatchDecider
     */
    private $decider;
    /**
     * ProductHooks constructor.
     *
     * @param \Inpsyde\WcEvents\Event\EventDispatcher $dispatcher
     */
    public function __construct(\Inpsyde\WcEvents\Event\EventDispatcher $dispatcher, \Inpsyde\WcEvents\Toggle $toggle, \Inpsyde\WcEvents\DispatchDecider $decider)
    {
    }
    /**
     * Registers our magic beforeSave() voodoo-callback into a range of hooks that
     * might fire before a product update.
     */
    public function register(): void
    {
    }
    /**
     * The callback that runs before a product is changed. Runs once for each product.
     * Creates the afterSave listener for this product and registers it to the appropriate hooks.
     * Recurses into the parent product if one is found.
     * Lastly, it circumvents lazy-loading of some attributes via preWarmCaches()
     *
     * @wp-hook pre_post_update
     * @wp-hook woocommerce_before_product_object_save
     * @wp-hook woocommerce_before_delete_product_variation
     *
     * @param \WC_Product $old
     */
    public function beforeSave(\WC_Product $old): void
    {
    }
    /**
     * Creates individual listeners for a range of hooks that may or may not
     * fire after a product has been saved. Only one of them will be allowed to execute
     * and listeners will be cleaned up after execution.
     *
     * @param \WC_Product $old
     *
     * @return callable
     */
    private function createAfterSaveHook(\WC_Product $old): callable
    {
    }
    /**
     * Returns a list of all relevant hooks that could trigger an "afterSave" event
     *
     * @return array
     */
    private function afterSaveHookNames(): array
    {
    }
    /**
     * Registers the given callback to a range of hooks that might run AFTER a product has been saved
     *
     * @param callable $callable
     */
    private function registerAfterHooks(callable $callable)
    {
    }
    /**
     * Create a clone instance of the old product and delete its $changes
     * array so we are guaranteed to receive the values before saving
     *
     * @param \WC_Product $product
     *
     * @return \WC_Product
     */
    private function prepareOldProduct(\WC_Product $product): \WC_Product
    {
    }
    /**
     * @wp-hook wp_insert_post
     * @wp-hook woocommerce_after_product_object_save
     *
     * @param \WC_Product $new
     * @param \WC_Product $old
     */
    public function afterSave(\WC_Product $new, \WC_Product $old): void
    {
    }
    /**
     * Returns a function that will ensure its inner $callable is called with a
     * WC_Product instance as its first parameter
     *
     * @param callable(\WC_Product):void $callable
     *
     * @param int $argPosition
     * The position of the WC_Product instance|id in the 'outer' callback signature
     *
     * @return callable:void
     */
    private function createWcProductGuard(callable $callable, int $argPosition = 0): callable
    {
    }
    /**
     * Triggers a few caches so we are guaranteed
     * to receive the 'old' data later on later calls
     */
    private function preWarmCaches(\WC_Product $product): void
    {
    }
}
namespace Inpsyde\WcEvents;

class ParameterDeriver
{
    /**
     * Derives the class type of the first argument of a callable.
     *
     * @param callable $callable
     *   The callable for which we want the parameter type.
     *
     * @param int $param
     *
     * @return string
     *   The class the parameter is type hinted on.
     *
     * We can't type hint $callable as it could be an array, and arrays are not callable.
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    public function parameterType($callable, int $param): string
    {
    }
    /**
     * Determines if a callable represents a function.
     *
     * Or at least a reasonable approximation, since a function name may not be defined yet.
     *
     * @param callable $callable
     *
     * @return True if the callable represents a function, false otherwise.
     */
    protected function isFunctionCallable(callable $callable): bool
    {
    }
    /**
     * Determines if a callable represents a closure/anonymous function.
     *
     * @param callable $callable
     *
     * @return True if the callable represents a closure object, false otherwise.
     */
    protected function isClosureCallable(callable $callable): bool
    {
    }
    /**
     * Determines if a callable represents a method on an object.
     *
     * @param callable $callable
     *
     * @return True if the callable represents a method object, false otherwise.
     */
    protected function isObjectCallable(callable $callable): bool
    {
    }
    /**
     * Determines if a callable represents a static class method.
     *
     * The parameter here is untyped so that this method may be called with an
     * array that represents a class name and a non-static method.  The routine
     * to determine the parameter type is identical to a static method, but such
     * an array is still not technically callable.  Omitting the parameter type here
     * allows us to use this method to handle both cases.
     *
     * Note that this method must therefore be the first in the switch statement
     * above, or else subsequent calls will break as the array is not going to satisfy
     * the callable type hint but it would pass `is_callable()`.  Because PHP.
     *
     * @param callable $callable
     *
     * @return True if the callable represents a static method, false otherwise.
     */
    protected function isClassCallable($callable): bool
    {
    }
    /**
     * Determines if a callable is a class that has __invoke() method
     *
     * @param callable $callable
     *
     * @return True if the callable represents an invokable object, false otherwise.
     */
    private function isInvokable(callable $callable): bool
    {
    }
}
/**
 * This class can be used to prevent dispatching events.
 * Use it if you need to silently update products, for example when processing webhooks
 * in a setup where you sync products to a remote service on every change
 */
class Toggle
{
    private $state = true;
    /**
     * Enables dispatching of event. This is the default state
     */
    public function enable(): void
    {
    }
    /**
     * Returns true if events should be dispatched
     *
     * @return bool
     */
    public function isEnabled(): bool
    {
    }
    /**
     * Prevents events from being dispatched
     */
    public function disable(): void
    {
    }
}
/**
 * Enables standalone usage of the WcEventsModule as a library
 */
class WcEventsLibrary
{
    /**
     * @var \Dhii\Container\DelegatingContainer
     */
    private $container;
    /**
     * @var \Dhii\Container\CompositeCachingServiceProvider
     */
    private $provider;
    /**
     * @var WcEventsModule
     */
    private $module;
    /**
     * QueueLibrary constructor.
     *
     * @param array $factories
     * @param array $extensions
     *
     * @throws \Dhii\Modular\Module\Exception\ModuleExceptionInterface
     */
    public function __construct(array $factories = [], array $extensions = [])
    {
    }
    /**
     * @throws \Dhii\Modular\Module\Exception\ModuleExceptionInterface
     */
    public function initialize()
    {
    }
    public function container(): \Psr\Container\ContainerInterface
    {
    }
}
/**
 * Contains service definitions and bootstrapping logic of this module
 */
class WcEventsModule implements \Dhii\Modular\Module\ModuleInterface
{
    /**
     * @inheritDoc
     */
    public function setup(): \Interop\Container\ServiceProviderInterface
    {
    }
    /**
     * @inheritDoc
     */
    public function run(\Psr\Container\ContainerInterface $container): void
    {
    }
}
namespace Inpsyde\WcStatusReport;

/**
 * The interface representing report item data (a row in the WC status table)
 */
interface ReportItemInterface
{
    /**
     * The label displayed in the table.
     * @return string
     */
    public function getLabel(): string;
    /**
     * The label in the generated report.
     * @return string
     */
    public function getExportedLabel(): string;
    /**
     * @return mixed
     */
    public function getValue();
}
class ReportItem implements \Inpsyde\WcStatusReport\ReportItemInterface
{
    /**
     * @var string
     */
    protected $label;
    /**
     * @var string
     */
    protected $exportedLabel;
    /**
     * @var mixed
     */
    protected $value;
    public function __construct(string $label, string $exportedLabel, $value)
    {
    }
    /**
     * @inheritDoc
     */
    public function getLabel(): string
    {
    }
    /**
     * @inheritDoc
     */
    public function getExportedLabel(): string
    {
    }
    /**
     * @inheritDoc
     */
    public function getValue()
    {
    }
}
/**
 * The interface for creating report items.
 * @see ReportItemInterface
 */
interface ReportItemFactoryInterface
{
    public function createReportItem(string $label, string $exportedLabel, $value): \Inpsyde\WcStatusReport\ReportItemInterface;
}
class ReportItemFactory implements \Inpsyde\WcStatusReport\ReportItemFactoryInterface
{
    /**
     * @inheritDoc
     */
    public function createReportItem(string $label, string $exportedLabel, $value): \Inpsyde\WcStatusReport\ReportItemInterface
    {
    }
}
/**
 * The interface representing WC status report: the title (usually a plugin name) and the table items.
 */
interface StatusReportInterface
{
    public function getTitle(): string;
    /**
     * @return iterable<ReportItemInterface>
     */
    public function getItems(): iterable;
}
class StatusReport implements \Inpsyde\WcStatusReport\StatusReportInterface
{
    /**
     * @var string
     */
    protected $title;
    /**
     * @var iterable<ReportItem>
     */
    protected $items;
    /**
     * @param iterable<ReportItem> $items
     */
    public function __construct(string $title, iterable $items)
    {
    }
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
    }
    /**
     * @inheritDoc
     */
    public function getItems(): iterable
    {
    }
}
/**
 * The interface for rendering WC status table (for WC --> Status page).
 */
interface StatusReportRendererInterface
{
    /**
     * Renders the WC status table for the given data.
     */
    public function render(\Inpsyde\WcStatusReport\StatusReportInterface $report): string;
}
class StatusReportRenderer implements \Inpsyde\WcStatusReport\StatusReportRendererInterface
{
    /**
     * @inheritDoc
     */
    public function render(\Inpsyde\WcStatusReport\StatusReportInterface $report): string
    {
    }
}
class WcStatusReportModule implements \Dhii\Modular\Module\ModuleInterface
{
    /**
     * @inheritDoc
     */
    public function setup(): \Interop\Container\ServiceProviderInterface
    {
    }
    /**
     * @inheritDoc
     */
    public function run(\Psr\Container\ContainerInterface $container): void
    {
    }
}
namespace Inpsyde\Zettle\Assets;

class AssetsModule implements \Dhii\Modular\Module\ModuleInterface
{
    /**
     * @inheritDoc
     */
    public function setup(): \Interop\Container\ServiceProviderInterface
    {
    }
    /**
     * @inheritDoc
     */
    public function run(\Psr\Container\ContainerInterface $container): void
    {
    }
}
namespace Inpsyde\Zettle\Auth;

class AuthModule implements \Dhii\Modular\Module\ModuleInterface
{
    /**
     * @inheritDoc
     */
    public function setup(): \Interop\Container\ServiceProviderInterface
    {
    }
    /**
     * @inheritDoc
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     * phpcs:disable Inpsyde.CodeQuality.FunctionLength.TooLong
     */
    public function run(\Psr\Container\ContainerInterface $container): void
    {
    }
}
class AuthenticatedClientFactory
{
    /**
     * @var \Inpsyde\Http\HttpClientFactory
     */
    private $clientFactory;
    /**
     * @var \Psr\Http\Message\UriFactoryInterface
     */
    private $uriFactory;
    /**
     * @var \Inpsyde\Zettle\Auth\Jwt\ParserInterface
     */
    private $jwtParser;
    /**
     * @var \Psr\Http\Message\StreamFactoryInterface
     */
    private $streamFactory;
    /**
     * @var array
     */
    private $partnerAffiliationHeader;
    /**
     * @var string
     */
    private $clientId;
    /**
     * @param \Inpsyde\Http\HttpClientFactory $clientFactory
     * @param \Psr\Http\Message\UriFactoryInterface $uriFactory
     * @param \Psr\Http\Message\StreamFactoryInterface $streamFactory
     * @param \Inpsyde\Zettle\Auth\Jwt\ParserInterface $jwtParser
     * @param array $partnerAffiliationHeader
     * @param string $clientId client_id of the app, see IZET-331
     */
    public function __construct(\Inpsyde\Http\HttpClientFactory $clientFactory, \Psr\Http\Message\UriFactoryInterface $uriFactory, \Psr\Http\Message\StreamFactoryInterface $streamFactory, \Inpsyde\Zettle\Auth\Jwt\ParserInterface $jwtParser, array $partnerAffiliationHeader, string $clientId)
    {
    }
    /**
     * Create a client that is configured to authenticate with a given api token.
     * Useful for creating a temporary client to validate new credentials
     *
     * @param string $token
     * @param \Inpsyde\Zettle\Auth\OAuth\AuthSuccessHandler|null $successHandler
     *
     * @return \Psr\Http\Client\ClientInterface
     */
    public function withApiToken(string $token, ?\Inpsyde\Zettle\Auth\OAuth\AuthSuccessHandler $successHandler = null): \Psr\Http\Client\ClientInterface
    {
    }
    /**
     * @param \Psr\Http\Message\RequestInterface $request
     *
     * @return bool
     */
    protected function shouldAuthenticate(\Psr\Http\Message\RequestInterface $request): bool
    {
    }
    /**
     * @param \Inpsyde\Zettle\Auth\OAuth\AuthSuccessHandler|null $successHandler
     *
     * @return \Inpsyde\Zettle\Auth\OAuth\AuthSuccessHandler
     */
    private function ensureSuccessHandler(?\Inpsyde\Zettle\Auth\OAuth\AuthSuccessHandler $successHandler = null): \Inpsyde\Zettle\Auth\OAuth\AuthSuccessHandler
    {
    }
}
class CredentialsContainer implements \Psr\Container\ContainerInterface
{
    /**
     * @var \Inpsyde\Zettle\Auth\Jwt\ParserInterface
     */
    private $tokenDecoder;
    /**
     * @var array
     */
    private $data;
    /**
     * @var \Psr\Container\ContainerInterface|null
     */
    private $inner;
    /**
     * CredentialsContainer constructor.
     *
     * @param \Inpsyde\Zettle\Auth\Jwt\ParserInterface $tokenDecoder
     * @param array $data
     * @param \Psr\Container\ContainerInterface|null $inner
     */
    public function __construct(\Inpsyde\Zettle\Auth\Jwt\ParserInterface $tokenDecoder, array $data, ?\Psr\Container\ContainerInterface $inner = null)
    {
    }
    /**
     * get key (id) otherwise throw execption
     *
     * @param string $id
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function get($id)
    {
    }
    /**
     * Check if id (key) exists
     *
     * @param string $id
     *
     * @return bool
     */
    public function has($id)
    {
    }
    /**
     * Decode the Token and the result into the container
     *
     * @param string $key
     */
    private function decodeFromToken(string $key): void
    {
    }
}
namespace Inpsyde\Zettle\Auth\Exception;

class AuthenticationException extends \Exception implements \Psr\Http\Client\ClientExceptionInterface
{
}
class InvalidTokenException extends \Exception implements \Psr\Http\Client\ClientExceptionInterface
{
}
class InvalidTokenPropertyException extends \Exception implements \Psr\Container\NotFoundExceptionInterface
{
}
namespace Inpsyde\Zettle\Auth\HTTPlug;

/**
 * This is a little helper to help test error scenarios
 *
 * @see https://en.wikipedia.org/wiki/Chaos_engineering#Chaos_Monkey
 *
 * Class ChaosMonkeyPlugin
 * @package Inpsyde\Zettle\Auth\HTTPlug
 */
class ChaosMonkeyPlugin implements \Http\Client\Common\Plugin
{
    /**
     * @var int[]
     */
    private $statusProbability = [];
    /**
     * @var \Psr\Http\Message\ResponseFactoryInterface
     */
    private $responseFactory;
    /**
     * @var \Psr\Http\Message\StreamFactoryInterface
     */
    private $streamFactory;
    /**
     * ChaosMonkeyPlugin constructor.
     *
     * @param \Psr\Http\Message\ResponseFactoryInterface $responseFactory
     * @param \Psr\Http\Message\StreamFactoryInterface $streamFactory
     * @param array $config
     */
    public function __construct(\Psr\Http\Message\ResponseFactoryInterface $responseFactory, \Psr\Http\Message\StreamFactoryInterface $streamFactory, array $config = [])
    {
    }
    /**
     * @inheritDoc
     */
    public function handleRequest(\Psr\Http\Message\RequestInterface $request, callable $next, callable $first): \Http\Promise\Promise
    {
    }
    private function determineError(): int
    {
    }
}
/**
 * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
 */
class ZettleAuthPlugin implements \Http\Client\Common\Plugin
{
    const OAUTH_URL = 'https://oauth.izettle.com/token';
    /**
     * @var \Http\Message\Authentication
     */
    private $auth;
    /**
     * Flag attempted refreshes for each request.
     *
     * @var array
     */
    private $chainStorage = [];
    /**
     * @var callable
     */
    private $shouldAuthenticate;
    /**
     * @var \Psr\Http\Message\UriFactoryInterface
     */
    private $uriFactory;
    /**
     * @var \Psr\Http\Message\StreamFactoryInterface
     */
    private $streamFactory;
    /**
     * @var \Inpsyde\Zettle\Auth\OAuth\Grant\GrantType
     */
    private $authGrantType;
    /**
     * @var \Inpsyde\Zettle\Auth\OAuth\Grant\GrantType
     */
    private $refreshGrantType;
    /**
     * @var \Inpsyde\Zettle\Auth\OAuth\AuthSuccessHandler
     */
    private $authSuccessHandler;
    public function __construct(\Http\Message\Authentication $auth, callable $shouldAuthenticate, \Psr\Http\Message\UriFactoryInterface $uriFactory, \Psr\Http\Message\StreamFactoryInterface $streamFactory, \Inpsyde\Zettle\Auth\OAuth\Grant\GrantType $authGrantType, \Inpsyde\Zettle\Auth\OAuth\Grant\GrantType $refreshGrantType, \Inpsyde\Zettle\Auth\OAuth\AuthSuccessHandler $authSuccessHandler)
    {
    }
    /**
     * @inheritDoc
     */
    public function handleRequest(\Psr\Http\Message\RequestInterface $request, callable $next, callable $first): \Http\Promise\Promise
    {
    }
    private function handleAuthRequest(callable $first, \Psr\Http\Message\RequestInterface $request, \Inpsyde\Zettle\Auth\OAuth\Grant\GrantType $grant): \Http\Promise\Promise
    {
    }
}
namespace Inpsyde\Zettle\Auth\Jwt;

interface ParserInterface
{
    /**
     * Parses the JWT and returns a token
     *
     * @param string $jwt The token to parse.
     *
     * @return TokenInterface The token.
     *
     * @throws \InvalidArgumentException  When JWT is not a string or is invalid.
     * @throws \RuntimeException          When something goes wrong while decoding
     */
    public function parse(string $jwt): \Inpsyde\Zettle\Auth\Jwt\TokenInterface;
}
/**
 * A basic JWT parser.
 */
class Parser implements \Inpsyde\Zettle\Auth\Jwt\ParserInterface
{
    /**
     * @inheritDoc
     */
    public function parse(string $jwt): \Inpsyde\Zettle\Auth\Jwt\TokenInterface
    {
    }
    protected function decodeBase64Url(string $base64): string
    {
    }
    protected function decodeJson(string $json): array
    {
    }
}
interface ParserFactoryInterface
{
    public function createParser(): \Inpsyde\Zettle\Auth\Jwt\ParserInterface;
}
class ParserFactory implements \Inpsyde\Zettle\Auth\Jwt\ParserFactoryInterface
{
    public function __construct()
    {
    }
    /**
     * @inheritDoc
     */
    public function createParser(): \Inpsyde\Zettle\Auth\Jwt\ParserInterface
    {
    }
}
/**
 * Represents a JWT token.
 */
interface TokenInterface
{
    /**
     * Retrieves the token headers
     *
     * @return array<string, mixed>.
     */
    public function getHeaders(): array;
    /**
     * Retrieves the token claims.
     *
     * @return array<string, mixed>.
     */
    public function getClaims(): array;
}
class Token implements \Inpsyde\Zettle\Auth\Jwt\TokenInterface
{
    /** @var array<string, mixed> */
    protected $headers;
    /** @var array<string, mixed> */
    protected $claims;
    /**
     * @param array<string, mixed> $headers
     * @param array<string, mixed> $claims
     * @param string $signature
     */
    public function __construct(array $headers, array $claims, string $signature)
    {
    }
    public function getHeaders(): array
    {
    }
    public function getClaims(): array
    {
    }
}
namespace Inpsyde\Zettle\Auth\OAuth;

interface AuthSuccessHandler
{
    public function handle(\Psr\Http\Message\ResponseInterface $response);
}
interface TokenPersistorInterface
{
    public function persist(\Inpsyde\Zettle\Auth\OAuth\Token\TokenInterface $token): bool;
    public function clear(): bool;
}
interface TokenProviderInterface
{
    /**
     * @throws \Inpsyde\Zettle\Auth\Exception\InvalidTokenException
     * @return \Inpsyde\Zettle\Auth\OAuth\Token\TokenInterface
     */
    public function fetch(): \Inpsyde\Zettle\Auth\OAuth\Token\TokenInterface;
}
/**
 * Stores Zettle access tokens in a child container.
 * We kind of expect the child container to offer some persistence...
 */
class ContainerTokenStorage implements \Inpsyde\Zettle\Auth\OAuth\TokenPersistorInterface, \Inpsyde\Zettle\Auth\OAuth\TokenProviderInterface
{
    /**
     * @var \Dhii\Collection\MutableContainerInterface
     */
    private $container;
    /**
     * @var string
     */
    private $key;
    /**
     * @var \Inpsyde\Zettle\Auth\OAuth\Token\TokenFactoryInterface
     */
    private $tokenFactory;
    /**
     * SiteOptionTokenStorage constructor.
     *
     * @param \Dhii\Collection\MutableContainerInterface $container
     * @param string $key
     * @param \Inpsyde\Zettle\Auth\OAuth\Token\TokenFactoryInterface $tokenFactory
     */
    public function __construct(\Dhii\Collection\MutableContainerInterface $container, string $key, \Inpsyde\Zettle\Auth\OAuth\Token\TokenFactoryInterface $tokenFactory)
    {
    }
    /**
     * @return \Inpsyde\Zettle\Auth\OAuth\Token\TokenInterface
     *
     * @throws \Inpsyde\Zettle\Auth\Exception\InvalidTokenException
     */
    public function fetch(): \Inpsyde\Zettle\Auth\OAuth\Token\TokenInterface
    {
    }
    public function persist(\Inpsyde\Zettle\Auth\OAuth\Token\TokenInterface $token): bool
    {
    }
    public function clear(): bool
    {
    }
}
class CredentialValidator
{
    const ENDPOINT = 'https://oauth.izettle.com/users/me';
    /**
     * @var \Inpsyde\Zettle\Auth\AuthenticatedClientFactory
     */
    private $clientFactory;
    /**
     * @var \Psr\Http\Message\RequestFactoryInterface
     */
    private $requestFactory;
    public function __construct(\Inpsyde\Zettle\Auth\AuthenticatedClientFactory $clientFactory, \Psr\Http\Message\RequestFactoryInterface $requestFactory)
    {
    }
    public function validateApiToken(string $token): bool
    {
    }
}
/**
 * Class EphemeralTokenStorage
 * Stores tokens only for the lifetime of the current request/process.
 * This is probably only useful for running acceptance tests
 *
 * @package Inpsyde\Zettle\Auth\OAuth
 */
class EphemeralTokenStorage implements \Inpsyde\Zettle\Auth\OAuth\TokenProviderInterface, \Inpsyde\Zettle\Auth\OAuth\TokenPersistorInterface
{
    /**
     * @var \Inpsyde\Zettle\Auth\OAuth\Token\TokenInterface|null
     */
    private $token;
    /**
     * @param \Inpsyde\Zettle\Auth\OAuth\Token\TokenInterface $token
     *
     * @return bool
     */
    public function persist(\Inpsyde\Zettle\Auth\OAuth\Token\TokenInterface $token): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function fetch(): \Inpsyde\Zettle\Auth\OAuth\Token\TokenInterface
    {
    }
    /**
     * @inheritDoc
     */
    public function isEmpty(): bool
    {
    }
    public function clear(): bool
    {
    }
}
namespace Inpsyde\Zettle\Auth\OAuth\Grant;

interface GrantType
{
    /**
     * @return string
     */
    public function type(): string;
    /**
     * @return array
     * @throws \Inpsyde\Zettle\Auth\Exception\InvalidTokenException
     */
    public function payload(): array;
}
class JwtGrant implements \Inpsyde\Zettle\Auth\OAuth\Grant\GrantType
{
    public const KEY = 'urn:ietf:params:oauth:grant-type:jwt-bearer';
    /**
     * @var \Psr\Container\ContainerInterface
     */
    private $credentials;
    /**
     * @var \Inpsyde\Zettle\Auth\Jwt\ParserInterface
     */
    private $tokenDecoder;
    /**
     * @var string
     */
    private $clientId;
    /**
     * @param \Psr\Container\ContainerInterface $credentials
     * @param \Inpsyde\Zettle\Auth\Jwt\ParserInterface $tokenDecoder
     * @param string $clientId client_id of the app, see IZET-331
     */
    public function __construct(\Psr\Container\ContainerInterface $credentials, \Inpsyde\Zettle\Auth\Jwt\ParserInterface $tokenDecoder, string $clientId)
    {
    }
    /**
     * @inheritDoc
     */
    public function type(): string
    {
    }
    /**
     * @inheritDoc
     */
    public function payload(): array
    {
    }
}
namespace Inpsyde\Zettle\Auth\OAuth\Token;

interface TokenInterface
{
    public function access(): string;
    public function expires(): int;
    public function refresh(): string;
    public function toArray(): array;
}
class Token implements \Inpsyde\Zettle\Auth\OAuth\Token\TokenInterface
{
    /**
     * @var string
     */
    private $accessToken;
    /**
     * @var int
     */
    private $expiresIn;
    /**
     * @var string
     */
    private $refreshToken;
    /**
     * JwtToken constructor.
     *
     * @param string $accessToken
     * @param int $expiresIn
     * @param string $refreshToken
     */
    public function __construct(string $accessToken, int $expiresIn, string $refreshToken = '')
    {
    }
    /**
     * @return string
     */
    public function access(): string
    {
    }
    /**
     * @return int
     */
    public function expires(): int
    {
    }
    public function refresh(): string
    {
    }
    public function toArray(): array
    {
    }
}
interface TokenFactoryInterface
{
    public function fromArray(array $data): \Inpsyde\Zettle\Auth\OAuth\Token\TokenInterface;
}
class TokenFactory implements \Inpsyde\Zettle\Auth\OAuth\Token\TokenFactoryInterface
{
    /**
     * @param array $data
     *
     * @return TokenInterface
     * @throws \Inpsyde\Zettle\Auth\Exception\InvalidTokenException
     */
    public function fromArray(array $data): \Inpsyde\Zettle\Auth\OAuth\Token\TokenInterface
    {
    }
}
namespace Inpsyde\Zettle\Auth\OAuth;

/**
 * Class TokenContainer
 *
 * Wraps a Token class so that its data is accessible via the Container interface
 *
 * @package Inpsyde\Zettle\Auth\OAuth
 */
class TokenDataContainer implements \Psr\Container\ContainerInterface
{
    /**
     * @var array
     */
    private $accessors;
    /**
     * TokenContainer constructor.
     *
     * @param \Inpsyde\Zettle\Auth\OAuth\Token\TokenInterface $token
     */
    public function __construct(\Inpsyde\Zettle\Auth\OAuth\Token\TokenInterface $token)
    {
    }
    /**
     * @inheritDoc
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     */
    public function get($key)
    {
    }
    /**
     * @inheritDoc
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     */
    public function has($key)
    {
    }
}
class TokenPersistingAuthSuccessHandler implements \Inpsyde\Zettle\Auth\OAuth\AuthSuccessHandler
{
    /**
     * @var TokenPersistorInterface
     */
    private $tokenPersistor;
    /**
     * @var \Inpsyde\Zettle\Auth\OAuth\Token\TokenFactoryInterface
     */
    private $tokenFactory;
    public function __construct(\Inpsyde\Zettle\Auth\OAuth\TokenPersistorInterface $tokenPersistor, \Inpsyde\Zettle\Auth\OAuth\Token\TokenFactoryInterface $tokenFactory)
    {
    }
    public function handle(\Psr\Http\Message\ResponseInterface $response)
    {
    }
}
class ZettleOAuthHeader implements \Http\Message\Authentication
{
    /**
     * @var TokenProviderInterface
     */
    private $tokenStorage;
    public function __construct(\Inpsyde\Zettle\Auth\OAuth\TokenProviderInterface $tokenStorage)
    {
    }
    /**
     * @inheritDoc
     */
    public function authenticate(\Psr\Http\Message\RequestInterface $request): \Psr\Http\Message\RequestInterface
    {
    }
}
namespace Inpsyde\Zettle\Auth\Rest\V1;

interface EndpointInterface
{
    /**
     * @return string
     */
    public function methods(): string;
    /**
     * @return string
     */
    public function version(): string;
    /**
     * @return string
     */
    public function route(): string;
    /**
     * @return bool
     */
    public function permissionCallback(): bool;
    /**
     * @return array
     */
    public function args(): array;
    /**
     * Handle Endpoint Request
     *
     * @param \WP_REST_Request $request
     *
     * @return \WP_REST_Response
     */
    public function handleRequest(\WP_REST_Request $request): \WP_REST_Response;
}
class ValidationEndpoint implements \Inpsyde\Zettle\Auth\Rest\V1\EndpointInterface
{
    public const ERROR_WRITE_ONLY_PASSWORD_NOT_FILLED = 'write_only_password_not_filled';
    /**
     * @var \Inpsyde\Zettle\Auth\Validator\ValidatorInterface
     */
    protected $validator;
    /**
     * @var callable(string):bool
     */
    protected $writeOnlyPasswordChecker;
    /**
     * @param callable(string):bool $writeOnlyPasswordChecker @see WriteOnlyPasswordFieldChecker
     */
    public function __construct(\Inpsyde\Zettle\Auth\Validator\ValidatorInterface $validator, callable $writeOnlyPasswordChecker)
    {
    }
    /** @inheritDoc */
    public function methods(): string
    {
    }
    /** @inheritDoc */
    public function version(): string
    {
    }
    /** @inheritDoc */
    public function route(): string
    {
    }
    /** @inheritDoc */
    public function permissionCallback(): bool
    {
    }
    /** @inheritDoc */
    public function args(): array
    {
    }
    /**
     * @param \WP_REST_Request $request
     *
     * @return \WP_REST_Response
     */
    public function handleRequest(\WP_REST_Request $request): \WP_REST_Response
    {
    }
}
namespace Inpsyde\Zettle\Auth\Validator;

/**
 * The interface for JWT validation.
 */
interface ValidatorInterface
{
    /**
     * Validates the JWT.
     *
     * @param string $jwt
     * @return bool
     */
    public function validate(string $jwt): bool;
}
class Validator implements \Inpsyde\Zettle\Auth\Validator\ValidatorInterface
{
    /** @var \Inpsyde\Zettle\Auth\Jwt\ParserInterface */
    private $parser;
    /**
     * Validator constructor.
     *
     * @param \Inpsyde\Zettle\Auth\Jwt\ParserInterface $parser
     */
    public function __construct(\Inpsyde\Zettle\Auth\Jwt\ParserInterface $parser)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function validate(string $jwt): bool
    {
    }
}
namespace Inpsyde\Zettle\Logging\Logger;

class CompoundLogger implements \Psr\Log\LoggerInterface
{
    use \Psr\Log\LoggerTrait;
    /**
     * @var \Psr\Log\LoggerInterface[]
     */
    private $loggers;
    public function __construct(\Psr\Log\LoggerInterface ...$loggers)
    {
    }
    /**
     *  phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     *
     * @inheritDoc
     */
    public function log($level, $message, array $context = [])
    {
    }
    public function addLogger(\Psr\Log\LoggerInterface $logger): self
    {
    }
}
class FiFoLogger implements \Psr\Log\LoggerInterface
{
    use \Psr\Log\LoggerTrait;
    private $pool;
    /**
     * @var string
     */
    private $optionKey;
    /**
     * @var int
     */
    private $maxItems;
    /**
     * @var callable
     */
    private $flush;
    public function __construct(array $current, int $maxItems, callable $flush)
    {
    }
    /**
     * @inheritDoc
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     */
    public function log($level, $message, array $context = [])
    {
    }
    public function __destruct()
    {
    }
}
/**
 * Wraps log events in a 'do_action' call that Wonolog understands.
 *
 * @link https://github.com/inpsyde/Wonolog
 */
class WonoLogger implements \Psr\Log\LoggerInterface
{
    use \Psr\Log\LoggerTrait;
    /**
     * @var string the Monolog channel to use
     */
    private $channel;
    public function __construct(string $channel)
    {
    }
    /**
     * Used for translating PSR-3 LogLevels to the integer-based levels of Monolog.
     * There are constants for this in Monolog, but so far this would be the
     * only reason to actually depend on Monolog, so we just copied the values here
     */
    private const LEVELS = [\Psr\Log\LogLevel::EMERGENCY => 600, \Psr\Log\LogLevel::ALERT => 550, \Psr\Log\LogLevel::CRITICAL => 500, \Psr\Log\LogLevel::ERROR => 400, \Psr\Log\LogLevel::WARNING => 300, \Psr\Log\LogLevel::NOTICE => 250, \Psr\Log\LogLevel::INFO => 200, \Psr\Log\LogLevel::DEBUG => 100];
    /**
     * @param mixed $level
     * @param string $message
     * @param array $context
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     */
    public function log($level, $message, array $context = [])
    {
    }
}
/**
 * Class WooCommerceLogger
 * WooCommerce includes a logger interface, which is fully compatible to PSR-3,
 * but for some reason does not extend/implement it.
 *
 * This is a decorator that makes any WooCommerce Logger PSR-3-compatible
 *
 * @package Inpsyde\Zettle\Logging\Logger
 */
class WooCommerceLogger implements \Psr\Log\LoggerInterface
{
    use \Psr\Log\LoggerTrait;
    protected const LOG_LEVELS = [\Psr\Log\LogLevel::EMERGENCY, \Psr\Log\LogLevel::ALERT, \Psr\Log\LogLevel::CRITICAL, \Psr\Log\LogLevel::ERROR, \Psr\Log\LogLevel::WARNING, \Psr\Log\LogLevel::NOTICE, \Psr\Log\LogLevel::INFO, \Psr\Log\LogLevel::DEBUG];
    /**
     * @var \WC_Logger_Interface
     */
    private $wcLogger;
    public function __construct(\WC_Logger_Interface $wcLogger)
    {
    }
    /**
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     *
     * @inheritDoc
     */
    public function log($level, $message, array $context = [])
    {
    }
    /**
     * Interpolates the given values into the message placeholders.
     * based on
     * {@link https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md#12-message}
     */
    protected function interpolate(string $message, array $replace): string
    {
    }
    /**
     * Builds replacements list (for interpolate()) from the context values.
     * based on
     * {@link https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md#12-message}
     * @param array $context
     * @return array
     */
    protected function getReplacements(array $context = []): array
    {
    }
}
namespace Inpsyde\Zettle\Logging;

class ZettleLoggingModule implements \Dhii\Modular\Module\ModuleInterface
{
    /**
     * @inheritDoc
     */
    public function setup(): \Interop\Container\ServiceProviderInterface
    {
    }
    /**
     * @inheritDoc
     */
    public function run(\Psr\Container\ContainerInterface $container): void
    {
    }
}
namespace Inpsyde\Zettle\Notices\Notice;

interface NoticeInterface
{
    /**
     * @param string $currentState
     *
     * @return bool
     */
    public function accepts(string $currentState): bool;
    /**
     * @return string
     */
    public function render(): string;
}
namespace Inpsyde\Zettle\Notices\Notice\Admin;

class CompleteOnboardingNotice implements \Inpsyde\Zettle\Notices\Notice\NoticeInterface
{
    /**
     * @var callable
     */
    private $isIntegrationPageCallback;
    /**
     * @var string
     */
    private $settingsUrl;
    /**
     * CompleteOnboardingNotice constructor.
     *
     * @param callable $isIntegrationPageCallback
     * @param string $settingsUrl
     */
    public function __construct(callable $isIntegrationPageCallback, string $settingsUrl)
    {
    }
    /**
     * @inheritDoc
     */
    public function accepts(string $currentState): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function render(): string
    {
    }
}
class GlobalConnectionFailedNotice implements \Inpsyde\Zettle\Notices\Notice\NoticeInterface
{
    /**
     * @var callable
     */
    private $isIntegrationPageCallback;
    /**
     * @var bool
     */
    private $authFailed;
    /**
     * @var string
     */
    private $settingsUrl;
    public function __construct(callable $isIntegrationPageCallback, bool $authFailed, string $settingsUrl)
    {
    }
    /**
     * @inheritDoc
     */
    public function accepts(string $currentState): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function render(): string
    {
    }
}
class IntegrationConnectionFailedNotice implements \Inpsyde\Zettle\Notices\Notice\NoticeInterface
{
    /**
     * @var callable
     */
    private $isIntegrationPageCallback;
    /**
     * @var callable
     */
    private $authCheckCallback;
    /**
     * @var bool
     */
    private $isSavingSettings;
    /**
     * @var string
     */
    private $apiCreationLink;
    public function __construct(callable $isIntegrationPageCallback, callable $authCheckCallback, bool $isSavingSettings, string $apiCreationLink)
    {
    }
    /**
     * @inheritDoc
     */
    public function accepts(string $currentState): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function render(): string
    {
    }
}
namespace Inpsyde\Zettle\Notices\Notice;

class NoticeDelegator
{
    /**
     * @var NoticeInterface[]
     */
    private $notices;
    /**
     * NoticeDelegator constructor.
     *
     * @param NoticeInterface[] $notices
     */
    public function __construct(\Inpsyde\Zettle\Notices\Notice\NoticeInterface ...$notices)
    {
    }
    /**
     * @param string $currentState
     */
    public function delegate(string $currentState): void
    {
    }
    /**
     * Add Notice to WordPress
     *
     * @param NoticeInterface $notice
     */
    private function addAdminNotice(\Inpsyde\Zettle\Notices\Notice\NoticeInterface $notice): void
    {
    }
}
namespace Inpsyde\Zettle\Notices;

class NoticesModule implements \Dhii\Modular\Module\ModuleInterface
{
    /**
     * @inheritDoc
     */
    public function setup(): \Interop\Container\ServiceProviderInterface
    {
    }
    /**
     * @inheritDoc
     */
    public function run(\Psr\Container\ContainerInterface $container): void
    {
    }
}
namespace Inpsyde\Zettle\Onboarding\Cli;

class ResetOnboardingCommand
{
    /**
     * @var \Inpsyde\Queue\Queue\Job\Job
     */
    private $resetOnboardingJob;
    /**
     * @var bool
     */
    private $isMultisite;
    /**
     * @var int
     */
    private $currentSiteId;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;
    /**
     * @param \Inpsyde\Queue\Queue\Job\Job $resetOnboardingJob
     * @param bool $isMultisite
     * @param int $currentSiteId
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(\Inpsyde\Queue\Queue\Job\Job $resetOnboardingJob, bool $isMultisite, int $currentSiteId, \Psr\Log\LoggerInterface $logger)
    {
    }
    /**
     * Reset the Zettle WooCommerce Configuration (Credentials & Parameters)
     * & connected Products at WooCommerce
     *
     * ## EXAMPLES
     *
     *     wp zettle reset onboarding complete
     *
     * @when after_wp_load
     *
     * @param array $args
     * @param array $assocArgs
     */
    public function complete(array $args, array $assocArgs)
    {
    }
    /**
     * Reset the Zettle WooCommerce Configuration (Credentials & Parameters)
     * & connected Products at WooCommerce
     *
     * ## EXAMPLES
     *
     *     wp zettle reset onboarding site --url=<site-url>
     *
     * @when after_wp_load
     *
     * @param array $args
     * @param array $assocArgs
     */
    public function site(array $args, array $assocArgs)
    {
    }
}
namespace Inpsyde\Zettle\Onboarding\Comparison;

class StoreComparison
{
    /**
     * @var \Inpsyde\Zettle\Onboarding\DataProvider\Store\StoreDataProvider
     */
    private $remoteStoreData;
    /**
     * @var \Inpsyde\Zettle\Onboarding\DataProvider\Store\StoreDataProvider
     */
    private $localStoreData;
    /**
     * VatCurrencyComparison constructor.
     *
     * @param \Inpsyde\Zettle\Onboarding\DataProvider\Store\StoreDataProvider $remoteStoreData
     * @param \Inpsyde\Zettle\Onboarding\DataProvider\Store\StoreDataProvider $localStoreData
     */
    public function __construct(\Inpsyde\Zettle\Onboarding\DataProvider\Store\StoreDataProvider $remoteStoreData, \Inpsyde\Zettle\Onboarding\DataProvider\Store\StoreDataProvider $localStoreData)
    {
    }
    /**
     * @return bool
     */
    public function currency(): bool
    {
    }
    /**
     * @return bool
     */
    public function includeTaxes(): bool
    {
    }
    public function taxesEnabled(): bool
    {
    }
    public function country(): bool
    {
    }
    public function taxRatesConfigured(): bool
    {
    }
    public function canSyncPrices(): bool
    {
    }
    public function priceSyncRequiresTaxSync(): bool
    {
    }
    /**
     * @return \Inpsyde\Zettle\Onboarding\DataProvider\Store\StoreDataProvider
     */
    public function remote(): \Inpsyde\Zettle\Onboarding\DataProvider\Store\StoreDataProvider
    {
    }
    /**
     * @return \Inpsyde\Zettle\Onboarding\DataProvider\Store\StoreDataProvider
     */
    public function local(): \Inpsyde\Zettle\Onboarding\DataProvider\Store\StoreDataProvider
    {
    }
}
namespace Inpsyde\Zettle\Onboarding\Counter;

class ProductSyncJobsCounter
{
    /**
     * @var callable
     */
    private $productCollectorLocal;
    /**
     * @var string wipe or merge from sync collision strategy settings field
     */
    private $syncCollisionStrategy;
    /**
     * SyncJobsPredictor constructor.
     *
     * @param callable $productCollectorLocal
     * @param string $syncCollisionStrategy
     */
    public function __construct(callable $productCollectorLocal, string $syncCollisionStrategy)
    {
    }
    /**
     * Count Local & Remote Products
     *
     * @return int
     */
    public function count(): int
    {
    }
}
namespace Inpsyde\Zettle\Onboarding\DataProvider\Store;

interface StoreDataProvider
{
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat
     * @throws \Exception
     */
    public function vat(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat;
    /**
     * @return float
     * @throws \Exception
     */
    public function vatPercentage(): float;
    /**
     * @return string
     * @throws \Exception
     */
    public function currency(): string;
    /**
     * @return bool
     * @throws \Exception
     */
    public function includeTaxes(): bool;
    /**
     * @return bool
     * @throws \Exception
     */
    public function taxesEnabled(): bool;
    /**
     * @return string
     * @throws \Exception
     */
    public function taxationType(): string;
    /**
     * @return string
     * @throws \Exception
     */
    public function country(): string;
    /**
     * @return array
     * @throws \Exception
     */
    public function taxRates(): array;
}
class WooCommerceStoreDataProvider implements \Inpsyde\Zettle\Onboarding\DataProvider\Store\StoreDataProvider
{
    /**
     * @var array
     */
    private $location;
    /**
     * @var array
     */
    private $standardTaxRates;
    /**
     * @param array $location An array with keys country, state, etc., used for looking up taxes.
     * @param array $standardTaxRates An array with rates for the standard tax class,
     * using format like in WC_Tax::find_rates.
     */
    public function __construct(array $location, array $standardTaxRates)
    {
    }
    /**
     * @inheritDoc
     */
    public function vat(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat
    {
    }
    /**
     * @inheritDoc
     */
    public function vatPercentage(): float
    {
    }
    /**
     * @inheritDoc
     */
    public function currency(): string
    {
    }
    /**
     * @return bool
     */
    public function includeTaxes(): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function taxesEnabled(): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function taxationType(): string
    {
    }
    /**
     * @inheritDoc
     */
    public function country(): string
    {
    }
    /**
     * @return array
     */
    public function taxRates(): array
    {
    }
}
class ZettleStoreDataProvider implements \Inpsyde\Zettle\Onboarding\DataProvider\Store\StoreDataProvider
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Provider\Organization\OrganizationProvider
     */
    private $provider;
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Provider\Organization\OrganizationProvider $provider)
    {
    }
    /**
     * @inheritDoc
     */
    public function vat(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat
    {
    }
    /**
     * @inheritDoc
     */
    public function vatPercentage(): float
    {
    }
    /**
     * @inheritDoc
     */
    public function currency(): string
    {
    }
    /**
     * @inheritDoc
     */
    public function includeTaxes(): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function taxesEnabled(): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function taxationType(): string
    {
    }
    /**
     * @inheritDoc
     */
    public function country(): string
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    private function organization(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    public function taxRates(): array
    {
    }
}
namespace Inpsyde\Zettle\Onboarding\Event;

class AuthCheck extends \Inpsyde\StateMachine\Event\GenericStateChange
{
}
class AuthFailed extends \Inpsyde\StateMachine\Event\GenericStateChange
{
}
class BackButtonPressed extends \Inpsyde\StateMachine\Event\WebRequest
{
}
class CancelButtonPressed extends \Inpsyde\StateMachine\Event\WebRequest
{
}
class DeleteButtonPressed extends \Inpsyde\StateMachine\Event\WebRequest
{
}
class ProceedButtonPressed extends \Inpsyde\StateMachine\Event\WebRequest
{
}
class UnhandledError extends \Inpsyde\StateMachine\Event\GenericStateChange
{
    /**
     * @var \Throwable
     */
    private $exception;
    public function __construct(\Throwable $exception)
    {
    }
    public function getException(): \Throwable
    {
    }
}
namespace Inpsyde\Zettle\Onboarding\Job;

class ResetOnboardingJob implements \Inpsyde\Queue\Queue\Job\Job
{
    public const TYPE = 'reset-onboarding';
    /**
     * @var \wpdb
     */
    private $database;
    /**
     * @var \Dhii\Collection\ClearableContainerInterface
     */
    private $optionContainer;
    /**
     * @var \Dhii\Collection\ClearableContainerInterface
     */
    private $setupInfoContainer;
    /**
     * @var \Inpsyde\Zettle\Auth\OAuth\TokenPersistorInterface
     */
    private $tokenStorage;
    /**
     * @var array
     */
    private $tables;
    /**
     * @var string[]
     */
    private $transients;
    /**
     * @var string[]
     */
    private $options;
    /**
     * @var callable
     */
    private $deleteWebhooks;
    public function __construct(\wpdb $database, \Dhii\Collection\ClearableContainerInterface $optionContainer, \Dhii\Collection\ClearableContainerInterface $setupInfoContainer, \Inpsyde\Zettle\Auth\OAuth\TokenPersistorInterface $tokenStorage, array $tables, array $transients, array $options, callable $deleteWebhooks)
    {
    }
    /**
     * @inheritDoc
     */
    public function isUnique(): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function type(): string
    {
    }
    /**
     * @inheritDoc
     */
    public function execute(\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Inpsyde\Queue\Queue\Job\JobRepository $repository, \Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @param \Psr\Log\LoggerInterface $logger
     *
     * @param string $prefix
     * @return bool
     */
    private function resetOnboarding(\Psr\Log\LoggerInterface $logger, string $prefix): bool
    {
    }
}
namespace Inpsyde\Zettle\Onboarding\Listener;

class UnhandledErrorListener
{
    /**
     * @var \Inpsyde\StateMachine\StateMachineInterface
     */
    private $stateMachine;
    /**
     * @var \Inpsyde\Zettle\Http\PageReloaderInterface
     */
    private $pageReloader;
    /**
     * @var bool
     */
    private $isDebugMode;
    /**
     * @param \Inpsyde\StateMachine\StateMachineInterface $stateMachine
     * @param \Inpsyde\Zettle\Http\PageReloaderInterface $pageReloader
     * @param bool $isDebugMode
     */
    public function __construct(\Inpsyde\StateMachine\StateMachineInterface $stateMachine, \Inpsyde\Zettle\Http\PageReloaderInterface $pageReloader, bool $isDebugMode)
    {
    }
    /**
     * @param \Throwable $error
     * @throws \Inpsyde\StateMachine\Exceptions\DenyTransitionException
     * @throws \Throwable if in debug mode
     */
    public function __invoke(\Throwable $error)
    {
    }
    /**
     * Walks through the exception stack to find a known authentication error
     * @param \Throwable $error
     *
     * @return bool
     */
    private function isAuthError(\Throwable $error): bool
    {
    }
}
namespace Inpsyde\Zettle;

interface BootableProviderModuleInterface
{
    /**
     * @param \Psr\Container\ContainerInterface $container
     * @param Provider ...$providers
     */
    public function bootProviders(\Psr\Container\ContainerInterface $container, \Inpsyde\Zettle\Provider ...$providers): void;
}
trait BootableProviderAwareTrait
{
    /**
     * @param \Psr\Container\ContainerInterface $container
     * @param Provider ...$providers
     */
    final public function bootProviders(\Psr\Container\ContainerInterface $container, \Inpsyde\Zettle\Provider ...$providers): void
    {
    }
}
namespace Inpsyde\Zettle\Onboarding;

class OnboardingModule implements \Dhii\Modular\Module\ModuleInterface, \Inpsyde\Zettle\BootableProviderModuleInterface
{
    use \Inpsyde\Zettle\BootableProviderAwareTrait;
    /**
     * @inheritDoc
     */
    public function setup(): \Interop\Container\ServiceProviderInterface
    {
    }
    /**
     * @inheritDoc
     *
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    public function run(\Psr\Container\ContainerInterface $container): void
    {
    }
}
interface OnboardingState
{
    const WELCOME = 'welcome';
    const API_CREDENTIALS = 'api-credentials';
    const INVALID_CREDENTIALS = 'invalid-credentials';
    const SYNC_PARAM_PRODUCTS = 'sync-param-products';
    const SYNC_PARAM_VAT = 'sync-parameters-vat';
    const SYNC_PROGRESS = 'sync-progress';
    const SYNC_FINISHED = 'sync-finished';
    const ONBOARDING_COMPLETED = 'onboarding-completed';
    const UNHANDLED_ERROR = 'unhandled-error';
}
interface OnboardingTransition
{
    const TO_WELCOME = 'to-welcome';
    const TO_API_CREDENTIALS = 'to-api-credentials';
    const TO_APP_CREDENTIALS = 'to-app-credentials';
    const TO_USER_CREDENTIALS = 'to-user-credentials';
    const TO_INVALID_CREDENTIALS = 'to-invalid-credentials';
    const TO_SYNC_PARAM_PRODUCTS = 'to-sync-param-products';
    const TO_SYNC_PARAM_VAT = 'to-sync-param-vat';
    const TO_SYNC_PROGRESS = 'to-sync-progress';
    const TO_SYNC_FINISHED = 'to-sync-finished';
    const TO_ONBOARDING_COMPLETED = 'to-onboarding-completed';
    const TO_UNHANDLED_ERROR = 'to-unhandled-error';
}
namespace Inpsyde\Zettle;

/**
 * Interface for bootable Provider
 */
interface Provider
{
    /**
     * @param \Psr\Container\ContainerInterface $container
     *
     * @return bool
     */
    public function boot(\Psr\Container\ContainerInterface $container): bool;
}
namespace Inpsyde\Zettle\Onboarding\Provider;

class ErrorListenerProvider implements \Inpsyde\Zettle\Provider
{
    /**
     * @var \Inpsyde\Zettle\Onboarding\Listener\UnhandledErrorListener
     */
    private $unhandledErrorListener;
    public function __construct(\Inpsyde\Zettle\Onboarding\Listener\UnhandledErrorListener $unhandledErrorListener)
    {
    }
    /**
     * @inheritDoc
     */
    public function boot(\Psr\Container\ContainerInterface $container): bool
    {
    }
}
class OnboardingRenderProvider implements \Inpsyde\Zettle\Provider
{
    /**
     * @var \Inpsyde\StateMachine\StateMachineInterface
     */
    private $stateMachine;
    public function __construct(\Inpsyde\StateMachine\StateMachineInterface $stateMachine)
    {
    }
    /**
     * @inheritDoc
     */
    public function boot(\Psr\Container\ContainerInterface $container): bool
    {
    }
}
class ResetCommandProvider implements \Inpsyde\Zettle\Provider
{
    /**
     * @var \Inpsyde\Zettle\Onboarding\Cli\ResetOnboardingCommand
     */
    private $resetOnboardingCommand;
    /**
     * CliCommandProvider constructor.
     *
     * @param \Inpsyde\Zettle\Onboarding\Cli\ResetOnboardingCommand $resetOnboardingCommand
     */
    public function __construct(\Inpsyde\Zettle\Onboarding\Cli\ResetOnboardingCommand $resetOnboardingCommand)
    {
    }
    /**
     * @inheritDoc
     */
    public function boot(\Psr\Container\ContainerInterface $container): bool
    {
    }
}
class StateMachineProvider implements \Inpsyde\Zettle\Provider
{
    /**
     * @var \Inpsyde\StateMachine\StateMachineInterface
     */
    private $stateMachine;
    /**
     * StateMachineProvider constructor.
     *
     * @param \Inpsyde\StateMachine\StateMachineInterface $stateMachine
     */
    public function __construct(\Inpsyde\StateMachine\StateMachineInterface $stateMachine)
    {
    }
    /**
     * @inheritDoc
     */
    public function boot(\Psr\Container\ContainerInterface $container): bool
    {
    }
}
namespace Inpsyde\Zettle\Onboarding;

class RequestDataFilter
{
    /**
     * @var array
     */
    private $requestData;
    public function __construct(array $requestData)
    {
    }
    /**
     * @param mixed ...$things
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     *
     * @return bool
     */
    public function guard(...$things): bool
    {
    }
    /**
     * @param $thing
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     *
     * @return bool
     */
    private function guardField($thing): bool
    {
    }
}
namespace Inpsyde\Zettle\Onboarding\Rest;

interface EndpointInterface
{
    public function methods(): string;
    public function version(): string;
    public function route(): string;
    public function permissionCallback(): bool;
    public function args(): array;
    public function handleRequest(\WP_REST_Request $request): \WP_REST_Response;
}
class DisconnectEndpoint implements \Inpsyde\Zettle\Onboarding\Rest\EndpointInterface
{
    /**
     * @var \Inpsyde\Queue\Queue\Job\Job
     */
    protected $onboardingResetJob;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;
    public function __construct(\Inpsyde\Queue\Queue\Job\Job $onboardingResetJob, \Psr\Log\LoggerInterface $logger)
    {
    }
    /**
     * @inheritDoc
     */
    public function methods(): string
    {
    }
    /**
     * @inheritDoc
     */
    public function version(): string
    {
    }
    /**
     * @inheritDoc
     */
    public function route(): string
    {
    }
    /**
     * @inheritDoc
     */
    public function permissionCallback(): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function args(): array
    {
    }
    /**
     * @inheritDoc
     */
    public function handleRequest(\WP_REST_Request $request): \WP_REST_Response
    {
    }
}
namespace Inpsyde\Zettle\Onboarding\Settings;

interface ButtonAction
{
    public const PROCEED = 'save';
    public const BACK = 'back';
    public const CANCEL = 'cancel';
    public const DELETE = 'delete';
}
interface ButtonKind
{
    public const PRIMARY = 'primary';
    public const SECONDARY = 'secondary';
    public const DELETE = 'delete';
}
namespace Inpsyde\Zettle\Settings\FieldRenderer;

interface FieldRendererInterface
{
    public function accepts(string $fieldId, array $fieldConfig, \WC_Settings_API $settingsApi): bool;
    public function render(string $fieldId, array $fieldConfig, \WC_Settings_API $settingsApi): string;
}
namespace Inpsyde\Zettle\Onboarding\Settings\FieldRenderer;

class HiddenFieldRenderer implements \Inpsyde\Zettle\Settings\FieldRenderer\FieldRendererInterface
{
    public function accepts(string $fieldId, array $fieldConfig, \WC_Settings_API $settingsApi): bool
    {
    }
    public function render(string $fieldId, array $fieldConfig, \WC_Settings_API $settingsApi): string
    {
    }
    private function renderDefault(string $fieldId, array $fieldConfig, \WC_Settings_API $settingsApi): string
    {
    }
}
/**
 * Class OnboardingFieldRenderer
 * phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
 *
 * @package Inpsyde\Zettle\Onboarding\Settings
 */
class OnboardingFieldRenderer implements \Inpsyde\Zettle\Settings\FieldRenderer\FieldRendererInterface
{
    /**
     * @var string
     */
    private $currentState;
    /**
     * @var \Inpsyde\Zettle\Onboarding\Settings\View\OnboardingView
     */
    private $view;
    /**
     * @var \Inpsyde\Zettle\Onboarding\Settings\OnboardingStepper
     */
    private $stepper;
    /**
     * @var callable
     */
    private $isIntegrationPage;
    /**
     * OnboardingFieldRenderer constructor.
     *
     * @param string $currentState
     * @param \Inpsyde\Zettle\Onboarding\Settings\View\OnboardingView $view
     * @param \Inpsyde\Zettle\Onboarding\Settings\OnboardingStepper $stepper
     * @param callable $isIntegrationPage
     */
    public function __construct(string $currentState, \Inpsyde\Zettle\Onboarding\Settings\View\OnboardingView $view, \Inpsyde\Zettle\Onboarding\Settings\OnboardingStepper $stepper, callable $isIntegrationPage)
    {
    }
    /**
     * @param string $fieldId
     * @param array $fieldConfig
     * @param \WC_Settings_API $settingsApi
     * @return bool
     */
    public function accepts(string $fieldId, array $fieldConfig, \WC_Settings_API $settingsApi): bool
    {
    }
    /**
     * @param string $fieldId
     * @param array $fieldConfig
     * @param \WC_Settings_API $settingsApi
     * phpcs:disable Inpsyde.CodeQuality.FunctionLength.TooLong
     * @return string
     */
    public function render(string $fieldId, array $fieldConfig, \WC_Settings_API $settingsApi): string
    {
    }
    /**
     * @param string $fieldKey
     * @param array $fieldConfig
     * @param \WC_Settings_API $settingsApi
     *
     * @return string
     */
    protected function renderTableHead(string $fieldKey, array $fieldConfig, \WC_Settings_API $settingsApi): string
    {
    }
    /**
     * @return string
     */
    protected function renderTableContent(): string
    {
    }
}
/**
 * Does not render the fields, outputs empty string.
 */
class RemovedFieldRenderer implements \Inpsyde\Zettle\Settings\FieldRenderer\FieldRendererInterface
{
    public function accepts(string $fieldId, array $fieldConfig, \WC_Settings_API $settingsApi): bool
    {
    }
    public function render(string $fieldId, array $fieldConfig, \WC_Settings_API $settingsApi): string
    {
    }
}
/**
 * A password field that does not expose the currently saved value in HTML.
 */
class WriteOnlyPasswordFieldRenderer implements \Inpsyde\Zettle\Settings\FieldRenderer\FieldRendererInterface
{
    public const DEFAULT_PLACEHOLDER = '**********';
    /**
     * @var string
     */
    protected $placeholder;
    /**
     * @param string $placeholder The value put into the field before editing.
     */
    public function __construct(string $placeholder = self::DEFAULT_PLACEHOLDER)
    {
    }
    public function accepts(string $fieldId, array $fieldConfig, \WC_Settings_API $settingsApi): bool
    {
    }
    public function render(string $fieldId, array $fieldConfig, \WC_Settings_API $settingsApi): string
    {
    }
}
namespace Inpsyde\Zettle\Onboarding\Settings\Filter;

/**
 * The interface allowing to modify settings values during saving.
 */
interface SettingsValueFilter
{
    /**
     * Filters the settings fields.
     * @param array<string, mixed> $settings An array like ['field1' => 'value', 'field2' => 42]
     * @return array<string, mixed>
     */
    public function filterSettingsValues(array $settings): array;
}
/**
 * Removes the element if the given function returns false for the value.
 */
class GenericSettingsValueFilter implements \Inpsyde\Zettle\Onboarding\Settings\Filter\SettingsValueFilter
{
    /**
     * @var string
     */
    protected $key;
    /**
     * @var callable(string):bool
     */
    protected $valueChecker;
    /**
     * @param string $key The key in the settings array.
     * @param callable(string):bool $valueChecker A function returning bool if the given value needs to be removes.
     */
    public function __construct(string $key, callable $valueChecker)
    {
    }
    public function filterSettingsValues(array $settings): array
    {
    }
}
interface SettingsFilter
{
    /**
     * @param array $settings
     *
     * @return array
     */
    public function filter(array $settings): array;
}
/**
 * Filters out settings fields based on the onboarding state
 */
class OnboardingProcessFilter implements \Inpsyde\Zettle\Onboarding\Settings\Filter\SettingsFilter
{
    private $knownStates = [\Inpsyde\Zettle\Onboarding\OnboardingState::WELCOME, \Inpsyde\Zettle\Onboarding\OnboardingState::API_CREDENTIALS, \Inpsyde\Zettle\Onboarding\OnboardingState::INVALID_CREDENTIALS, \Inpsyde\Zettle\Onboarding\OnboardingState::SYNC_PARAM_PRODUCTS, \Inpsyde\Zettle\Onboarding\OnboardingState::SYNC_PARAM_VAT, \Inpsyde\Zettle\Onboarding\OnboardingState::SYNC_PROGRESS, \Inpsyde\Zettle\Onboarding\OnboardingState::SYNC_FINISHED, \Inpsyde\Zettle\Onboarding\OnboardingState::ONBOARDING_COMPLETED, \Inpsyde\Zettle\Onboarding\OnboardingState::UNHANDLED_ERROR];
    private $disabled = [\Inpsyde\Zettle\Onboarding\OnboardingState::API_CREDENTIALS => ['api_key'], \Inpsyde\Zettle\Onboarding\OnboardingState::INVALID_CREDENTIALS => [], \Inpsyde\Zettle\Onboarding\OnboardingState::SYNC_PARAM_PRODUCTS => ['sync_collision_strategy'], \Inpsyde\Zettle\Onboarding\OnboardingState::SYNC_PARAM_VAT => ['sync_price_strategy']];
    /**
     * Needed for IZET-273 fix (old settings were re-submitted)
     * @var string[]
     */
    private $settingsResetStates = [\Inpsyde\Zettle\Onboarding\OnboardingState::WELCOME];
    private $authFieldKeys = ['authentication', 'api_key'];
    /**
     * @var string
     */
    private $currentState;
    /**
     * OnboardingProcessFilter constructor.
     *
     * @param string $currentState
     */
    public function __construct(string $currentState)
    {
    }
    public function filter(array $settings): array
    {
    }
    private function getWhitelist(): ?array
    {
    }
    private function getDisabled(): array
    {
    }
    private function getRemovedFields(): array
    {
    }
    private function isSettingsReviewPage(): bool
    {
    }
}
namespace Inpsyde\Zettle\Onboarding\Settings;

class OnboardingStepper
{
    /**
     * @var array
     */
    private $states;
    /**
     * @var string
     */
    private $currentStep;
    /**
     * @var array
     */
    private $exclude;
    /**
     * @var string
     */
    private $stepLabel;
    /**
     * @var string
     */
    private $stepsTemplate;
    /**
     * @var array
     */
    private $steppableMap;
    /**
     * @var int
     */
    private $currentPosition;
    /**
     * OnboardingStepper constructor.
     *
     * @param array $states
     * @param string $currentStep
     * @param array $exclude
     * @param string $stepLabel
     * @param string $stepsTemplate
     */
    public function __construct(array $states, string $currentStep, array $exclude, string $stepLabel, string $stepsTemplate = '%1$d/%2$d')
    {
    }
    /**
     * @return bool
     */
    public function canRender(): bool
    {
    }
    /**
     * @return string
     */
    public function render(): string
    {
    }
    /**
     * @return int
     */
    public function currentPosition(): int
    {
    }
    /**
     * Initialize the Stepper
     */
    protected function initialize(): void
    {
    }
    /**
     * @param array $states
     *
     * @param array $exclude
     * @return array
     */
    protected function generateSteppableMap(array $states, array $exclude = []): array
    {
    }
    /**
     * @param array $steppableMap
     *
     * @return int
     */
    protected function walkSteppableMap(array $steppableMap): int
    {
    }
    /**
     * @return string
     */
    private function generateStepper(): string
    {
    }
}
namespace Inpsyde\Zettle\Onboarding\Settings\View;

interface OnboardingView
{
    /**
     * @return string
     */
    public function renderHeader(): string;
    /**
     * @return string
     */
    public function renderContent(): string;
    /**
     * @return string
     */
    public function renderProceedButton(): string;
    /**
     * @return string
     */
    public function renderBackButton(): string;
}
trait ButtonRendererTrait
{
    /**
     * Generates the specified action button HTML.
     *
     * @param string $action The value for the name attribute, should be from ButtonAction constants.
     * @param string|null $label The button text, or null to use default text based on the action.
     * @param array{kind?: string, disabled?: bool, hidden?: bool, type?: string, value?: string, attributes?: array<string, string>}
     * The array with additional parameters.
     * 'kind' - button type/CSS class from ButtonKind, if omitted - using default based on the action.
     * 'disabled' - true/false, whether to add `disabled` attribute (default false).
     * 'hidden' - true/false, whether to make it hidden (default false).
     * 'type' - HTML button type (default submit).
     * 'value' - HTML button value (default "Save changes").
     * 'attributes' - additional HTML attributes, such as data-*.
     * @return string
     */
    protected function renderActionButton(string $action, ?string $label = null, array $params = []): string
    {
    }
    protected function getDefaultButtonLabel(string $action): string
    {
    }
    protected function getDefaultButtonKind(string $action): string
    {
    }
}
class SettingsFieldView implements \Inpsyde\Zettle\Onboarding\Settings\View\OnboardingView
{
    use \Inpsyde\Zettle\Onboarding\Settings\View\ButtonRendererTrait;
    /**
     * @var \WC_Settings_API
     */
    protected $settingsApi;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $content;
    /**
     * @var array
     */
    protected $fields;
    /**
     * @var string
     */
    protected $notice;
    /**
     * @var string
     */
    protected $allowedFieldTags;
    /**
     * CredentialAwareView constructor.
     *
     * @param \WC_Settings_API $settingsApi
     * @param string $title
     * @param string $content
     * @param array $fields
     * @param string $notice
     * @param array $allowedFieldTags
     */
    public function __construct(\WC_Settings_API $settingsApi, string $title, string $content, array $fields, string $notice = '', array $allowedFieldTags = [])
    {
    }
    public function renderHeader(): string
    {
    }
    public function renderContent(): string
    {
    }
    public function renderProceedButton(): string
    {
    }
    public function renderBackButton(): string
    {
    }
}
class ApiCredentialsView extends \Inpsyde\Zettle\Onboarding\Settings\View\SettingsFieldView implements \Inpsyde\Zettle\Onboarding\Settings\View\OnboardingView
{
    /**
     * @var array
     */
    private $apiKeyCreationLink;
    /**
     * ApiCredentialsView constructor.
     *
     * @param \WC_Settings_API $settingsApi
     * @param array $apiKeyCreationLink
     * @param string $title
     * @param string $content
     * @param array $fields
     * @param string $notice
     * @param array $allowedFieldTags
     */
    public function __construct(\WC_Settings_API $settingsApi, array $apiKeyCreationLink, string $title, string $content, array $fields, string $notice = '', array $allowedFieldTags = [])
    {
    }
    public function renderHeader(): string
    {
    }
    public function renderContent(): string
    {
    }
    public function renderProceedButton(): string
    {
    }
    /**
     * @param array $customAttributes
     *
     * @return array
     */
    private function filterCustomAttributes(array $customAttributes): array
    {
    }
}
class ContainerAwareView implements \Inpsyde\Zettle\Onboarding\Settings\View\OnboardingView
{
    /**
     * @var \Psr\Container\ContainerInterface
     */
    private $container;
    /**
     * @var OnboardingView
     */
    private $view;
    public function __construct(\Psr\Container\ContainerInterface $container)
    {
    }
    public function renderHeader(): string
    {
    }
    public function renderContent(): string
    {
    }
    public function renderProceedButton(): string
    {
    }
    public function renderBackButton(): string
    {
    }
    /**
     * @return OnboardingView
     * phpcs:disable Inpsyde.CodeQuality.FunctionLength.TooLong
     * phpcs:disable Generic.Metrics.CyclomaticComplexity.TooHigh
     */
    private function view(): \Inpsyde\Zettle\Onboarding\Settings\View\OnboardingView
    {
    }
}
class OnboardingCompletedView implements \Inpsyde\Zettle\Onboarding\Settings\View\OnboardingView
{
    use \Inpsyde\Zettle\Onboarding\Settings\View\ButtonRendererTrait;
    /**
     * @var array
     */
    private $zettleProductsLink;
    /**
     * @var array
     */
    private $settingsLink;
    /**
     * @param array $zettleProductsLink
     */
    public function __construct(array $zettleProductsLink, array $settingsLink)
    {
    }
    public function renderHeader(): string
    {
    }
    public function renderContent(): string
    {
    }
    public function renderProceedButton(): string
    {
    }
    public function renderBackButton(): string
    {
    }
}
class ProductSyncParamView implements \Inpsyde\Zettle\Onboarding\Settings\View\OnboardingView
{
    use \Inpsyde\Zettle\Onboarding\Settings\View\ButtonRendererTrait;
    /**
     * @var callable
     */
    private $zettleProductsCountQuery;
    /**
     * @var int|null
     */
    private $zettleProductsCount = null;
    /**
     * @var callable
     */
    private $totalWcProductsCountQuery;
    /**
     * @var int|null
     */
    private $totalWcProductsCount = null;
    /**
     * @var callable
     */
    private $supportedWcProductsCountQuery;
    /**
     * @var int|null
     */
    private $supportedWcProductsCount;
    /**
     * @var array
     */
    private $documentationLink;
    /**
     * ProductSyncParamView constructor.
     *
     * @param callable $supportedWcProductsCountQuery
     * @param callable $totalWcProductsCountQuery
     * @param callable $zettleProductsCountQuery
     * @param array $documentationLink
     */
    public function __construct(callable $supportedWcProductsCountQuery, callable $totalWcProductsCountQuery, callable $zettleProductsCountQuery, array $documentationLink)
    {
    }
    public function renderHeader(): string
    {
    }
    /**
     * @inheritDoc
     */
    public function renderContent(): string
    {
    }
    /**
     * @inheritDoc
     */
    public function renderProceedButton(): string
    {
    }
    /**
     * @inheritDoc
     */
    public function renderBackButton(): string
    {
    }
    /**
     * Render Products Count
     *
     * @return string
     */
    protected function renderProductsCount(): string
    {
    }
    /**
     * If there are no valid or unsupported products types,
     * we display the total woocommerce products amount,
     * to give the user feedback, which products valid/supported
     *
     * @return string
     */
    private function productCountText(): string
    {
    }
    /**
     * @return int
     */
    private function zettleProductsCount(): int
    {
    }
    /**
     * @return int
     */
    private function totalWcProductsCount(): int
    {
    }
    /**
     * @return int
     */
    private function supportedWcProductsCount(): int
    {
    }
}
class SimpleView implements \Inpsyde\Zettle\Onboarding\Settings\View\OnboardingView
{
    use \Inpsyde\Zettle\Onboarding\Settings\View\ButtonRendererTrait;
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $content;
    /**
     * @var string
     */
    private $proceedButtonHtml = '';
    /**
     * @var string
     */
    private $backButtonHtml = '';
    /**
     * SimpleView constructor.
     *
     * @param string $title
     * @param string $content
     */
    public function __construct(string $title, string $content)
    {
    }
    /**
     * @param string|null $label The button text, or null to use default text.
     * @return SimpleView
     */
    public function withProceedButton(?string $label = null): \Inpsyde\Zettle\Onboarding\Settings\View\SimpleView
    {
    }
    /**
     * @param string|null $label The button text, or null to use default text.
     * @return SimpleView
     */
    public function withBackButton(?string $label = null): \Inpsyde\Zettle\Onboarding\Settings\View\SimpleView
    {
    }
    public function renderHeader(): string
    {
    }
    public function renderContent(): string
    {
    }
    public function renderProceedButton(): string
    {
    }
    public function renderBackButton(): string
    {
    }
}
class SyncFinishedView implements \Inpsyde\Zettle\Onboarding\Settings\View\OnboardingView
{
    use \Inpsyde\Zettle\Onboarding\Settings\View\ButtonRendererTrait;
    /**
     * @var array
     */
    private $zettleProductsLink;
    /**
     * @param array $zettleProductsLink
     */
    public function __construct(array $zettleProductsLink)
    {
    }
    public function renderHeader(): string
    {
    }
    public function renderContent(): string
    {
    }
    public function renderProceedButton(): string
    {
    }
    public function renderBackButton(): string
    {
    }
}
class SyncProgressView implements \Inpsyde\Zettle\Onboarding\Settings\View\OnboardingView
{
    use \Inpsyde\Zettle\Onboarding\Settings\View\ButtonRendererTrait;
    /**
     * @var callable
     */
    private $totalWcProductsCountQuery;
    /**
     * @var int|null
     */
    private $totalWcProductsCount = null;
    /**
     * @var callable
     */
    private $supportedWcProductsCountQuery;
    /**
     * @var int|null
     */
    private $supportedWcProductsCount;
    /**
     * @var \Inpsyde\Zettle\PluginProperties
     */
    private $pluginProperties;
    /**
     * SyncProgressView constructor.
     *
     * @param callable $supportedWcProductsCountQuery
     * @param callable $totalWcProductsCountQuery
     * @param \Inpsyde\Zettle\PluginProperties $pluginProperties
     */
    public function __construct(callable $supportedWcProductsCountQuery, callable $totalWcProductsCountQuery, \Inpsyde\Zettle\PluginProperties $pluginProperties)
    {
    }
    /**
     * @return string
     * phpcs:disable Inpsyde.CodeQuality.FunctionLength.TooLong
     */
    public function renderHeader(): string
    {
    }
    public function renderContent(): string
    {
    }
    /**
     * Format a tooltip with information about the
     * implications of navigating away from a running sync
     * @return string
     */
    public function navigationNotice(): string
    {
    }
    public function renderProceedButton(): string
    {
    }
    public function renderBackButton(): string
    {
    }
    /**
     * Returns the text describing what happens here.
     * Displays WC products count instead of "All" when not all products are supported.
     *
     * @return string
     */
    private function stepDescriptionText(): string
    {
    }
    private function totalWcProductsCount(): int
    {
    }
    private function supportedWcProductsCount(): int
    {
    }
}
class SyncVatParamView implements \Inpsyde\Zettle\Onboarding\Settings\View\OnboardingView
{
    use \Inpsyde\Zettle\Onboarding\Settings\View\ButtonRendererTrait;
    /**
     * @var \Inpsyde\Zettle\Onboarding\Comparison\StoreComparison
     */
    private $storeComparison;
    /**
     * @var \Inpsyde\Zettle\Onboarding\DataProvider\Store\StoreDataProvider
     */
    private $remoteStoreData;
    /**
     * @var \Inpsyde\Zettle\Onboarding\DataProvider\Store\StoreDataProvider
     */
    private $localStoreData;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Tax\TaxRate[]|null
     */
    private $defaultTaxRates;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Tax\TaxRate[]|null $defaultTaxRates
     */
    public function __construct(\Inpsyde\Zettle\Onboarding\Comparison\StoreComparison $storeComparison, \Inpsyde\Zettle\Onboarding\DataProvider\Store\StoreDataProvider $remoteStoreData, \Inpsyde\Zettle\Onboarding\DataProvider\Store\StoreDataProvider $localStoreData, ?array $defaultTaxRates)
    {
    }
    /**
     * @inheritDoc
     */
    public function renderHeader(): string
    {
    }
    /**
     * @inheritDoc
     */
    public function renderContent(): string
    {
    }
    /**
     * @return string
     */
    public function renderFormChoiceSelection(): string
    {
    }
    /**
     * @inheritDoc
     */
    public function renderProceedButton(): string
    {
    }
    /**
     * @inheritDoc
     */
    public function renderBackButton(): string
    {
    }
}
class UnhandledErrorView implements \Inpsyde\Zettle\Onboarding\Settings\View\OnboardingView
{
    use \Inpsyde\Zettle\Onboarding\Settings\View\ButtonRendererTrait;
    public function renderHeader(): string
    {
    }
    public function renderContent(): string
    {
    }
    public function renderProceedButton(): string
    {
    }
    public function renderBackButton(): string
    {
    }
}
class WelcomeView implements \Inpsyde\Zettle\Onboarding\Settings\View\OnboardingView
{
    /**
     * @var array
     */
    protected $zettleLink;
    /**
     * @param array $zettleLink
     */
    public function __construct(array $zettleLink)
    {
    }
    public function renderHeader(): string
    {
    }
    public function renderContent(): string
    {
    }
    public function renderGetStartedContent(): string
    {
    }
    public function renderProceedButton(): string
    {
    }
    public function renderBackButton(): string
    {
    }
}
namespace Inpsyde\Zettle\Onboarding\Settings;

/**
 * Checks whether the value from WriteOnlyPasswordFieldRenderer is filled (not empty and does not contain placeholder).
 */
class WriteOnlyPasswordFieldChecker
{
    /**
     * @var string
     */
    protected $placeholderChar;
    /**
     * @var int
     */
    protected $maxPlaceholderLength;
    /**
     * @param string $placeholderChar The character used in the WriteOnlyPasswordFieldRenderer placeholder, such as '*'.
     * @param int $maxPlaceholderLength The max value length that can be considered a placeholder.
     * (to avoid false positives if the API key actually contains such character)
     */
    public function __construct(string $placeholderChar, int $maxPlaceholderLength)
    {
    }
    public function __invoke(string $value): bool
    {
    }
}
namespace Inpsyde\Zettle\Onboarding;

interface SyncCollisionStrategy
{
    public const WIPE = 'wipe';
    public const MERGE = 'merge';
}
namespace Inpsyde\Zettle\PhpSdk\API\Image;

class Images
{
    /**
     * @var \Psr\Http\Message\UriInterface
     */
    private $uri;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\RestClientInterface
     */
    private $restClient;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface
     */
    private $builder;
    /** @var \Inpsyde\Zettle\PhpSdk\Image\ImageFormatRetrieverInterface */
    private $imageFormatRetriever;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;
    public function __construct(\Psr\Http\Message\UriInterface $uri, \Inpsyde\Zettle\PhpSdk\RestClientInterface $restClient, \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder, \Inpsyde\Zettle\PhpSdk\Image\ImageFormatRetrieverInterface $imageFormatRetriever, \Psr\Log\LoggerInterface $logger)
    {
    }
    /**
     * @param string $imageUrl
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageInterface
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException|\Inpsyde\Zettle\PhpSdk\Exception\BuilderException
     * @throws \UnexpectedValueException Invalid URL given.
     */
    public function create(string $imageUrl): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageInterface
    {
    }
    /**
     * @param array $imageUrls
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageCollection
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException|\Inpsyde\Zettle\PhpSdk\Exception\BuilderException
     * @throws \UnexpectedValueException Invalid URL given.
     */
    public function bulkCreate(array $imageUrls): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageCollection
    {
    }
    private function generateBulkPayload(array $imageUrls): array
    {
    }
    private function generateImagePayload(string $imageUrl): array
    {
    }
    private function imageFormat(string $imageUrl): string
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\API\Inventory;

class Inventory
{
    private $uri;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\RestClientInterface
     */
    private $restClient;
    /**
     * @var Locations
     */
    private $locationsClient;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Location\Location[]
     */
    private $locations;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface
     */
    private $builder;
    /**
     * @var string
     */
    private $integrationUuid;
    public function __construct(\Psr\Http\Message\UriInterface $uri, \Inpsyde\Zettle\PhpSdk\RestClientInterface $restClient, \Inpsyde\Zettle\PhpSdk\API\Inventory\Locations $locationsClient, \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder, string $integrationUuid)
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Location\Location[]
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    private function locations(): array
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Inventory\Transaction[] $transactions
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    public function performTransactions(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Inventory\Transaction ...$transactions): void
    {
    }
    /**
     * @param string $productUuid
     * @param string $variantUuid
     * @param int $change
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    public function purchase(string $productUuid, string $variantUuid, int $change): void
    {
    }
    /**
     * @param string $productUuid
     * @param string $variantUuid
     * @param string $from
     * @param string $to
     * @param int $change
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    public function moveStock(string $productUuid, string $variantUuid, string $from, string $to, int $change): void
    {
    }
    /**
     * @param string $productUuid
     * @param string $variantUuid
     * @param int $change
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    public function supply(string $productUuid, string $variantUuid, int $change): void
    {
    }
    /**
     * @param string $productUuid
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    public function startTracking(string $productUuid): void
    {
    }
    /**
     * @param string $productUuid
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    public function stopTracking(string $productUuid): void
    {
    }
    /**
     * @param string $productUuid
     * @param bool $enable
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    private function setTracking(string $productUuid, bool $enable): void
    {
    }
    /**
     * @param string $productUuid
     * @param string $locationType
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Inventory\Inventory
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    public function productInventory(string $productUuid, string $locationType): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Inventory\Inventory
    {
    }
}
class Locations
{
    private $uri;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\RestClientInterface
     */
    private $restClient;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface
     */
    private $builder;
    public function __construct(\Psr\Http\Message\UriInterface $uri, \Inpsyde\Zettle\PhpSdk\RestClientInterface $restClient, \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder)
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Location\Location[]
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    public function all(): array
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\API\Listener;

/**
 * Interface ApiRestListener
 *
 * Used to scope API Rest Client Listener that will be enqueued after a request to the API
 *
 * @package Inpsyde\Zettle\PhpSdk\API\Listener
 */
interface ApiRestListener
{
    public const CREATE = 'create';
    public const READ = 'read';
    public const UPDATE = 'update';
    public const DELETE = 'delete';
    /**
     * @param string $operation
     * @param $payload
     * @param bool $success
     *
     * @return bool
     */
    public function accepts(string $operation, $payload, bool $success): bool;
    /**
     * @param $payload
     *
     * @return bool
     */
    public function execute($payload): bool;
}
namespace Inpsyde\Zettle\PhpSdk\API\Listener\Products;

/**
 * Class OnSuccessDeleteProductsListener
 *
 * If we have a successfully response from Zettle with the Product API Client
 * and a Delete operation this will be executed
 *
 * We just unlink the Product locally and also unlink the Product Images with the unlink images job
 *
 * @package Inpsyde\Zettle\PhpSdk\API\Listener\Products
 */
class OnSuccessDeleteProductsListener implements \Inpsyde\Zettle\PhpSdk\API\Listener\ApiRestListener
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Repository\Zettle\Product\ProductRepositoryInterface
     */
    private $repository;
    /**
     * @var callable
     */
    private $createJob;
    /**
     * @var \Inpsyde\Queue\Queue\Job\JobRepository
     */
    private $jobRepository;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;
    /**
     * DeleteProductListener constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\Repository\Zettle\Product\ProductRepositoryInterface $repository
     * @param \Inpsyde\Queue\Queue\Job\JobRepository $jobRepository
     * @param callable $createJob
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\Repository\Zettle\Product\ProductRepositoryInterface $repository, \Inpsyde\Queue\Queue\Job\JobRepository $jobRepository, callable $createJob, \Psr\Log\LoggerInterface $logger)
    {
    }
    /**
     * @param string $operation
     * @param string $payload
     * @param bool $success
     *
     * @return bool
     */
    public function accepts(string $operation, $payload, bool $success): bool
    {
    }
    /**
     * @param string $payload contains product uuid::v1
     *
     * @return bool
     */
    public function execute($payload): bool
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\API\OAuth;

class Organizations
{
    private $uri;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\RestClientInterface
     */
    private $restClient;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface
     */
    private $builder;
    /**
     * Organizations constructor.
     *
     * @param \Psr\Http\Message\UriInterface $uri
     * @param \Inpsyde\Zettle\PhpSdk\RestClientInterface $restClient
     * @param \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder
     */
    public function __construct(\Psr\Http\Message\UriInterface $uri, \Inpsyde\Zettle\PhpSdk\RestClientInterface $restClient, \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder)
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    public function account(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
}
class Users
{
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;
    /**
     * @var \Psr\Http\Message\UriInterface
     */
    private $uri;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\RestClientInterface
     */
    private $restClient;
    public function __construct(\Psr\Log\LoggerInterface $logger, \Psr\Http\Message\UriInterface $uri, \Inpsyde\Zettle\PhpSdk\RestClientInterface $restClient)
    {
    }
    /**
     * @return array
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     * phpcs:disable Inpsyde.CodeQuality.ElementNameMinimalLength.TooShort
     */
    public function me(): array
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\API\Products;

/**
 * Class Products
 *
 * Provides abstractions for the 'products' resource of the Zettle Api
 *
 * @see https://products.izettle.com/swagger#/products
 *
 * @package Inpsyde\Zettle\PhpSdk\API\Products
 */
class Products
{
    /**
     * @var \Psr\Http\Message\UriInterface
     */
    private $uri;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\RestClientInterface
     */
    private $restClient;
    /**
     * @var callable[]
     */
    private $listeners;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface
     */
    private $builder;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Serializer\SerializerInterface
     */
    private $serializer;
    /**
     * Products constructor.
     *
     * @param \Psr\Http\Message\UriInterface $uri
     * @param \Inpsyde\Zettle\PhpSdk\RestClientInterface $restClient
     * @param \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder
     * @param \Inpsyde\Zettle\PhpSdk\Serializer\SerializerInterface $serializer
     * @param callable ...$listeners
     */
    public function __construct(\Psr\Http\Message\UriInterface $uri, \Inpsyde\Zettle\PhpSdk\RestClientInterface $restClient, \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder, \Inpsyde\Zettle\PhpSdk\Serializer\SerializerInterface $serializer, callable ...$listeners)
    {
    }
    /**
     * @param bool $withListeners
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductCollection
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    public function list(bool $withListeners = true): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductCollection
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface $product
     * @param bool $withListeners
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\Product
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    public function create(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface $product, bool $withListeners = true): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface
    {
    }
    /**
     * @param string $uuid
     * @param bool $withListeners
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    public function read(string $uuid, bool $withListeners = true): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface $product
     * @param bool $withListeners
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    public function update(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface $product, bool $withListeners = true): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface
    {
    }
    /**
     * @param string $uuid
     * @param bool $withListeners
     *
     * @return bool
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    public function delete(string $uuid, bool $withListeners = true): bool
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface[] $products
     * @param bool $withListeners
     *
     * @return bool
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     *
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    public function deleteBulk(array $products, bool $withListeners = true): bool
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\API\Taxes;

class Taxes
{
    private $baseUri;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\RestClientInterface
     */
    private $restClient;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface
     */
    private $builder;
    public function __construct(\Psr\Http\Message\UriInterface $baseUri, \Inpsyde\Zettle\PhpSdk\RestClientInterface $restClient, \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder)
    {
    }
    public function all(): array
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity;

interface Payload
{
    /**
     * @return string
     */
    public function eventName(): string;
    /**
     * @return string
     */
    public function organizationUuid(): string;
    /**
     * @return string
     */
    public function messageId(): string;
    /**
     * @return array<string, mixed>
     */
    public function payload(): array;
}
interface PayloadFactory
{
    public function fromArray(array $data): \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Payload;
}
interface Webhook
{
    public function uuid(): string;
    public function contactEmail(): string;
    public function destination(): \Psr\Http\Message\UriInterface;
    public function eventNames(): array;
    /**
     * @param array $eventNames
     */
    public function changeEventNames(array $eventNames): void;
}
interface RegisteredWebhook extends \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Webhook
{
    public function status(): string;
    public function signingKey(): string;
}
class ZettleWebhook implements \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Webhook
{
    const TRANSPORT_NAME = 'WEBHOOK';
    /**
     * @var string
     */
    private $uuid;
    /**
     * @var array
     */
    private $eventNames;
    /**
     * @var \Psr\Http\Message\UriInterface
     */
    private $destination;
    /**
     * @var string
     */
    private $contactEmail;
    public function __construct(string $uuid, array $eventNames, \Psr\Http\Message\UriInterface $destination, string $contactEmail)
    {
    }
    public function uuid(): string
    {
    }
    public function contactEmail(): string
    {
    }
    public function destination(): \Psr\Http\Message\UriInterface
    {
    }
    public function eventNames(): array
    {
    }
    /**
     * @param array $eventNames
     */
    public function changeEventNames(array $eventNames): void
    {
    }
}
class RegisteredZettleWebhook extends \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\ZettleWebhook implements \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\RegisteredWebhook
{
    /**
     * @var string
     */
    private $status;
    /**
     * @var string
     */
    private $signingKey;
    public function __construct(string $uuid, array $eventNames, \Psr\Http\Message\UriInterface $destination, string $contactEmail, string $status, string $signingKey)
    {
    }
    public function status(): string
    {
    }
    public function signingKey(): string
    {
    }
}
interface WebhookFactory
{
    /**
     * @param array $data
     *
     * @return Webhook
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\WebhookException
     */
    public function fromArray(array $data): \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Webhook;
}
interface WebhookStatus
{
    const ACTIVE = 'ACTIVE';
}
class ZettlePayload implements \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Payload
{
    /**
     * @var string
     */
    private $eventName;
    /**
     * @var string
     */
    private $organizationUuid;
    /**
     * @var string
     */
    private $messageUuid;
    /**
     * @var array
     */
    private $payload;
    public function __construct(string $eventName, string $organizationUuid, string $messageUuid, array $payload)
    {
    }
    /**
     * @inheritDoc
     */
    public function eventName(): string
    {
    }
    /**
     * @inheritDoc
     */
    public function organizationUuid(): string
    {
    }
    /**
     * @inheritDoc
     */
    public function messageId(): string
    {
    }
    /**
     * @inheritDoc
     */
    public function payload(): array
    {
    }
}
class ZettlePayloadFactory implements \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\PayloadFactory
{
    public function fromArray(array $data): \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Payload
    {
    }
}
class ZettleWebhookFactory implements \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\WebhookFactory
{
    public function fromArray(array $data): \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Webhook
    {
    }
    private function createInstance(array $data): \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Webhook
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\API\Webhooks;

class Subscriptions
{
    private $uri;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\RestClientInterface
     */
    private $restClient;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\WebhookFactory
     */
    private $webhookFactory;
    public function __construct(\Psr\Http\Message\UriInterface $uri, \Inpsyde\Zettle\PhpSdk\RestClientInterface $restClient, \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\WebhookFactory $webhookFactory)
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\ZettleWebhook[]
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\WebhookException|\Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    public function list(): array
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Webhook $webhook
     *
     * @return \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Webhook
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\WebhookException|\Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    public function create(\Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Webhook $webhook): \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Webhook
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Webhook $webhook
     *
     * @return void
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    public function update(\Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Webhook $webhook): void
    {
    }
    /**
     * @param string $uuid
     *
     * @return void
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    public function delete(string $uuid): void
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk;

class Bootstrap
{
    /** @var $tables */
    private $tables;
    /**
     * Bootstrap constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DB\Table ...$tables
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DB\Table ...$tables)
    {
    }
    public function activate()
    {
    }
    /**
     * @param \wpdb $wpdb
     */
    private function createTables(\wpdb $wpdb)
    {
    }
    /**
     * phpcs:disable WordPress.DB.PreparedSQL.InterpolatedNotPrepared
     */
    public function deactivate()
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\Builder;

interface BuilderInterface
{
    /**
     * @param string $className
     * @param mixed $payload
     * @param BuilderInterface|null $builder
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     * @return mixed
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\BuilderException
     */
    public function build(string $className, $payload, ?\Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder = null);
}
interface TypeSpecificBuilderInterface extends \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface
{
    /**
     * @param $payload
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     * @return bool
     */
    public function accepts($payload): bool;
}
/**
 * Class ArrayBuilder
 * Decorates another Builder, but registers it only for arrays
 *
 * @package Inpsyde\Zettle\PhpSdk\Builder
 */
class ArrayBuilder implements \Inpsyde\Zettle\PhpSdk\Builder\TypeSpecificBuilderInterface
{
    /**
     * @var BuilderInterface
     */
    private $builder;
    /**
     * @inheritDoc
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder)
    {
    }
    /**
     * @inheritDoc
     */
    public function build(string $className, $payload, ?\Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder = null)
    {
    }
    /**
     * @param $payload
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     *
     * @return bool
     */
    public function accepts($payload): bool
    {
    }
}
trait AttributeFormatterTrait
{
    /**
     * @param \WC_Product_Attribute|string $attribute
     *
     * @return string
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     */
    protected function attributeName($attribute): string
    {
    }
    protected function formatAttributeName(string $name): string
    {
    }
    private function attributeNameFromAttribute(\WC_Product_Attribute $attribute): string
    {
    }
    private function attributeNameFromTaxonomy(\WP_Taxonomy $taxonomy): string
    {
    }
    protected function nameFromTerm(\WP_Term $term): string
    {
    }
    protected function fromAttribute(\WC_Product_Attribute $attribute): array
    {
    }
}
class AttributeSetBuilder implements \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface
{
    use \Inpsyde\Zettle\PhpSdk\Builder\AttributeFormatterTrait;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface
     */
    private $repository;
    public function __construct(\Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository)
    {
    }
    /**
     * @inheritDoc
     *
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     */
    public function build(string $className, $payload, ?\Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder = null): \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\AttributeSet
    {
    }
    /**
     * @param \WC_Product_Variable $wcProduct
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\AttributeSet $attributeSet
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\AttributeSet
     */
    public function processVariable(\WC_Product_Variable $wcProduct, \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\AttributeSet $attributeSet): \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\AttributeSet
    {
    }
    /**
     * @param \WC_Product_Variation $variation Variation to generate Attributes from
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\AttributeSet $attributeSet Current AttributeSet Instance -
     *                                              No Reference Operator, because of type-hint
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\AttributeSet                         Return Updated AttributeSet
     *
     * phpcs:disable Inpsyde.CodeQuality.FunctionLength.TooLong
     * phpcs:disable Generic.Metrics.NestingLevel.MaxExceeded
     * phpcs:disable Generic.Metrics.CyclomaticComplexity.TooHigh
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    public function processVariation(\WC_Product_Variation $variation, \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\AttributeSet $attributeSet): \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\AttributeSet
    {
    }
    /**
     * Store the WP_Term objects of a taxonomy attribute so that they can be accessed by key
     *
     * @param \WC_Product_Attribute $attribute
     *
     * @return \WP_Term[]
     */
    private function attributeTermsAssoc(\WC_Product_Attribute $attribute): array
    {
    }
    /**
     * @param \WC_Product $product
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\AttributeSet $attributeSet
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\AttributeSet
     */
    public function processSimple(\WC_Product $product, \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\AttributeSet $attributeSet): \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\AttributeSet
    {
    }
}
class CallbackBuilder implements \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface
{
    /**
     * @var callable
     */
    private $callback;
    public function __construct(callable $callback)
    {
    }
    /**
     * @inheritDoc
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     */
    public function build(string $className, $payload, ?\Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder = null)
    {
    }
}
class ContainerAwareBuilder implements \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface
{
    /**
     * @var \Psr\Container\ContainerInterface
     */
    private $container;
    public function __construct(\Psr\Container\ContainerInterface $container)
    {
    }
    /**
     * @inheritDoc
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     */
    public function build(string $className, $payload, ?\Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder = null)
    {
    }
}
/**
 * Class FilterableBuilder
 * Decorates another Builder and runs its result through a Filter
 *
 * @package Inpsyde\Zettle\PhpSdk\Builder
 */
class FilterableBuilder implements \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface
{
    /**
     * @var BuilderInterface
     */
    private $builder;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Filter\FilterInterface
     */
    private $filter;
    public function __construct(\Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder, \Inpsyde\Zettle\PhpSdk\Filter\FilterInterface $filter)
    {
    }
    /**
     * @inheritDoc
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     */
    public function build(string $className, $payload, ?\Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder = null)
    {
    }
}
class ImageBuilder implements \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface
{
    /**
     * @inheritDoc
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     */
    public function build(string $className, $payload, ?\Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder = null): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageInterface
    {
    }
    private function findLookupKey(array $payload): string
    {
    }
    /**
     * @param string $url
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ConcreteImage
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\Validator\Image\UnexpectedImageUrlException
     */
    private function lookupKeyFromZettleUrl(string $url): string
    {
    }
}
class PriceBuilder implements \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface
{
    /**
     * @var \Psr\Container\ContainerInterface
     */
    private $wooCommerceConfig;
    /**
     * @var string
     */
    private $taxationMode;
    public function __construct(\Psr\Container\ContainerInterface $wooCommerceConfig, string $taxationMode)
    {
    }
    /**
     * @inheritDoc
     *
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     */
    public function build(string $className, $payload, ?\Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder = null): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price
    {
    }
}
class TypeDelegatingBuilder implements \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface
{
    /**
     * @var TypeSpecificBuilderInterface[]
     */
    private $builders;
    public function __construct(\Inpsyde\Zettle\PhpSdk\Builder\TypeSpecificBuilderInterface ...$builders)
    {
    }
    /**
     * @inheritDoc
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\BuilderException
     */
    public function build(string $className, $payload, ?\Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder = null)
    {
    }
    private function inferType($payload): string
    {
    }
}
/**
 * Class ValidatableBuilder
 * Decorated another Builder and validates its result
 *
 * @package Inpsyde\Zettle\PhpSdk\Builder
 */
class ValidatableBuilder implements \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface
{
    /**
     * @var BuilderInterface
     */
    private $builder;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Validator\ValidatorInterface
     */
    private $validator;
    public function __construct(\Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder, \Inpsyde\Zettle\PhpSdk\Validator\ValidatorInterface $validator)
    {
    }
    /**
     * @inheritDoc
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     */
    public function build(string $className, $payload, ?\Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder = null)
    {
    }
}
class VariantBuilder implements \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface
{
    /**
     * @var callable
     */
    private $onException;
    /**
     * @var string
     */
    private $taxationType;
    /**
     * @var \Inpsyde\Zettle\ProductSettings\Barcode\Repository\BarcodeRetrieverInterface
     */
    private $barcodeRetriever;
    /**
     * @var bool
     */
    private $priceSyncEnabled;
    public function __construct(callable $onException, string $taxationType, bool $priceSyncEnabled, \Inpsyde\Zettle\ProductSettings\Barcode\Repository\BarcodeRetrieverInterface $barcodeRetriever)
    {
    }
    /**
     * @param string $className
     * @param mixed $wcProduct
     * @param BuilderInterface|null $builder
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantInterface
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\BuilderException
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
     */
    public function build(string $className, $wcProduct, ?\Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder = null)
    {
    }
    /**
     * @param \WC_Product $product
     *
     * @return int
     */
    private function stockQuantity(\WC_Product $product): int
    {
    }
    /**
     * @param \WC_Product_Variable $product
     *
     * @return bool
     */
    private function hasStockManagingVariations(\WC_Product_Variable $product): bool
    {
    }
}
class VariantOptionCollectionBuilder implements \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface
{
    /**
     * @inheritDoc
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     */
    public function build(string $className, $payload, ?\Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder = null): \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection
    {
    }
    private function setToCollection(\Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\AttributeSet $set, \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder): \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection
    {
    }
}
class VariantOptionDefinitionsBuilder implements \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface
{
    /**
     * @inheritDoc
     *
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     */
    public function build(string $className, $payload, ?\Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder = null): \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionDefinitions
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\AttributeSet $set
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionDefinitions
     */
    private function setToDefinitions(\Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\AttributeSet $set): \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionDefinitions
    {
    }
}
/**
 * Class WooCommerceBuilder
 * Decorates another builder, but registers if only for WooCommerce types
 * @package Inpsyde\Zettle\PhpSdk\Builder
 */
class WooCommerceBuilder implements \Inpsyde\Zettle\PhpSdk\Builder\TypeSpecificBuilderInterface
{
    /**
     * @var BuilderInterface
     */
    private $builder;
    public function __construct(\Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder)
    {
    }
    /**
     * @inheritDoc
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     */
    public function build(string $className, $payload, ?\Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder = null)
    {
    }
    /**
     * @param $payload
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     *
     * @return bool
     */
    public function accepts($payload): bool
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\Config;

class WooCommerceConfigContainer implements \Psr\Container\ContainerInterface
{
    /**
     * @param string $id
     *
     * @return mixed|void
     *
     * @throws \RuntimeException
     */
    public function get($id)
    {
    }
    /**
     * @param string $id
     *
     * @return bool
     */
    public function has($id): bool
    {
    }
    private function key(string $id): string
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Builder;

abstract class AbstractBuilder
{
    /**
     * @param string $key
     * @param array $data
     * @return mixed|null
     */
    // phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
    protected function getDataFromKey(string $key, array $data)
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Builder\Balance;

interface BalanceBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\Balance
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\Balance;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\Balance $balance
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\Balance $balance): array;
}
class BalanceBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Balance\BalanceBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\BalanceFactory
     */
    private $balanceFactory;
    /**
     * BalanceBuilder constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\BalanceFactory $balanceFactory
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\BalanceFactory $balanceFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\Balance
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\Balance $balance): array
    {
    }
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\Balance
     */
    private function build(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\Balance
    {
    }
}
interface LocationBalanceBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalance
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalance;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalance $locationBalance
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalance $locationBalance): array;
}
class LocationBalanceBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Balance\LocationBalanceBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalanceFactory
     */
    private $locationBalanceFactory;
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalanceFactory $locationBalanceFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalance
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalance $locationBalance): array
    {
    }
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalance
     */
    private function build(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalance
    {
    }
}
interface LocationBalanceCollectionBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection $locationBalanceCollection
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection $locationBalanceCollection): array;
}
class LocationBalanceCollectionBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Balance\LocationBalanceCollectionBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalanceCollectionFactory
     */
    private $locationBalanceCollectionFactory;
    /**
     * @var LocationBalanceBuilder
     */
    private $locationBalanceBuilder;
    /**
     * LocationBalanceCollectionBuilder constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalanceCollectionFactory $locationBalanceCollectionFactory
     * @param LocationBalanceBuilderInterface $locationBalanceBuilder
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalanceCollectionFactory $locationBalanceCollectionFactory, \Inpsyde\Zettle\PhpSdk\DAL\Builder\Balance\LocationBalanceBuilderInterface $locationBalanceBuilder)
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection $locationBalanceCollection): array
    {
    }
}
interface ProductBalanceBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\ProductBalance
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\ProductBalance;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\ProductBalance $productBalance
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\ProductBalance $productBalance): array;
}
class ProductBalanceBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Balance\ProductBalanceBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\ProductBalanceFactory
     */
    private $productBalanceFactory;
    /**
     * @var LocationBalanceCollectionBuilder
     */
    private $locationBalanceCollectionBuilder;
    /**
     * ProductBalanceBuilder constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\ProductBalanceFactory $productBalanceFactory
     * @param LocationBalanceCollectionBuilderInterface $locationBalanceCollectionBuilder
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\ProductBalanceFactory $productBalanceFactory, \Inpsyde\Zettle\PhpSdk\DAL\Builder\Balance\LocationBalanceCollectionBuilderInterface $locationBalanceCollectionBuilder)
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\ProductBalance
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\ProductBalance $productBalance): array
    {
    }
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\ProductBalance
     */
    private function build(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\ProductBalance
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Builder;

interface BuilderInterface
{
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Builder\Category;

interface CategoryBuilderInterface extends \Inpsyde\Zettle\PhpSdk\DAL\Builder\BuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category $category
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category $category): array;
    /**
     * @param string $categoryName
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category
     */
    public function buildFromString(string $categoryName): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category $category
     *
     * @return string
     */
    public function createDataString(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category $category): string;
}
class CategoryBuilder extends \Inpsyde\Zettle\PhpSdk\DAL\Builder\AbstractBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Category\CategoryBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\CategoryFactory
     */
    private $categoryFactory;
    /**
     * CategoryBuilder constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\CategoryFactory $categoryFactory
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\CategoryFactory $categoryFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category $category): array
    {
    }
    /**
     * @param string $categoryName
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category
     */
    public function buildFromString(string $categoryName): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category $category
     *
     * @return string
     */
    public function createDataString(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category $category): string
    {
    }
    /**
     * @param array $data
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category
     *
     * @throws \Exception
     */
    private function build(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category
    {
    }
    /**
     * @param string $name
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category
     */
    private function buildWithName(string $name): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category
    {
    }
}
interface CategoryCollectionBuilderInterface extends \Inpsyde\Zettle\PhpSdk\DAL\Builder\BuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\CategoryCollection
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\CategoryCollection;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\CategoryCollection $categoryCollection
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\CategoryCollection $categoryCollection): array;
}
class CategoryCollectionBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Category\CategoryCollectionBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\CategoryCollectionFactory
     */
    private $categoryCollectionFactory;
    /**
     * @var CategoryBuilder
     */
    private $categoryBuilder;
    /**
     * CategoryCollectionBuilder constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\CategoryCollectionFactory $categoryCollectionFactory
     * @param CategoryBuilderInterface $categoryBuilder
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\CategoryCollectionFactory $categoryCollectionFactory, \Inpsyde\Zettle\PhpSdk\DAL\Builder\Category\CategoryBuilderInterface $categoryBuilder)
    {
    }
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\CategoryCollection
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\CategoryCollection
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\CategoryCollection $categoryCollection
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\CategoryCollection $categoryCollection): array
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Builder\Coordinates;

interface CoordinatesBuilderInterface extends \Inpsyde\Zettle\PhpSdk\DAL\Builder\BuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Coordinates\Coordinates
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Coordinates\Coordinates;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Coordinates\Coordinates $coordinates
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Coordinates\Coordinates $coordinates): array;
}
final class CoordinatesBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Coordinates\CoordinatesBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Coordinates\CoordinatesFactory
     */
    private $coordinatesFactory;
    /**
     * CoordinatesBuilder constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Coordinates\CoordinatesFactory $coordinatesFactory
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Coordinates\CoordinatesFactory $coordinatesFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Coordinates\Coordinates
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Coordinates\Coordinates $coordinates): array
    {
    }
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Coordinates\Coordinates
     */
    private function build(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Coordinates\Coordinates
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Builder\Discount;

interface DiscountBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\Discount
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\Discount;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\Discount $discount
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\Discount $discount): array;
}
class DiscountBuilder extends \Inpsyde\Zettle\PhpSdk\DAL\Builder\AbstractBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Discount\DiscountBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\DiscountFactory
     */
    private $discountFactory;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Builder\Image\ImageCollectionBuilderInterface
     */
    private $imageCollectionBuilder;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Builder\Price\PriceBuilderInterface
     */
    private $priceBuilder;
    /**
     * DiscountBuilder constructor.
     *
     *  @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\DiscountFactory $discountFactory
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Builder\Image\ImageCollectionBuilderInterface $imageCollectionBuilder
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Builder\Price\PriceBuilderInterface $priceBuilder
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\DiscountFactory $discountFactory, \Inpsyde\Zettle\PhpSdk\DAL\Builder\Image\ImageCollectionBuilderInterface $imageCollectionBuilder, \Inpsyde\Zettle\PhpSdk\DAL\Builder\Price\PriceBuilderInterface $priceBuilder)
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\Discount
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\Discount $discount): array
    {
    }
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\Discount
     *
     * @throws \Exception
     */
    private function build(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\Discount
    {
    }
}
interface DiscountCollectionBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\DiscountCollection
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\DiscountCollection;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\DiscountCollection $discountCollection
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\DiscountCollection $discountCollection): array;
}
class DiscountCollectionBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Discount\DiscountCollectionBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\DiscountCollectionFactory
     */
    private $discountCollectionFactory;
    /**
     * @var DiscountBuilder
     */
    private $discountBuilder;
    /**
     * DiscountCollectionBuilder constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\DiscountCollectionFactory $discountCollectionFactory
     * @param DiscountBuilderInterface $discountBuilder
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\DiscountCollectionFactory $discountCollectionFactory, \Inpsyde\Zettle\PhpSdk\DAL\Builder\Discount\DiscountBuilderInterface $discountBuilder)
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\DiscountCollection
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\DiscountCollection $discountCollection): array
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Builder\Finance;

interface AccountTransactionBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\AccountTransaction
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\AccountTransaction;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\AccountTransaction $accountTransaction
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\AccountTransaction $accountTransaction): array;
}
class AccountTransactionBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Finance\AccountTransactionBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\AccountTransactionFactory
     */
    private $accountTransactionFactory;
    /**
     * AccountTransactionBuilder constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\AccountTransactionFactory $accountTransactionFactory
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\AccountTransactionFactory $accountTransactionFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\AccountTransaction
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\AccountTransaction $accountTransaction): array
    {
    }
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\AccountTransaction
     */
    private function build(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\AccountTransaction
    {
    }
}
interface BalanceInfoBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\BalanceInfo
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\BalanceInfo;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\BalanceInfo $balanceInfo
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\BalanceInfo $balanceInfo): array;
}
class BalanceInfoBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Finance\BalanceInfoBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\BalanceInfoFactory
     */
    private $balanceInfoFactory;
    /**
     * BalanceInfoBuilder constructor.
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\BalanceInfoFactory $balanceInfoFactory
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\BalanceInfoFactory $balanceInfoFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\BalanceInfo
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\BalanceInfo $balanceInfo): array
    {
    }
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\BalanceInfo
     */
    private function build(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\BalanceInfo
    {
    }
}
interface PayoutInfoBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\PayoutInfo
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\PayoutInfo;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\PayoutInfo $payoutInfo
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\PayoutInfo $payoutInfo): array;
}
class PayoutInfoBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Finance\PayoutInfoBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\PayoutInfoFactory
     */
    private $payoutInfoFactory;
    /**
     * PayoutInfoBuilder constructor.
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\PayoutInfoFactory $payoutInfoFactory
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\PayoutInfoFactory $payoutInfoFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\PayoutInfo
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\PayoutInfo $payoutInfo): array
    {
    }
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\PayoutInfo
     */
    private function build(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\PayoutInfo
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment;

interface CardOnlinePaymentBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CardOnlinePayment
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CardOnlinePayment;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CardOnlinePayment $cardOnlinePayment
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CardOnlinePayment $cardOnlinePayment): array;
}
class CardOnlinePaymentBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\CardOnlinePaymentBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory
     */
    private $paymentFactory;
    /**
     * CardOnlinePaymentBuilder constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory $paymentFactory
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory $paymentFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CardOnlinePayment $cardOnlinePayment): array
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CardOnlinePayment
    {
    }
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CardOnlinePayment
     *
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\EntityFactoryException
     */
    private function build(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CardOnlinePayment
    {
    }
}
interface CardPaymentBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CardPayment
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CardPayment;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CardPayment $cardPayment
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CardPayment $cardPayment): array;
}
class CardPaymentBuilder extends \Inpsyde\Zettle\PhpSdk\DAL\Builder\AbstractBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\CardPaymentBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory
     */
    private $paymentFactory;
    /**
     * CardOnlinePaymentBuilder constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory $paymentFactory
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory $paymentFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CardPayment $cardPayment): array
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CardPayment
    {
    }
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CardPayment
     *
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\EntityFactoryException
     */
    private function build(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CardPayment
    {
    }
}
interface CashPaymentBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CashPayment
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CashPayment;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CashPayment $cashPayment
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CashPayment $cashPayment): array;
}
class CashPaymentBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\CashPaymentBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory
     */
    private $paymentFactory;
    /**
     * CardOnlinePaymentBuilder constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory $paymentFactory
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory $paymentFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CashPayment $cashPayment): array
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CashPayment
    {
    }
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CashPayment
     *
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\EntityFactoryException
     */
    private function build(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CashPayment
    {
    }
}
interface CustomPaymentBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CustomPayment
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CustomPayment;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CustomPayment $customPayment
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CustomPayment $customPayment): array;
}
class CustomPaymentBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\CustomPaymentBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory
     */
    private $paymentFactory;
    /**
     * CardOnlinePaymentBuilder constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory $paymentFactory
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory $paymentFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CustomPayment $customPayment): array
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CustomPayment
    {
    }
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CustomPayment
     *
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\EntityFactoryException
     */
    private function build(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CustomPayment
    {
    }
}
interface GiftcardPaymentBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\GiftCardPayment
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\GiftCardPayment;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\GiftCardPayment $giftCardPayment
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\GiftCardPayment $giftCardPayment): array;
}
class GiftcardPaymentBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\GiftcardPaymentBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory
     */
    private $paymentFactory;
    /**
     * CardOnlinePaymentBuilder constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory $paymentFactory
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory $paymentFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\GiftCardPayment $giftCardPayment): array
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\GiftCardPayment
    {
    }
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\GiftCardPayment
     *
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\EntityFactoryException
     */
    private function build(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\GiftCardPayment
    {
    }
}
interface InvoicePaymentBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\InvoicePayment
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\InvoicePayment;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\InvoicePayment $invoicePayment
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\InvoicePayment $invoicePayment): array;
}
class InvoicePaymentBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\InvoicePaymentBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory
     */
    private $paymentFactory;
    /**
     * CardOnlinePaymentBuilder constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory $paymentFactory
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory $paymentFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\InvoicePayment $invoicePayment): array
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\InvoicePayment
    {
    }
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\InvoicePayment
     *
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\EntityFactoryException
     */
    private function build(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\InvoicePayment
    {
    }
}
interface KlarnaPaymentBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\KlarnaPayment
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\KlarnaPayment;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\KlarnaPayment $klarnaPayment
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\KlarnaPayment $klarnaPayment): array;
}
class KlarnaPaymentBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\KlarnaPaymentBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory
     */
    private $paymentFactory;
    /**
     * CardOnlinePaymentBuilder constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory $paymentFactory
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory $paymentFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\KlarnaPayment $klarnaPayment): array
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\KlarnaPayment
    {
    }
    private function build(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\KlarnaPayment
    {
    }
}
interface MobilePaymentBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\MobilePayment
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\MobilePayment;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\MobilePayment $mobilePayment
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\MobilePayment $mobilePayment): array;
}
class MobilePaymentBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\MobilePaymentBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory
     */
    private $paymentFactory;
    /**
     * CardOnlinePaymentBuilder constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory $paymentFactory
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory $paymentFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\MobilePayment $mobilePayment): array
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\MobilePayment
    {
    }
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\MobilePayment
     *
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\EntityFactoryException
     */
    private function build(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\MobilePayment
    {
    }
}
interface PaymentBuilderInterface extends \Inpsyde\Zettle\PhpSdk\DAL\Builder\BuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod $paymentMethod
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod $paymentMethod): array;
}
final class PaymentBuilder extends \Inpsyde\Zettle\PhpSdk\DAL\Builder\AbstractBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\PaymentBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Handler\Payment\PaymentHandlerInterface[]
     */
    private $paymentHandlers;
    /**
     * Payment constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Handler\Payment\PaymentHandlerInterface[] $paymentHandlers
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Handler\Payment\PaymentHandlerInterface ...$paymentHandlers)
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod $payment): array
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
    {
    }
}
interface PaymentCollectionBuilderInterface
{
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentCollection $paymentCollection
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentCollection $paymentCollection): array;
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentCollection
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentCollection;
}
class PaymentCollectionBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\PaymentCollectionBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentCollectionFactory
     */
    private $paymentCollectionFactory;
    /**
     * @var PaymentBuilderInterface
     */
    private $paymentBuilder;
    /**
     * PaymentCollectionBuilder constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentCollectionFactory $paymentCollectionFactory
     * @param PaymentBuilderInterface $paymentBuilder
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentCollectionFactory $paymentCollectionFactory, \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\PaymentBuilderInterface $paymentBuilder)
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentCollection $paymentCollection): array
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentCollection
    {
    }
}
interface PaypalPaymentBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaypalPayment
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaypalPayment;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaypalPayment $paypalPayment
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaypalPayment $paypalPayment): array;
}
class PaypalPaymentBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\PaypalPaymentBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory
     */
    private $paymentFactory;
    /**
     * CardOnlinePaymentBuilder constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory $paymentFactory
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory $paymentFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaypalPayment $paypalPayment): array
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaypalPayment
    {
    }
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaypalPayment
     *
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\EntityFactoryException
     */
    private function build(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaypalPayment
    {
    }
}
interface StoreCreditPaymentBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\StoreCreditPayment
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\StoreCreditPayment;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\StoreCreditPayment $storeCreditPayment
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\StoreCreditPayment $storeCreditPayment): array;
}
class StoreCreditPaymentBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\StoreCreditPaymentBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory
     */
    private $paymentFactory;
    /**
     * CardOnlinePaymentBuilder constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory $paymentFactory
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory $paymentFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\StoreCreditPayment $storeCreditPayment): array
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\StoreCreditPayment
    {
    }
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\StoreCreditPayment
     *
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\EntityFactoryException
     */
    private function build(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\StoreCreditPayment
    {
    }
}
interface SwishPaymentBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\SwishPayment
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\SwishPayment;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\SwishPayment $swishPayment
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\SwishPayment $swishPayment): array;
}
class SwishPaymentBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\SwishPaymentBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory
     */
    private $paymentFactory;
    /**
     * CardOnlinePaymentBuilder constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory $paymentFactory
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory $paymentFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\SwishPayment $swishPayment): array
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\SwishPayment
    {
    }
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\SwishPayment
     *
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\EntityFactoryException
     */
    private function build(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\SwishPayment
    {
    }
}
interface VippsPaymentBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\VippsPayment
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\VippsPayment;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\VippsPayment $vippsPayment
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\VippsPayment $vippsPayment): array;
}
class VippsPaymentBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\VippsPaymentBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory
     */
    private $paymentFactory;
    /**
     * CardOnlinePaymentBuilder constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory $paymentFactory
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentFactory $paymentFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\VippsPayment $vippsPayment): array
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\VippsPayment
    {
    }
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\VippsPayment
     *
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\EntityFactoryException
     */
    private function build(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\VippsPayment
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Builder\Purchase;

interface PurchaseBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\Purchase
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\Purchase;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\Purchase $purchase
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\Purchase $purchase): array;
}
class PurchaseBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Purchase\PurchaseBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseFactory
     */
    private $purchaseFactory;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Builder\User\UserBuilder
     */
    private $userBuilder;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Builder\Coordinates\CoordinatesBuilder
     */
    private $coordinatesBuilder;
    /**
     * PurchaseBuilder constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseFactory $purchaseFactory
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Builder\User\UserBuilderInterface $userBuilder
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Builder\Coordinates\CoordinatesBuilderInterface $coordinatesBuilder
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseFactory $purchaseFactory, \Inpsyde\Zettle\PhpSdk\DAL\Builder\User\UserBuilderInterface $userBuilder, \Inpsyde\Zettle\PhpSdk\DAL\Builder\Coordinates\CoordinatesBuilderInterface $coordinatesBuilder)
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\Purchase
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\Purchase $purchase): array
    {
    }
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\Purchase
     *
     * @throws \Exception
     */
    private function build(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\Purchase
    {
    }
}
interface PurchaseCollectionBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseCollection
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseCollection;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseCollection $purchaseCollection
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseCollection $purchaseCollection): array;
}
class PurchaseCollectionBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Purchase\PurchaseCollectionBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseCollectionFactory
     */
    private $purchaseCollectionFactory;
    /**
     * @var PurchaseBuilder
     */
    private $purchaseBuilder;
    /**
     * PurchaseCollectionBuilder constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseCollectionFactory $purchaseCollectionFactory
     * @param PurchaseBuilderInterface $purchaseBuilder
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseCollectionFactory $purchaseCollectionFactory, \Inpsyde\Zettle\PhpSdk\DAL\Builder\Purchase\PurchaseBuilderInterface $purchaseBuilder)
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseCollection
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseCollection $purchaseCollection): array
    {
    }
}
interface PurchaseHistoryBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseHistory
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseHistory;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseHistory $purchase
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseHistory $purchase): array;
}
class PurchaseHistoryBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Purchase\PurchaseHistoryBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseHistoryFactory
     */
    private $purchaseHistoryFactory;
    /**
     * @var PurchaseCollectionBuilder
     */
    private $purchaseCollectionBuilder;
    /**
     * PurchaseHistoryBuilder constructor.
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseHistoryFactory $purchaseHistoryFactory
     * @param PurchaseCollectionBuilderInterface $purchaseCollectionBuilder
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseHistoryFactory $purchaseHistoryFactory, \Inpsyde\Zettle\PhpSdk\DAL\Builder\Purchase\PurchaseCollectionBuilderInterface $purchaseCollectionBuilder)
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseHistory $purchase): array
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseHistory
    {
    }
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseHistory
     */
    private function build(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseHistory
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Builder\Repository\Variant;

interface VariantBuilderRepositoryInterface
{
    /**
     * @param \WC_Product $wcProduct
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantCollection $collection
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantCollection
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\BuilderException If failed to build Variant from WC
     */
    public function addToCollection(\WC_Product $wcProduct, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantCollection $collection): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantCollection;
}
class VariantBuilderRepository implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\Repository\Variant\VariantBuilderRepositoryInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface
     */
    private $builder;
    /**
     * VariantBuilderRepository constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder)
    {
    }
    /**
     * @inheritDoc
     */
    public function addToCollection(\WC_Product $wcProduct, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantCollection $collection): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantCollection
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Builder\User;

interface UserBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\User\User
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\User\User;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\User\User $user
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\User\User $user): array;
}
class UserBuilder implements \Inpsyde\Zettle\PhpSdk\DAL\Builder\User\UserBuilderInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\User\UserFactory
     */
    private $userFactory;
    /**
     * UserBuilder constructor.
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\User\UserFactory $userFactory
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\User\UserFactory $userFactory)
    {
    }
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\User\User
     */
    public function buildFromArray(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\User\User
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\User\User $user
     *
     * @return array
     */
    public function createDataArray(\Inpsyde\Zettle\PhpSdk\DAL\Entity\User\User $user): array
    {
    }
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\User\User
     */
    private function build(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\User\User
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Connection;

interface ConnectionType
{
    const PRODUCT = 'product';
    const VARIANT = 'variant';
    const IMAGE = 'image';
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance;

class Balance
{
    /**
     * @var string
     */
    private $productUuid;
    /**
     * @var string
     */
    private $variantUuid;
    /**
     * @var int
     */
    private $balance;
    /**
     * Balance constructor.
     *
     * @param string $productUuid
     * @param string $variantUuid
     * @param int $balance
     */
    public function __construct(string $productUuid, string $variantUuid, int $balance)
    {
    }
    /**
     * @return string
     */
    public function productUuid(): string
    {
    }
    /**
     * @return string
     */
    public function variantUuid(): string
    {
    }
    /**
     * @return int
     */
    public function balance(): int
    {
    }
}
class BalanceFactory
{
    /**
     * @param string $productUuid
     * @param string $variantUuid
     * @param string $balance
     *
     * @return Balance
     */
    public function create(string $productUuid, string $variantUuid, string $balance): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\Balance
    {
    }
}
class LocationBalance
{
    /**
     * @var string
     */
    private $locationUuid;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Location\Type\LocationType
     */
    private $locationType;
    /**
     * @var string
     */
    private $productUuid;
    /**
     * @var string
     */
    private $variantUuid;
    /**
     * @var int
     */
    private $balance;
    /**
     * LocationBalance constructor.
     * @param string $locationUuid
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Location\Type\LocationType $locationType
     * @param string $productUuid
     * @param string $variantUuid
     * @param int $balance
     */
    public function __construct(string $locationUuid, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Location\Type\LocationType $locationType, string $productUuid, string $variantUuid, int $balance)
    {
    }
    /**
     * @return string
     */
    public function locationUuid(): string
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Location\Type\LocationType
     */
    public function locationType(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Location\Type\LocationType
    {
    }
    /**
     * @return string
     */
    public function productUuid(): string
    {
    }
    /**
     * @return string
     */
    public function variantUuid(): string
    {
    }
    /**
     * @return int
     */
    public function balance(): int
    {
    }
}
class LocationBalanceCollection
{
    /**
     * @var LocationBalance[]
     */
    private $collection = [];
    /**
     * LocationBalanceCollection constructor.
     *
     * @param array|null $locationBalances
     */
    public function __construct(?array $locationBalances = [])
    {
    }
    /**
     * @param LocationBalance $locationBalance
     *
     * @return LocationBalanceCollection
     */
    public function add(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalance $locationBalance): self
    {
    }
    /**
     * @param LocationBalance $locationBalance
     *
     * @return LocationBalanceCollection
     */
    public function remove(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalance $locationBalance): self
    {
    }
    /**
     * @param string $locationUuid
     *
     * @return LocationBalance
     */
    public function get(string $locationUuid): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalance
    {
    }
    /**
     * @return LocationBalance[]
     */
    public function all(): array
    {
    }
    /**
     * @return LocationBalanceCollection
     */
    public function reset(): self
    {
    }
}
class LocationBalanceCollectionFactory
{
    /**
     * @return LocationBalanceCollection
     */
    public function create(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection
    {
    }
}
class LocationBalanceFactory
{
    /**
     * @param string $locationUuid
     * @param string $locationType
     * @param string $productUuid
     * @param string $variantUuid
     * @param string $balance
     *
     * @return LocationBalance
     */
    public function create(string $locationUuid, string $locationType, string $productUuid, string $variantUuid, string $balance): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalance
    {
    }
}
class ProductBalance
{
    /**
     * @var string
     */
    private $locationUuid;
    /**
     * @var LocationBalanceCollection
     */
    private $variants;
    /**
     * ProductBalance constructor.
     * @param string $locationUuid
     * @param LocationBalanceCollection $variants
     */
    public function __construct(string $locationUuid, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection $variants)
    {
    }
    /**
     * @return string
     */
    public function locationUuid(): string
    {
    }
    /**
     * @return LocationBalanceCollection
     */
    public function variants(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection
    {
    }
}
class ProductBalanceFactory
{
    /**
     * @param string $locationUuid
     * @param LocationBalanceCollection $variants
     *
     * @return ProductBalance
     */
    public function create(string $locationUuid, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection $variants): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\ProductBalance
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\Category;

class Category
{
    /**
     * @var string
     */
    private $uuid;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $etag;
    /**
     * @var \DateTime
     */
    private $updatedAt;
    /**
     * @var string
     */
    private $updatedBy;
    /**
     * @var \DateTime
     */
    private $createdAt;
    /**
     * Category constructor.
     *
     * @param string $name
     * @param string|null $uuid
     * @param string|null $etag
     * @param \DateTime|null $createdAt
     * @param \DateTime|null $updatedAt
     * @param string|null $updatedBy
     */
    public function __construct(string $name, ?string $uuid = null, ?string $etag = null, ?\DateTime $createdAt = null, ?\DateTime $updatedAt = null, ?string $updatedBy = null)
    {
    }
    /**
     * @return string
     */
    public function name(): string
    {
    }
    /**
     * @param string $name
     * @return Category
     */
    public function setName(string $name): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category
    {
    }
    /**
     * @return string
     */
    public function uuid(): ?string
    {
    }
    /**
     * @param string $uuid
     * @return Category
     */
    public function setUuid(string $uuid): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category
    {
    }
    /**
     * @return string
     */
    public function etag(): string
    {
    }
    /**
     * @param string $etag
     * @return Category
     */
    public function setEtag(string $etag): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category
    {
    }
    /**
     * @return \DateTime
     */
    public function updatedAt(): ?\DateTime
    {
    }
    /**
     * @param \DateTime $updatedAt
     * @return Category
     */
    public function setUpdatedAt(\DateTime $updatedAt): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category
    {
    }
    /**
     * @return string
     */
    public function updatedBy(): ?string
    {
    }
    /**
     * @param string $updatedBy
     * @return Category
     */
    public function setUpdatedBy(string $updatedBy): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category
    {
    }
    /**
     * @return \DateTime
     */
    public function createdAt(): ?\DateTime
    {
    }
    /**
     * @param \DateTime $createdAt
     * @return Category
     */
    public function setCreatedAt(\DateTime $createdAt): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category
    {
    }
}
final class CategoryCollection
{
    /**
     * @var Category[]
     */
    private $collection = [];
    /**
     * CategoryCollection constructor.
     *
     * @param array|null $categories
     */
    public function __construct(?array $categories = [])
    {
    }
    /**
     * @param Category $category
     *
     * @return CategoryCollection
     */
    public function add(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category $category): self
    {
    }
    /**
     * @param Category $category
     *
     * @return CategoryCollection
     */
    public function remove(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category $category): self
    {
    }
    /**
     * @param string $uuid
     *
     * @return Category
     */
    public function get(string $uuid): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category
    {
    }
    /**
     * @return Category[]
     */
    public function all(): array
    {
    }
    /**
     * @return CategoryCollection
     */
    public function reset(): self
    {
    }
    /**
     * @return array
     */
    public function createDataArray(): array
    {
    }
}
class CategoryCollectionFactory
{
    /**
     * @var CategoryFactory
     */
    private $categoryFactory;
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\CategoryFactory $categoryFactory)
    {
    }
    /**
     * @return CategoryCollection
     */
    public function create(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\CategoryCollection
    {
    }
    /**
     * @param \WC_Product_Variable $wcProductVariable
     *
     * @return CategoryCollection
     *
     * @throws \Exception
     */
    public function createFromWcProductVariable(\WC_Product_Variable $wcProductVariable): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\CategoryCollection
    {
    }
}
class CategoryFactory
{
    /**
     * @param string $name
     * @param string|null $uuid
     * @param string|null $etag
     * @param string|null $createdAt
     * @param string|null $updatedAt
     * @param string|null $updatedBy
     *
     * @return Category
     * @throws \Exception
     */
    public function create(string $name, ?string $uuid = null, ?string $etag = null, ?string $createdAt = null, ?string $updatedAt = null, ?string $updatedBy = null): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category
    {
    }
    /**
     * @param string $name
     * @param string $uuid
     * @param string|null $etag
     * @param string|null $createdAt
     * @param string|null $updatedAt
     * @param string|null $updatedBy
     *
     * @return Category
     *
     * @throws \Exception
     */
    public function createFromUuid(string $name, string $uuid, ?string $etag = null, ?string $createdAt = null, ?string $updatedAt = null, ?string $updatedBy = null): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Category\Category
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\Coordinates;

final class Coordinates
{
    /**
     * @var float
     */
    private $latitude;
    /**
     * @var float
     */
    private $longitude;
    /**
     * @var float
     */
    private $accuracyMeters;
    /**
     * Coordinates constructor.
     *
     * @param float $latitude
     * @param float $longitude
     * @param float $accuracyMeters
     */
    public function __construct(float $latitude, float $longitude, float $accuracyMeters)
    {
    }
    /**
     * @return float
     */
    public function latitude(): float
    {
    }
    /**
     * @return float
     */
    public function longitude(): float
    {
    }
    /**
     * @return float
     */
    public function accuracyMeters(): float
    {
    }
}
class CoordinatesFactory
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Validator\Coordinates\CoordinatesValidator
     */
    private $coordinatesValidator;
    /**
     * CoordinatesFactory constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Validator\Coordinates\CoordinatesValidator $coordinatesValidator
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Validator\Coordinates\CoordinatesValidator $coordinatesValidator)
    {
    }
    /**
     * @param string $latitude
     * @param string $longitude
     * @param string $accuracyMeters
     *
     * @return Coordinates
     *
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\ValidatorException
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\Coordinates\InvalidLatitudeException
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\Coordinates\InvalidLongitudeException
     */
    public function create(string $latitude, string $longitude, string $accuracyMeters): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Coordinates\Coordinates
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount;

class Discount
{
    /**
     * @var string
     */
    private $uuid;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $description;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageCollection|null
     */
    private $imageCollection;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price|null
     */
    private $amount;
    /**
     * @var float|null
     */
    private $percentage;
    /**
     * @var string|null
     */
    private $externalReference;
    /**
     * @var string|null
     */
    private $etag;
    /**
     * @var \DateTime|null
     */
    private $updatedAt;
    /**
     * @var string|null
     */
    private $updatedBy;
    /**
     * @var \DateTime|null
     */
    private $createdAt;
    /**
     * Discount constructor.
     *
     * @param string $uuid
     * @param string $name
     * @param string $description
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageCollection|null $imageCollection
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price|null $amount
     * @param float|null $percentage
     * @param string|null $externalReference
     * @param string|null $etag
     * @param \DateTime|null $updatedAt
     * @param string|null $updatedBy
     * @param \DateTime|null $createdAt
     */
    public function __construct(string $uuid, string $name, string $description, ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageCollection $imageCollection = null, ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price $amount = null, ?float $percentage = null, ?string $externalReference = null, ?string $etag = null, ?\DateTime $updatedAt = null, ?string $updatedBy = null, ?\DateTime $createdAt = null)
    {
    }
    /**
     * @return string
     */
    public function uuid(): string
    {
    }
    /**
     * @param string $uuid
     *
     * @return Discount
     */
    public function setUuid(string $uuid): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\Discount
    {
    }
    /**
     * @return string
     */
    public function name(): string
    {
    }
    /**
     * @param string $name
     *
     * @return Discount
     */
    public function setName(string $name): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\Discount
    {
    }
    /**
     * @return string
     */
    public function description(): string
    {
    }
    /**
     * @param string $description
     *
     * @return Discount
     */
    public function setDescription(string $description): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\Discount
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageCollection|null
     */
    public function imageCollection(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageCollection
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageCollection|null $imageCollection
     *
     * @return Discount
     */
    public function setImageCollection(?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageCollection $imageCollection): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\Discount
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price|null
     */
    public function amount(): ?float
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price $amount
     * @return Discount
     */
    public function setAmount(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price $amount): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\Discount
    {
    }
    /**
     * @return float|null
     */
    public function percentage(): ?float
    {
    }
    /**
     * @param float $percentage
     *
     * @return Discount
     */
    public function setPercentage(float $percentage): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\Discount
    {
    }
    /**
     * @return string|null
     */
    public function externalReference(): ?string
    {
    }
    /**
     * @param string $externalReference
     *
     * @return Discount
     */
    public function setExternalReference(string $externalReference): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\Discount
    {
    }
    /**
     * @return string|null
     */
    public function etag(): ?string
    {
    }
    /**
     * @param string $etag
     *
     * @return Discount
     */
    public function setEtag(string $etag): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\Discount
    {
    }
    /**
     * @return \DateTime|null
     */
    public function updatedAt(): ?\DateTime
    {
    }
    /**
     * @param \DateTime $updatedAt
     *
     * @return Discount
     */
    public function setUpdatedAt(\DateTime $updatedAt): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\Discount
    {
    }
    /**
     * @return string|null
     */
    public function updatedBy(): ?string
    {
    }
    /**
     * @param string $updatedBy
     *
     * @return Discount
     */
    public function setUpdatedBy(string $updatedBy): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\Discount
    {
    }
    /**
     * @return \DateTime|null
     */
    public function createdAt(): ?\DateTime
    {
    }
    /**
     * @param \DateTime $createdAt
     *
     * @return Discount
     */
    public function setCreatedAt(\DateTime $createdAt): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\Discount
    {
    }
}
final class DiscountCollection
{
    /**
     * @var Discount[]
     */
    private $collection = [];
    /**
     * DiscountCollection constructor.
     *
     * @param array|null $discounts
     */
    public function __construct(?array $discounts = [])
    {
    }
    /**
     * @param Discount $discount
     *
     * @return DiscountCollection
     */
    public function add(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\Discount $discount): self
    {
    }
    /**
     * @param Discount $discount
     *
     * @return DiscountCollection
     */
    public function remove(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\Discount $discount): self
    {
    }
    /**
     * @param string $uuid
     *
     * @return Discount
     */
    public function get(string $uuid): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\Discount
    {
    }
    /**
     * @return Discount[]
     */
    public function all(): array
    {
    }
    /**
     * @return DiscountCollection
     */
    public function reset(): self
    {
    }
}
class DiscountCollectionFactory
{
    /**
     * @return DiscountCollection
     */
    public function create(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\DiscountCollection
    {
    }
}
final class DiscountFactory
{
    /**
     * @param string $uuid
     * @param string $name
     * @param string $description
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageCollection|null $imageCollection
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price|null $amount
     * @param float|null $percentage
     * @param string|null $externalReference
     * @param string|null $etag
     * @param string|null $updatedAt
     * @param string|null $updatedBy
     * @param string|null $createdAt
     *
     * @return Discount
     *
     * @throws \Exception
     */
    public function create(string $uuid, string $name, string $description, ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageCollection $imageCollection = null, ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price $amount = null, ?float $percentage = null, ?string $externalReference = null, ?string $etag = null, ?string $updatedAt = null, ?string $updatedBy = null, ?string $createdAt = null): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\Discount
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance;

final class AccountTransaction
{
    /**
     * @var \DateTime
     */
    private $timestamp;
    /**
     * @var int
     */
    private $amount;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\Type\TransactionType
     */
    private $originatorTransactionType;
    /**
     * @var string
     */
    private $originatingTransactionUuid;
    /**
     * AccountTransaction constructor.
     *
     * @param \DateTime $timestamp
     * @param int $amount
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\Type\TransactionType $originatorTransactionType
     * @param string $originatingTransactionUuid
     */
    public function __construct(\DateTime $timestamp, int $amount, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\Type\TransactionType $originatorTransactionType, string $originatingTransactionUuid)
    {
    }
    /**
     * @return \DateTime
     */
    public function timestamp(): \DateTime
    {
    }
    /**
     * @return int
     */
    public function amount(): int
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\Type\TransactionType
     */
    public function originatorTransactionType(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\Type\TransactionType
    {
    }
    /**
     * @return string
     */
    public function originatingTransactionUuid(): string
    {
    }
}
class AccountTransactionFactory
{
    /**
     * @param string $timestamp
     * @param string $amount
     * @param string $originatorTransactionType
     * @param string $originatingTransactionUuid
     *
     * @return AccountTransaction
     *
     * @throws \Exception
     */
    public function create(string $timestamp, string $amount, string $originatorTransactionType, string $originatingTransactionUuid): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\AccountTransaction
    {
    }
}
class BalanceInfo
{
    /**
     * @var float
     */
    private $totalBalance;
    /**
     * @var string
     */
    private $currencyId;
    /**
     * BalanceInfo constructor.
     * @param float $totalBalance
     * @param string $currencyId
     */
    public function __construct(float $totalBalance, string $currencyId)
    {
    }
    /**
     * @return float
     */
    public function totalBalance(): float
    {
    }
    /**
     * @return string
     */
    public function currencyId(): string
    {
    }
}
class BalanceInfoFactory
{
    /**
     * @param string $totalBalance
     * @param string $currencyId
     *
     * @return BalanceInfo
     */
    public function create(string $totalBalance, string $currencyId): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\BalanceInfo
    {
    }
}
final class PayoutInfo
{
    /**
     * @var float
     */
    private $totalBalance;
    /**
     * @var string
     */
    private $currencyId;
    /**
     * @var float
     */
    private $nextPayoutAmount;
    /**
     * @var float
     */
    private $discountRemaining;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\Type\PeriodType
     */
    private $period;
    /**
     * PayoutInfo constructor.
     * @param float $totalBalance
     * @param string $currencyId
     * @param float $nextPayoutAmount
     * @param float $discountRemaining
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\Type\PeriodType $period
     */
    public function __construct(float $totalBalance, string $currencyId, float $nextPayoutAmount, float $discountRemaining, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\Type\PeriodType $period)
    {
    }
    public function totalBalance(): float
    {
    }
    /**
     * @return string
     */
    public function currencyId(): string
    {
    }
    public function nextPayoutAmount(): float
    {
    }
    public function discountRemaining(): float
    {
    }
    public function period(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\Type\PeriodType
    {
    }
}
class PayoutInfoFactory
{
    /**
     * @param float $totalBalance
     * @param string $currencyId
     * @param float $nextPayoutAmount
     * @param float $discountRemaining
     * @param string $period
     *
     * @return PayoutInfo
     */
    public function create(float $totalBalance, string $currencyId, float $nextPayoutAmount, float $discountRemaining, string $period): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\PayoutInfo
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\Finance\Type;

/**
 * @method static AccountTypeGroup liquid()
 * @method bool isLiquid()
 * @method static AccountTypeGroup preliminary()
 * @method bool isPreliminary()
 */
final class AccountTypeGroup extends \Werkspot\Enum\AbstractEnum
{
    public const LIQUID = 'LIQUID';
    public const PRELIMINARY = 'PRELIMINARY';
}
/**
 * @method static PeriodType daily()
 * @method bool isDaily()
 * @method static PeriodType weekly()
 * @method bool isWeekly()
 * @method static PeriodType monthly()
 * @method bool isMonthly()
 */
final class PeriodType extends \Werkspot\Enum\AbstractEnum
{
    public const DAILY = 'DAILY';
    public const WEEKLY = 'WEEKLY';
    public const MONTHLY = 'MONTHLY';
}
/**
 * @method static TransactionType cardPayment()
 * @method bool isCardPayment()
 * @method static TransactionType cardRefund()
 * @method bool isCardRefund()
 * @method static TransactionType bankAccountVerification()
 * @method bool isBankAccountVerification()
 * @method static TransactionType payout()
 * @method bool isPayout()
 * @method static TransactionType failedPayout()
 * @method bool isFailedPayout()
 * @method static TransactionType cashBack()
 * @method bool isCashBack()
 * @method static TransactionType cashBackPayout()
 * @method bool isCashBackPayout()
 * @method static TransactionType voucherActivation()
 * @method bool isVoucherActivation()
 * @method static TransactionType emoneyTransfer()
 * @method bool isEmoneyTransfer()
 * @method static TransactionType tellFriend()
 * @method bool isTellFriend()
 * @method static TransactionType frozenFunds()
 * @method bool isFrozenFunds()
 * @method static TransactionType feeDiscountRevocation()
 * @method bool isFeeDiscountRevocation()
 * @method static TransactionType cardPaymentFee()
 * @method bool isCardPaymentFee()
 * @method static TransactionType cardPaymentFeeRefund()
 * @method bool isCardPaymentFeeRefund()
 * @method static TransactionType advance()
 * @method bool isAdvance()
 * @method static TransactionType advanceFee()
 * @method bool isAdvanceFee()
 * @method static TransactionType advanceDownPayment()
 * @method bool isAdvanceDownPayment()
 * @method static TransactionType advanceFeeDownPayment()
 * @method bool isAdvanceFeeDownPayment()
 * @method static TransactionType subscriptionCharge()
 * @method bool isSubscriptionCharge()
 * @method static TransactionType invoicePayment()
 * @method bool isInvoicePayment()
 * @method static TransactionType invoicePaymentFee()
 * @method bool isInvoicePaymentFee()
 */
final class TransactionType extends \Werkspot\Enum\AbstractEnum
{
    public const CARD_PAYMENT = 'CARD_PAYMENT';
    public const CARD_REFUND = 'CARD_REFUND';
    public const BANK_ACCOUNT_VERIFICATION = 'BANK_ACCOUNT_VERIFICATION';
    public const PAYOUT = 'PAYOUT';
    public const FAILED_PAYOUT = 'FAILED_PAYOUT';
    public const CASH_BACK = 'CASHBACK';
    public const CASH_BACK_PAYOUT = 'CASHBACK_PAYOUT';
    public const VOUCHER_ACTIVATION = 'VOUCHER_ACTIVATION';
    public const EMONEY_TRANSFER = 'EMONEY_TRANSFER';
    public const TELL_FRIEND = 'TELL_FRIEND';
    public const FROZEN_FUNDS = 'FROZEN_FUNDS';
    public const FEE_DISCOUNT_REVOCATION = 'FEE_DISCOUNT_REVOCATION';
    public const CARD_PAYMENT_FEE = 'CARD_PAYMENT_FEE';
    public const CARD_PAYMENT_FEE_REFUND = 'CARD_PAYMENT_FEE_REFUND';
    public const ADVANCE = 'ADVANCE';
    public const ADVANCE_FEE = 'ADVANCE_FEE';
    public const ADVANCE_DOWN_PAYMENT = 'ADVANCE_DOWNPAYMENT';
    public const ADVANCE_FEE_DOWN_PAYMENT = 'ADVANCE_FEE_DOWNPAYMENT';
    public const SUBSCRIPTION_CHARGE = 'SUBSCRIPTION_CHARGE';
    public const INVOICE_PAYMENT = 'INVOICE_PAYMENT';
    public const INVOICE_PAYMENT_FEE = 'INVOICE_PAYMENT_FEE';
    public const ADJUSTMENT = 'ADJUSTMENT';
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\Image;

interface ImageInterface
{
    /**
     * @return string
     */
    public function imageLookupKey(): string;
    /**
     * Image Dimensions: 560*560px
     *
     * @return string
     */
    public function smallImageUrl(): string;
    /**
     * Image Dimensions: 2000*2000px
     *
     * @return string
     */
    public function largeImageUrl(): string;
}
/**
 * Class Image
 *
 * phpcs:disable Inpsyde.CodeQuality.NoAccessors
 *
 * @package Inpsyde\Zettle\PhpSdk\DAL\Entity\Image
 */
class ConcreteImage implements \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageInterface
{
    public const BASE_URL = 'https://image.izettle.com/productimage/';
    /**
     * @var string
     */
    private $identifier;
    public function __construct(string $imageLookupKey)
    {
    }
    /**
     * @return string
     */
    public function imageLookupKey(): string
    {
    }
    /**
     * Image Dimensions: 560*560px
     *
     * @return string
     */
    public function smallImageUrl(): string
    {
    }
    /**
     * Image Dimensions: 2000*2000px
     *
     * @return string
     */
    public function largeImageUrl(): string
    {
    }
    public function identifier(): string
    {
    }
}
final class ImageCollection
{
    /**
     * @var ImageInterface[]
     */
    private $collection = [];
    /**
     * ImageCollection constructor.
     *
     * @param ImageInterface[] $images
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageInterface ...$images)
    {
    }
    /**
     * @param ImageInterface $image
     *
     * @return ImageCollection
     */
    public function add(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageInterface $image): self
    {
    }
    /**
     * @param ImageInterface $image
     *
     * @return ImageCollection
     */
    public function remove(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageInterface $image): self
    {
    }
    /**
     * @param string $imageLookupkey
     *
     * @return ImageInterface
     */
    public function get(string $imageLookupkey): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageInterface
    {
    }
    /**
     * @return ImageInterface[]
     */
    public function all(): array
    {
    }
    public function reset(): self
    {
    }
}
class LazyImage implements \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageInterface
{
    private const FALLBACK = 'https://placehold.co/200x200.jpg?text=WooProduct';
    /**
     * @var ImageInterface
     */
    private $image;
    /**
     * @var string
     */
    private $localUrl;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\API\Image\Images
     */
    private $imageClient;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface
     */
    private $map;
    /**
     * @var int
     */
    private $localId;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Provider\Image\UrlProviderInterface
     */
    private $urlProvider;
    /**
     * LazyImage constructor.
     *
     * @param int $localId
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Provider\Image\UrlProviderInterface $urlProvider
     * @param \Inpsyde\Zettle\PhpSdk\API\Image\Images $imageClient
     * @param \Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface $map
     */
    public function __construct(int $localId, \Inpsyde\Zettle\PhpSdk\DAL\Provider\Image\UrlProviderInterface $urlProvider, \Inpsyde\Zettle\PhpSdk\API\Image\Images $imageClient, \Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface $map)
    {
    }
    /**
     * @inheritDoc
     */
    public function imageLookupKey(): string
    {
    }
    /**
     * @inheritDoc
     */
    public function smallImageUrl(): string
    {
    }
    /**
     * @inheritDoc
     */
    public function largeImageUrl(): string
    {
    }
    private function ensureImage(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageInterface
    {
    }
    /**
     * Syncs the image url to Zettle and returns the ImageInterface from the REST client.
     * Will attempt to recover once with a generic fallback image URL.
     * This is an additional safety net, but we actually expect $localId to be validated already
     *
     * @param string $url
     * @param bool $throw
     *
     * @return ImageInterface
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    private function syncImage(string $url, bool $throw = false): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageInterface
    {
    }
    public function identifier(): string
    {
    }
    /**
     * @return int
     */
    public function localId(): int
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\Inventory;

final class Inventory
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantInventoryState\VariantInventoryStateCollection
     */
    private $variants;
    /**
     * Inventory constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantInventoryState\VariantInventoryStateCollection $variants
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantInventoryState\VariantInventoryStateCollection $variants)
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantInventoryState\VariantInventoryStateCollection
     */
    public function variants(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantInventoryState\VariantInventoryStateCollection
    {
    }
    /**
     * @param string $variantUuid
     *
     * @return int
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\IdNotFoundException
     */
    public function variantBalance(string $variantUuid): int
    {
    }
}
class InventoryFactory
{
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantChangeHistory\VariantInventoryState $variants
     *
     * @return Inventory
     */
    public function create(\Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantChangeHistory\VariantInventoryState $variants): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Inventory\Inventory
    {
    }
}
final class LocationInventory
{
    /**
     * @var string
     */
    private $uuid;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductCollection
     */
    private $trackedProducts;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection
     */
    private $locationBalances;
    /**
     * LocationInventory constructor.
     *
     * @param string $uuid
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductCollection $trackedProducts
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection $locationBalances
     */
    public function __construct(string $uuid, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductCollection $trackedProducts, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection $locationBalances)
    {
    }
    /**
     * @return string
     */
    public function uuid(): string
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductCollection
     */
    public function trackedProducts(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductCollection
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection
     */
    public function locationBalances(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection
    {
    }
}
class LocationInventoryFactory
{
    public function create(string $uuid, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductCollection $trackedProducts, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection $locationBalances): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Inventory\LocationInventory
    {
    }
}
/**
 * Class Transaction
 * phpcs:disable Inpsyde.CodeQuality.NoAccessors
 *
 * @package Inpsyde\Zettle\PhpSdk\DAL\Entity\Inventory
 */
class Transaction
{
    /**
     * @var string
     */
    private $productUuid;
    /**
     * @var string
     */
    private $variantUuid;
    /**
     * @var string
     */
    private $fromLocationUuid;
    /**
     * @var string
     */
    private $toLocationUuid;
    /**
     * @var int
     */
    private $change;
    public function __construct(string $productUuid, string $variantUuid, string $fromLocationUuid, string $toLocationUuid, int $change)
    {
    }
    /**
     * @return string
     */
    public function productUuid(): string
    {
    }
    /**
     * @param string $productUuid
     */
    public function setProductUuid(string $productUuid): void
    {
    }
    /**
     * @return string
     */
    public function variantUuid(): string
    {
    }
    /**
     * @param string $variantUuid
     */
    public function setVariantUuid(string $variantUuid): void
    {
    }
    /**
     * @return string
     */
    public function fromLocationUuid(): string
    {
    }
    /**
     * @param string $fromLocationUuid
     */
    public function setFromLocationUuid(string $fromLocationUuid): void
    {
    }
    /**
     * @return string
     */
    public function toLocationUuid(): string
    {
    }
    /**
     * @param string $toLocationUuid
     */
    public function setToLocationUuid(string $toLocationUuid): void
    {
    }
    /**
     * @return int
     */
    public function change(): int
    {
    }
    /**
     * @param int $change
     */
    public function setChange(int $change): void
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\Library;

final class Library
{
    /**
     * @var string
     */
    private $untilEventLogUuid;
    /**
     * @var string
     */
    private $fromEventLogUuid;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductCollection
     */
    private $products;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\DiscountCollection
     */
    private $discounts;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductCollection|null
     */
    private $deletedProducts;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\DiscountCollection|null
     */
    private $deletedDiscounts;
    /**
     * Library constructor.
     *
     * @param string $untilEventLogUuid
     * @param string $fromEventLogUuid
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductCollection $products
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\DiscountCollection $discounts
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductCollection|null $deletedProducts
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\DiscountCollection|null $deletedDiscounts
     */
    public function __construct(string $untilEventLogUuid, string $fromEventLogUuid, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductCollection $products, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\DiscountCollection $discounts, ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductCollection $deletedProducts = null, ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\DiscountCollection $deletedDiscounts = null)
    {
    }
    /**
     * @return string
     */
    public function untilEventLogUuid(): string
    {
    }
    /**
     * @return string|null
     */
    public function fromEventLogUuid(): ?string
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductCollection
     */
    public function products(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductCollection
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\DiscountCollection
     */
    public function discounts(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\DiscountCollection
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductCollection|null
     */
    public function deletedProducts(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductCollection
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\DiscountCollection|null
     */
    public function deletedDiscounts(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\DiscountCollection
    {
    }
}
class LibraryFactory
{
    public function create(string $untilEventLogUuid, string $fromEventLogUuid, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductCollection $products, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\DiscountCollection $discounts, ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductCollection $deletedProducts = null, ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Discount\DiscountCollection $deletedDiscounts = null): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Library\Library
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\Location;

class Location
{
    /**
     * @var string
     */
    private $uuid;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Location\Type\LocationType
     */
    private $type;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string|null
     */
    private $description;
    /**
     * @var bool|null
     */
    private $default;
    /**
     * Location constructor.
     *
     * @param string $uuid
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Location\Type\LocationType $type
     * @param string $name
     * @param string|null $description
     * @param bool|null $default
     */
    public function __construct(string $uuid, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Location\Type\LocationType $type, string $name, ?string $description = null, ?bool $default = null)
    {
    }
    /**
     * @return string
     */
    public function uuid(): string
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Location\Type\LocationType
     */
    public function type(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Location\Type\LocationType
    {
    }
    /**
     * @return string|null
     */
    public function name(): ?string
    {
    }
    /**
     * @return string|null
     */
    public function description(): ?string
    {
    }
    /**
     * @return bool|null
     */
    public function isDefault(): ?bool
    {
    }
}
class LocationFactory
{
    /**
     * @param string $uuid
     * @param string $type
     * @param string $name
     * @param string|null $description
     * @param bool|null $default
     *
     * @return Location
     */
    public function create(string $uuid, string $type, string $name, ?string $description = null, ?bool $default = null): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Location\Location
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\Location\Type;

/**
 * @method static self supplier()
 * @method bool isSupplier()
 * @method static self store()
 * @method bool isStore()
 * @method static self sold()
 * @method bool isSold()
 * @method static self bin()
 * @method bool isBin()
 */
final class LocationType extends \Werkspot\Enum\AbstractEnum
{
    private const SUPPLIER = 'SUPPLIER';
    private const STORE = 'STORE';
    private const SOLD = 'SOLD';
    private const BIN = 'BIN';
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\Metadata;

class Metadata
{
    /**
     * @var bool
     */
    private $inPos;
    /**
     * @var Source
     */
    private $source;
    /**
     * @param bool $inPos
     * @param Source $source
     */
    public function __construct(bool $inPos, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Metadata\Source $source)
    {
    }
    /**
     * @return bool
     */
    public function isInPos(): bool
    {
    }
    /**
     * @return Source
     */
    public function source(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Metadata\Source
    {
    }
}
class Source
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var bool
     */
    private $external;
    /**
     * @param string $name
     * @param bool $external
     */
    public function __construct(string $name, bool $external)
    {
    }
    /**
     * @return string
     */
    public function name(): string
    {
    }
    /**
     * @return bool
     */
    public function isExternal(): bool
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization;

final class Organization
{
    /**
     * @var string
     */
    private $uuid;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat|null
     */
    private $vat;
    /**
     * @var string
     */
    private $currency;
    /**
     * @var string|null
     */
    private $name;
    /**
     * @var string|null
     */
    private $city;
    /**
     * @var string|null
     */
    private $zipCode;
    /**
     * @var string|null
     */
    private $address;
    /**
     * @var string|null
     */
    private $phoneNumber;
    /**
     * @var string|null
     */
    private $contactEmail;
    /**
     * @var string|null
     */
    private $receiptEmail;
    /**
     * @var string|null
     */
    private $legalEntityType;
    /**
     * @var string|null
     */
    private $legalEntityNr;
    /**
     * @var string|null
     */
    private $country;
    /**
     * @var string|null
     */
    private $language;
    /**
     * @var \DateTime|null
     */
    private $created;
    /**
     * @var string|null
     */
    private $ownerUuid;
    /**
     * @var int|null
     */
    private $organizationId;
    /**
     * @var string|null
     */
    private $customerStatus;
    /**
     * @var string
     */
    private $taxationMode;
    /**
     * @var string
     */
    private $taxationType;
    /**
     * @var string|null
     */
    private $customerType;
    /**
     * @var \DateTimeZone
     */
    private $timeZone;
    /**
     * @var string|null
     */
    private $addressLine2;
    /**
     * @var string|null
     */
    private $legalName;
    /**
     * @var string|null
     */
    private $legalZipCode;
    /**
     * @var string|null
     */
    private $legalCity;
    /**
     * @var string|null
     */
    private $legalState;
    public function __construct(string $uuid, ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat $vat, string $currency, ?string $name = null, ?string $city = null, ?string $zipCode = null, ?string $address = null, ?string $phoneNumber = null, ?string $contactEmail = null, ?string $receiptEmail = null, ?string $legalEntityType = null, ?string $legalEntityNr = null, ?string $country = null, ?string $language = null, ?\DateTime $created = null, ?string $ownerUuid = null, ?int $organizationId = null, ?string $customerStatus = null, string $taxationMode = \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\TaxationMode::INCLUSIVE, string $taxationType = \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\TaxationType::VAT, ?string $customerType = null, ?\DateTimeZone $timeZone = null, ?string $addressLine2 = null, ?string $legalName = null, ?string $legalZipCode = null, ?string $legalCity = null, ?string $legalState = null)
    {
    }
    /**
     * @return string
     */
    public function uuid(): string
    {
    }
    /**
     * @param string $uuid
     *
     * @return Organization
     */
    public function setUuid(string $uuid): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    public function vat(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat
    {
    }
    public function setVat(?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat $vat): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    /**
     * @return string
     */
    public function currency(): string
    {
    }
    /**
     * @param string $currency
     *
     * @return Organization
     */
    public function setCurrency(string $currency): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    /**
     * @return string|null
     */
    public function name(): ?string
    {
    }
    /**
     * @param string $name
     *
     * @return Organization
     */
    public function setName(string $name): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    /**
     * @return string|null
     */
    public function city(): ?string
    {
    }
    /**
     * @param string $city
     *
     * @return Organization
     */
    public function setCity(string $city): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    /**
     * @return string|null
     */
    public function zipCode(): ?string
    {
    }
    /**
     * @param string $zipCode
     *
     * @return Organization
     */
    public function setZipCode(string $zipCode): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    /**
     * @return string|null
     */
    public function address(): ?string
    {
    }
    /**
     * @param string $address
     *
     * @return Organization
     */
    public function setAddress(string $address): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    /**
     * @return string|null
     */
    public function phoneNumber(): ?string
    {
    }
    /**
     * @param string $phoneNumber
     *
     * @return Organization
     */
    public function setPhoneNumber(string $phoneNumber): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    /**
     * @return string|null
     */
    public function contactEmail(): ?string
    {
    }
    /**
     * @param string $contactEmail
     *
     * @return Organization
     */
    public function setContactEmail(string $contactEmail): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    /**
     * @return string|null
     */
    public function receiptEmail(): ?string
    {
    }
    /**
     * @param string $receiptEmail
     *
     * @return Organization
     */
    public function setReceiptEmail(string $receiptEmail): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    /**
     * @return string|null
     */
    public function legalEntityType(): ?string
    {
    }
    /**
     * @param string $legalEntityType
     *
     * @return Organization
     */
    public function setLegalEntityType(string $legalEntityType): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    /**
     * @return string|null
     */
    public function legalEntityNr(): ?string
    {
    }
    /**
     * @param string $legalEntityNr
     *
     * @return Organization
     */
    public function setLegalEntityNr(string $legalEntityNr): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    /**
     * @return string|null
     */
    public function country(): ?string
    {
    }
    /**
     * @param string $country
     *
     * @return Organization
     */
    public function setCountry(string $country): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    /**
     * @return string|null
     */
    public function language(): ?string
    {
    }
    /**
     * @param string $language
     *
     * @return Organization
     */
    public function setLanguage(string $language): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    /**
     * @return \DateTime|null
     */
    public function created(): ?\DateTime
    {
    }
    /**
     * @param \DateTime $created
     *
     * @return Organization
     */
    public function setCreated(\DateTime $created): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    /**
     * @return string|null
     */
    public function ownerUuid(): ?string
    {
    }
    /**
     * @param string $ownerUuid
     *
     * @return Organization
     */
    public function setOwnerUuid(string $ownerUuid): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    /**
     * @return int|null
     */
    public function organizationId(): ?int
    {
    }
    /**
     * @param int $organizationId
     *
     * @return Organization
     */
    public function setOrganizationId(int $organizationId): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    /**
     * @return string|null
     */
    public function customerStatus(): ?string
    {
    }
    /**
     * @param string $customerStatus
     *
     * @return Organization
     */
    public function setCustomerStatus(string $customerStatus): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    /**
     * One of the TaxationMode values.
     * @return string
     */
    public function taxationMode(): string
    {
    }
    /**
     * One of the TaxationType values.
     * @return string
     */
    public function taxationType(): string
    {
    }
    /**
     * @return string|null
     */
    public function customerType(): ?string
    {
    }
    /**
     * @param string $customerType
     *
     * @return Organization
     */
    public function setCustomerType(string $customerType): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    /**
     * @return \DateTimeZone
     */
    public function timeZone(): ?\DateTimeZone
    {
    }
    /**
     * @param \DateTimeZone $timeZone
     *
     * @return Organization
     */
    public function setTimeZone(\DateTimeZone $timeZone): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    /**
     * @return string|null
     */
    public function addressLine2(): ?string
    {
    }
    /**
     * @param string|null $addressLine2
     *
     * @return Organization
     */
    public function setAddressLine2(?string $addressLine2): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    /**
     * @return string|null
     */
    public function legalName(): ?string
    {
    }
    /**
     * @param string|null $legalName
     *
     * @return Organization
     */
    public function setLegalName(?string $legalName): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    /**
     * @return string|null
     */
    public function legalZipCode(): ?string
    {
    }
    /**
     * @param string|null $legalZipCode
     *
     * @return Organization
     */
    public function setLegalZipCode(?string $legalZipCode): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    /**
     * @return string|null
     */
    public function legalCity(): ?string
    {
    }
    /**
     * @param string|null $legalCity
     *
     * @return Organization
     */
    public function setLegalCity(?string $legalCity): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    /**
     * @return string|null
     */
    public function legalState(): ?string
    {
    }
    /**
     * @param string|null $legalState
     *
     * @return Organization
     */
    public function setLegalState(?string $legalState): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
}
interface TaxationMode
{
    public const INCLUSIVE = 'INCLUSIVE';
    public const EXCLUSIVE = 'EXCLUSIVE';
}
interface TaxationType
{
    public const NONE = 'NONE';
    public const VAT = 'VAT';
    public const SALES_TAX = 'SALES_TAX';
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment;

abstract class AbstractPaymentMethod
{
    /**
     * @var string
     */
    private $uuid;
    /**
     * @var float
     */
    private $amount;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\Type\PaymentType
     */
    private $type;
    /**
     * AbstractPaymentMethod constructor.
     *
     * @param string $uuid
     * @param float $amount
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\Type\PaymentType $type
     */
    public function __construct(string $uuid, float $amount, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\Type\PaymentType $type)
    {
    }
    public function uuid(): string
    {
    }
    public function amount(): float
    {
    }
    public function type(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\Type\PaymentType
    {
    }
}
final class CardOnlinePayment extends \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
{
    /**
     * CardOnlinePayment constructor.
     *
     * @param string $uuid
     * @param float $amount
     */
    public function __construct(string $uuid, float $amount)
    {
    }
}
final class CardPayment extends \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
{
    /**
     * @var string
     */
    private $referenceNumber;
    /**
     * @var string
     */
    private $maskedPan;
    /**
     * @var string
     */
    private $cardType;
    /**
     * @var string
     */
    private $cardPaymentEntryMode;
    /**
     * @var string|null
     */
    private $applicationName;
    /**
     * @var string|null
     */
    private $applicationIdentifier;
    /**
     * @var string|null
     */
    private $terminalVerificationResults;
    /**
     * @var int|null
     */
    private $numberOfInstallments;
    /**
     * @var int|null
     */
    private $installmentAmount;
    /**
     * CardPayment constructor.
     *
     * @param string $uuid
     * @param float $amount
     * @param string $referenceNumber
     * @param string $maskedPan
     * @param string $cardType
     * @param string $cardPaymentEntryMode
     * @param string|null $applicationName
     * @param string|null $applicationIdentifier
     * @param string|null $terminalVerificationResults
     * @param int|null $numberOfInstallments
     * @param int|null $installmentAmount
     */
    public function __construct(string $uuid, float $amount, string $referenceNumber, string $maskedPan, string $cardType, string $cardPaymentEntryMode, ?string $applicationName = null, ?string $applicationIdentifier = null, ?string $terminalVerificationResults = null, ?int $numberOfInstallments = null, ?int $installmentAmount = null)
    {
    }
    /**
     * @return string
     */
    public function referenceNumber(): string
    {
    }
    /**
     * @return string
     */
    public function maskedPan(): string
    {
    }
    /**
     * @return string
     */
    public function cardType(): string
    {
    }
    /**
     * @return string
     */
    public function cardPaymentEntryMode(): string
    {
    }
    /**
     * @return string
     */
    public function applicationName(): string
    {
    }
    /**
     * @return string
     */
    public function applicationIdentifier(): string
    {
    }
    /**
     * @return string
     */
    public function terminalVerificationResults(): string
    {
    }
    /**
     * @return int
     */
    public function numberOfInstallments(): int
    {
    }
    /**
     * @return int|null
     */
    public function installmentAmount(): ?int
    {
    }
}
final class CashPayment extends \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
{
    /**
     * @var float
     */
    private $handedAmount;
    /**
     * CashPayment constructor.
     *
     * @param string $uuid
     * @param float $amount
     * @param float $handedAmount
     */
    public function __construct(string $uuid, float $amount, float $handedAmount)
    {
    }
    /**
     * @return float
     */
    public function handedAmount(): float
    {
    }
    /**
     * @return float
     */
    public function changeAmount(): float
    {
    }
}
final class CustomPayment extends \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
{
    /**
     * CustomPayment constructor.
     *
     * @param string $uuid
     * @param float $amount
     */
    public function __construct(string $uuid, float $amount)
    {
    }
}
final class GiftCardPayment extends \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
{
    /**
     * GiftCardPayment constructor.
     *
     * @param string $uuid
     * @param float $amount
     */
    public function __construct(string $uuid, float $amount)
    {
    }
}
final class InvoicePayment extends \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
{
    /**
     * @var string
     */
    private $orderUuid;
    /**
     * @var string
     */
    private $invoiceNumber;
    /**
     * @var \DateTime
     */
    private $dueDate;
    /**
     * InvoicePayment constructor.
     *
     * @param string $uuid
     * @param float $amount
     * @param string $orderUuid
     * @param string $invoiceNumber
     * @param \DateTime $dueDate
     */
    public function __construct(string $uuid, float $amount, string $orderUuid, string $invoiceNumber, \DateTime $dueDate)
    {
    }
    /**
     * @return string
     */
    public function orderUuid(): string
    {
    }
    /**
     * @return string
     */
    public function invoiceNumber(): string
    {
    }
    /**
     * @return \DateTime
     */
    public function dueDate(): \DateTime
    {
    }
}
final class KlarnaPayment extends \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
{
    /**
     * KlarnaPayment constructor.
     *
     * @param string $uuid
     * @param float $amount
     */
    public function __construct(string $uuid, float $amount)
    {
    }
}
final class MobilePayment extends \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
{
    /**
     * MobilePayment constructor.
     *
     * @param string $uuid
     * @param float $amount
     */
    public function __construct(string $uuid, float $amount)
    {
    }
}
final class PaymentCollection
{
    /**
     * @var AbstractPaymentMethod[]
     */
    private $collection = [];
    /**
     * AbstractPaymentMethodCollection constructor.
     *
     * @param array|null $payments
     */
    public function __construct(?array $payments = [])
    {
    }
    /**
     * @param AbstractPaymentMethod $payment
     *
     * @return PaymentCollection
     */
    public function add(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod $payment): self
    {
    }
    /**
     * @param AbstractPaymentMethod $payment
     *
     * @return PaymentCollection
     */
    public function remove(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod $payment): self
    {
    }
    /**
     * @param string $uuid
     *
     * @return AbstractPaymentMethod
     */
    public function get(string $uuid): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
    {
    }
    /**
     * @return AbstractPaymentMethod[]
     */
    public function all(): array
    {
    }
    /**
     * @return PaymentCollection
     */
    public function reset(): self
    {
    }
}
final class PaymentCollectionFactory
{
    /**
     * @return PaymentCollection
     */
    public function create(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaymentCollection
    {
    }
}
class PaymentFactory
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Validator\Payment\PaymentValidator
     */
    private $paymentValidator;
    /**
     * PaymentFactory constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Validator\Payment\PaymentValidator $paymentValidator
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Validator\Payment\PaymentValidator $paymentValidator)
    {
    }
    /**
     * @param string $uuid
     * @param float $amount
     * @param string $paymentType
     *
     * @return CardOnlinePayment
     *
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\EntityFactoryException
     */
    public function createCardOnlinePayment(string $uuid, float $amount, string $paymentType): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CardOnlinePayment
    {
    }
    /**
     * @param string $uuid
     * @param float $amount
     * @param string $paymentType
     * @param string $referenceNumber
     * @param string $maskedPan
     * @param string $cardType
     * @param string $cardPaymentEntryMode
     * @param string|null $applicationName
     * @param string|null $applicationIdentifier
     * @param string|null $terminalVerificationResults
     * @param int|null $numberOfInstallments
     *
     * @return CardPayment
     *
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\EntityFactoryException
     */
    public function createCardPayment(string $uuid, float $amount, string $paymentType, string $referenceNumber, string $maskedPan, string $cardType, string $cardPaymentEntryMode, ?string $applicationName = null, ?string $applicationIdentifier = null, ?string $terminalVerificationResults = null, ?int $numberOfInstallments = null): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CardPayment
    {
    }
    /**
     * @param string $uuid
     * @param string $paymentType
     * @param string $amount
     * @param string $handedAmount
     *
     * @return CashPayment
     *
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\EntityFactoryException
     */
    public function createCashPayment(string $uuid, string $paymentType, string $amount, string $handedAmount): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CashPayment
    {
    }
    /**
     * @param string $uuid
     * @param string $paymentType
     * @param float $amount
     *
     * @return CustomPayment
     *
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\EntityFactoryException
     */
    public function createCustomPayment(string $uuid, string $paymentType, float $amount): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\CustomPayment
    {
    }
    /**
     * @param string $uuid
     * @param string $paymentType
     * @param float $amount
     *
     * @return GiftcardPayment
     *
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\EntityFactoryException
     */
    public function createGiftcardPayment(string $uuid, string $paymentType, float $amount): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\GiftcardPayment
    {
    }
    /**
     * @param string $uuid
     * @param string $paymentType
     * @param float $amount
     * @param string $orderUuid
     * @param string $invoiceNumber
     * @param string $dueDate
     *
     * @return InvoicePayment
     *
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\EntityFactoryException
     * @throws \Exception
     */
    public function createInvoicePayment(string $uuid, string $paymentType, float $amount, string $orderUuid, string $invoiceNumber, string $dueDate): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\InvoicePayment
    {
    }
    /**
     * @param string $uuid
     * @param string $paymentType
     * @param float $amount
     *
     * @return KlarnaPayment
     *
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\EntityFactoryException
     */
    public function createKlarnaPayment(string $uuid, string $paymentType, float $amount): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\KlarnaPayment
    {
    }
    /**
     * @param string $uuid
     * @param string $paymentType
     * @param float $amount
     *
     * @return MobilePayment
     *
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\EntityFactoryException
     */
    public function createMobilePayment(string $uuid, string $paymentType, float $amount): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\MobilePayment
    {
    }
    /**
     * @param string $uuid
     * @param string $paymentType
     * @param float $amount
     *
     * @return PaypalPayment
     *
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\EntityFactoryException
     */
    public function createPaypalPayment(string $uuid, string $paymentType, float $amount): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\PaypalPayment
    {
    }
    /**
     * @param string $uuid
     * @param string $paymentType
     * @param float $amount
     *
     * @return StoreCreditPayment
     *
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\EntityFactoryException
     */
    public function createStoreCreditPayment(string $uuid, string $paymentType, float $amount): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\StoreCreditPayment
    {
    }
    /**
     * @param string $uuid
     * @param string $paymentType
     * @param float $amount
     *
     * @return SwishPayment
     *
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\EntityFactoryException
     */
    public function createSwishPayment(string $uuid, string $paymentType, float $amount): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\SwishPayment
    {
    }
    /**
     * @param string $uuid
     * @param string $paymentType
     * @param float $amount
     *
     * @return VippsPayment
     *
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\EntityFactoryException
     */
    public function createVippsPayment(string $uuid, string $paymentType, float $amount): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\VippsPayment
    {
    }
}
final class PaypalPayment extends \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
{
    /**
     * PaypalPayment constructor.
     *
     * @param string $uuid
     * @param float $amount
     */
    public function __construct(string $uuid, float $amount)
    {
    }
}
final class StoreCreditPayment extends \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
{
    /**
     * StoreCreditPayment constructor.
     *
     * @param string $uuid
     * @param float $amount
     */
    public function __construct(string $uuid, float $amount)
    {
    }
}
class SwishPayment extends \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
{
    /**
     * SwishPayment constructor.
     *
     * @param string $uuid
     * @param float $amount
     */
    public function __construct(string $uuid, float $amount)
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\Type;

/**
 * @method static PaymentType cardPayment()
 * @method bool isCardPayment()
 * @method static PaymentType cardOnlinePayment()
 * @method bool isCardOnlinePayment()
 * @method static PaymentType cashPayment()
 * @method bool isCashPayment()
 * @method static PaymentType giftCardPayment()
 * @method bool isGiftCardPayment()
 * @method static PaymentType invoicePayment()
 * @method bool isInvoicePayment()
 * @method static PaymentType mobilePayment()
 * @method bool isMobilePayment()
 * @method static PaymentType klarnaPayment()
 * @method bool isKlarnaPayment()
 * @method static PaymentType paypalPayment()
 * @method bool isPaypalPayment()
 * @method static PaymentType storeCreditPayment()
 * @method bool isStoreCreditPayment()
 * @method static PaymentType swishPayment()
 * @method bool isSwishPayment()
 * @method static PaymentType vippsPayment()
 * @method bool isVippsPayment()
 * @method static PaymentType customPayment()
 * @method bool isCustomPayment()
 */
final class PaymentType extends \Werkspot\Enum\AbstractEnum
{
    public const CARD = 'IZETTLE_CARD';
    public const CARD_ONLINE = 'IZETTLE_CARD_ONLINE';
    public const CASH = 'IZETTLE_CASH';
    public const GIFTCARD = 'GIFTCARD';
    public const INVOICE = 'IZETTLE_INVOICE';
    public const MOBILE = 'MOBILE_PAY';
    public const KLARNA = 'KLARNA';
    public const PAYPAL = 'PAYPAL';
    public const STORE_CREDIT = 'STORE_CREDIT';
    public const SWISH = 'SWISH';
    public const VIPPS = 'VIPPS';
    public const CUSTOM = 'CUSTOM';
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment;

final class VippsPayment extends \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
{
    /**
     * VippsPayment constructor.
     *
     * @param string $uuid
     * @param float $amount
     */
    public function __construct(string $uuid, float $amount)
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation;

class Presentation
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageInterface
     */
    private $image;
    /**
     * @var string
     */
    private $backgroundColor;
    /**
     * @var string
     */
    private $textColor;
    /**
     * Presentation constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageInterface $image
     * @param string|null $backgroundColor
     * @param string|null $textColor
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageInterface $image, ?string $backgroundColor = null, ?string $textColor = null)
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageInterface
     */
    public function image(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageInterface
    {
    }
    /**
     * @param string $image
     *
     * @return Presentation
     */
    public function setImage(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageInterface $image): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation
    {
    }
    /**
     * @return string|null
     */
    public function backgroundColor(): ?string
    {
    }
    /**
     * @param string $backgroundColor
     *
     * @return Presentation
     */
    public function setBackgroundColor(string $backgroundColor): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation
    {
    }
    /**
     * @return string|null
     */
    public function textColor(): ?string
    {
    }
    /**
     * @param string $textColor
     *
     * @return Presentation
     */
    public function setTextColor(string $textColor): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\Price;

class Price
{
    /**
     * @var int
     */
    private $amount;
    /**
     * @var string
     */
    private $currencyId;
    /**
     * Price constructor.
     *
     * @param int $amount
     * @param string $currencyId
     */
    public function __construct(int $amount, string $currencyId)
    {
    }
    /**
     * @return int
     */
    public function amount(): int
    {
    }
    /**
     * Convert Integer Price to Float amount
     * Note: Converting from hundreth-based integer to float
     *
     * @return float
     */
    public function amountToFloat(): float
    {
    }
    /**
     * @param int $amount
     *
     * @return Price
     */
    public function setAmount(int $amount): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price
    {
    }
    /**
     * @return string
     */
    public function currencyId(): string
    {
    }
    /**
     * @param string $currencyId
     *
     * @return Price
     */
    public function setCurrencyId(string $currencyId): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\Product;

interface ProductInterface
{
    /**
     * @return string
     */
    public function uuid(): string;
    /**
     * @return string
     */
    public function name(): string;
    /**
     * @return string
     */
    public function description(): string;
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageCollection
     */
    public function images(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageCollection;
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantCollection
     */
    public function variants(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantCollection;
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation|null
     */
    public function presentation(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation;
    /**
     * @return string|null
     */
    public function externalReference(): ?string;
    /**
     * @return string
     */
    public function etag(): ?string;
    /**
     * @return \DateTime
     */
    public function updatedAt(): ?\DateTime;
    /**
     * @return string
     */
    public function updatedBy(): ?string;
    /**
     * @return \DateTime|null
     */
    public function createdAt(): ?\DateTime;
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat|null
     */
    public function vat(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat;
    public function taxExempt(): ?bool;
    public function usesDefaultTax(): ?bool;
    /**
     * @return string|null
     */
    public function unitName(): ?string;
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Metadata\Metadata|null
     */
    public function metadata(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Metadata\Metadata;
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionDefinitions|null
     */
    public function variantOptionDefinitions(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionDefinitions;
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat;

interface VatSetterInterface
{
    public function setVat(?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat $vat): void;
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\Product;

/**
 * Interface WritableProductInterface
 * phpcs:disable Inpsyde.CodeQuality.NoAccessors
 *
 * @package Inpsyde\Zettle\PhpSdk\DAL\Entity\Product
 */
interface WritableProductInterface extends \Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\VatSetterInterface
{
    /**
     * @param string $uuid
     */
    public function setUuid(string $uuid): void;
    /**
     * @param string $name
     */
    public function setName(string $name): void;
    /**
     * @param string $description
     */
    public function setDescription(string $description): void;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageCollection $imageCollection
     */
    public function setImages(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageCollection $imageCollection): void;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation $presentation
     */
    public function setPresentation(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation $presentation): void;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantCollection $variants
     */
    public function setVariants(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantCollection $variants): void;
    /**
     * @param string $externalReference
     */
    public function setExternalReference(string $externalReference): void;
    /**
     * @param string $etag
     */
    public function setEtag(string $etag): void;
    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt): void;
    /**
     * @param string $updatedBy
     */
    public function setUpdatedBy(string $updatedBy): void;
    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt): void;
    public function setTaxExempt(?bool $taxExempt): void;
    public function setUsesDefaultTax(?bool $usesDefaultTax): void;
    /**
     * @param string $unitName
     */
    public function setUnitName(string $unitName): void;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Metadata\Metadata $metadata
     */
    public function setMetadata(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Metadata\Metadata $metadata): void;
    public function setVariantOptionDefinitions(\Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionDefinitions $definitions): void;
}
interface ProductTransferInterface extends \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\WritableProductInterface
{
}
trait ProductGetterDecoratorTrait
{
    abstract protected function baseProduct(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface;
    public function uuid(): string
    {
    }
    public function name(): string
    {
    }
    public function description(): string
    {
    }
    public function images(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageCollection
    {
    }
    public function presentation(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation
    {
    }
    public function variants(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantCollection
    {
    }
    public function externalReference(): ?string
    {
    }
    public function etag(): ?string
    {
    }
    public function updatedAt(): ?\DateTime
    {
    }
    public function updatedBy(): ?string
    {
    }
    public function createdAt(): ?\DateTime
    {
    }
    public function vat(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat
    {
    }
    public function taxExempt(): ?bool
    {
    }
    public function usesDefaultTax(): ?bool
    {
    }
    public function unitName(): ?string
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Metadata\Metadata
     */
    public function metadata(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Metadata\Metadata
    {
    }
    public function variantOptionDefinitions(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionDefinitions
    {
    }
}
/**
 * Trait ProductSetterDecoratorTrait
 * phpcs:disable Inpsyde.CodeQuality.NoAccessors
 *
 * @package Inpsyde\Zettle\PhpSdk\DAL\Entity\Product
 */
trait ProductSetterDecoratorTrait
{
    abstract protected function baseWritableProduct(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\WritableProductInterface;
    public function setUuid(string $uuid): void
    {
    }
    public function setName(string $name): void
    {
    }
    public function setDescription(string $description): void
    {
    }
    public function setImages(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageCollection $imageCollection): void
    {
    }
    public function setPresentation(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation $presentation): void
    {
    }
    public function setVariants(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantCollection $variants): void
    {
    }
    public function setExternalReference(string $externalReference): void
    {
    }
    public function setEtag(string $etag): void
    {
    }
    public function setUpdatedAt(\DateTime $updatedAt): void
    {
    }
    public function setUpdatedBy(string $updatedBy): void
    {
    }
    public function setCreatedAt(\DateTime $createdAt): void
    {
    }
    public function setVat(?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat $vat): void
    {
    }
    public function setTaxExempt(?bool $taxExempt): void
    {
    }
    public function setUsesDefaultTax(?bool $usesDefaultTax): void
    {
    }
    public function setUnitName(string $unitName): void
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Metadata\Metadata $metadata
     */
    public function setMetadata(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Metadata\Metadata $metadata): void
    {
    }
    public function setVariantOptionDefinitions(\Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionDefinitions $definitions): void
    {
    }
}
/**
 * A Decorator for regular product instances. LazyProducts will automatically sync themselves
 * to Zettle as soon as their uuid() getter is called.
 */
class LazyProduct implements \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductTransferInterface
{
    use \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductGetterDecoratorTrait;
    use \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductSetterDecoratorTrait;
    /**
     * @var ProductTransferInterface
     */
    private $base;
    /**
     * @var string
     */
    private $syncedUuid;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\API\Products\Products
     */
    private $productClient;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface|\Inpsyde\Zettle\PhpSdk\Map\MapRecordCreator
     */
    private $map;
    /**
     * @var int
     */
    private $localId;
    public function __construct(int $localId, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductTransferInterface $base, \Inpsyde\Zettle\PhpSdk\API\Products\Products $productClient, \Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface $map)
    {
    }
    /**
     * @return string
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    public function uuid(): string
    {
    }
    public function localId(): int
    {
    }
    protected function baseProduct(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface
    {
    }
    protected function baseWritableProduct(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\WritableProductInterface
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity;

interface PropertyChangeAwareInterface
{
    /**
     * @return bool
     */
    public function hasChangedProperties(): bool;
    /**
     * @return array
     */
    public function allChangedProperties(): array;
}
trait PropertyChangeAwareTrait
{
    /**
     * @var array
     */
    protected $changedProperties = [];
    /**
     * @inheritdoc
     */
    public function hasChangedProperties(): bool
    {
    }
    /**
     * @inheritdoc
     */
    public function allChangedProperties(): array
    {
    }
    /**
     * @param string ...$properties
     */
    protected function addChangedProperties(string ...$properties): void
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\Product;

/**
 * Class Product
 * phpcs:disable Inpsyde.CodeQuality.PropertyPerClassLimit.TooMuchProperties
 * phpcs:disable Inpsyde.CodeQuality.NoAccessors
 *
 * @package Inpsyde\Zettle\PhpSdk\DAL\Entity\Product
 */
class Product implements \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductTransferInterface, \Inpsyde\Zettle\PhpSdk\DAL\Entity\PropertyChangeAwareInterface
{
    use \Inpsyde\Zettle\PhpSdk\DAL\Entity\PropertyChangeAwareTrait;
    /**
     * @var string
     */
    private $uuid;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $description;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageCollection
     */
    private $images;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantCollection
     */
    private $variants;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation|null
     */
    private $presentation;
    /**
     * @var string|null
     */
    private $externalReference;
    /**
     * @var string|null
     */
    private $etag;
    /**
     * @var \DateTime|null
     */
    private $updatedAt;
    /**
     * @var string|null
     */
    private $updatedBy;
    /**
     * @var \DateTime|null
     */
    private $createdAt;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat|null
     */
    private $vat;
    /**
     * @var bool|null
     */
    private $taxExempt;
    /**
     * @var bool|null
     */
    private $usesDefaultTax;
    /**
     * @var string|null
     */
    private $unitName;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Metadata\Metadata|null
     */
    private $metadata;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionDefinitions
     */
    private $variantOptionDefinitions;
    /**
     * Product constructor.
     *
     * @param string $uuid
     * @param string $name
     * @param string $description
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageCollection $images
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantCollection $variants
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation|null $presentation
     * @param string|null $externalReference
     * @param string|null $etag
     * @param \DateTime|null $updatedAt
     * @param string|null $updatedBy
     * @param \DateTime|null $createdAt
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat|null $vat
     * @param string|null $unitName
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Metadata\Metadata|null $metadata
     */
    public function __construct(string $uuid, string $name, string $description, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageCollection $images, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantCollection $variants, ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation $presentation = null, ?string $externalReference = null, ?string $etag = null, ?\DateTime $updatedAt = null, ?string $updatedBy = null, ?\DateTime $createdAt = null, ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat $vat = null, ?bool $taxExempt = null, ?bool $usesDefaultTax = null, ?string $unitName = null, ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Metadata\Metadata $metadata = null)
    {
    }
    /**
     * @return string
     */
    public function uuid(): string
    {
    }
    /**
     * @param string $uuid
     */
    public function setUuid(string $uuid): void
    {
    }
    /**
     * @return string
     */
    public function name(): string
    {
    }
    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
    }
    /**
     * @return string
     */
    public function description(): string
    {
    }
    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageCollection
     */
    public function images(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageCollection
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageCollection $imageCollection
     */
    public function setImages(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageCollection $imageCollection): void
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantCollection
     */
    public function variants(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantCollection
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantCollection $variants
     */
    public function setVariants(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantCollection $variants): void
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation|null
     */
    public function presentation(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation $presentation
     */
    public function setPresentation(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation $presentation): void
    {
    }
    /**
     * @return string|null
     */
    public function externalReference(): ?string
    {
    }
    /**
     * @param string $externalReference
     */
    public function setExternalReference(string $externalReference): void
    {
    }
    /**
     * @return string
     */
    public function etag(): ?string
    {
    }
    /**
     * @param string $etag
     */
    public function setEtag(string $etag): void
    {
    }
    /**
     * @return \DateTime
     */
    public function updatedAt(): ?\DateTime
    {
    }
    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt): void
    {
    }
    /**
     * @return string
     */
    public function updatedBy(): ?string
    {
    }
    /**
     * @param string $updatedBy
     */
    public function setUpdatedBy(string $updatedBy): void
    {
    }
    /**
     * @return \DateTime|null
     */
    public function createdAt(): ?\DateTime
    {
    }
    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt): void
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat|null
     */
    public function vat(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat $vat
     */
    public function setVat(?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat $vat): void
    {
    }
    public function taxExempt(): ?bool
    {
    }
    public function setTaxExempt(?bool $taxExempt): void
    {
    }
    public function usesDefaultTax(): ?bool
    {
    }
    public function setUsesDefaultTax(?bool $usesDefaultTax): void
    {
    }
    /**
     * @return string|null
     */
    public function unitName(): ?string
    {
    }
    /**
     * @param string $unitName
     */
    public function setUnitName(string $unitName): void
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Metadata\Metadata|null
     */
    public function metadata(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Metadata\Metadata
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Metadata\Metadata $metadata
     */
    public function setMetadata(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Metadata\Metadata $metadata): void
    {
    }
    /**
     * @inheritDoc
     */
    public function variantOptionDefinitions(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionDefinitions
    {
    }
    public function setVariantOptionDefinitions(\Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionDefinitions $definitions): void
    {
    }
}
final class ProductCollection
{
    /**
     * @var ProductInterface[]
     */
    private $collection = [];
    /**
     * ProductCollection constructor.
     *
     * @param array $products
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface ...$products)
    {
    }
    /**
     * @param ProductInterface $product
     *
     * @return ProductCollection
     */
    public function add(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface $product): self
    {
    }
    /**
     * @param ProductInterface $product
     *
     * @return ProductCollection
     */
    public function remove(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface $product): self
    {
    }
    /**
     * @param string $uuid
     *
     * @return ProductInterface
     */
    public function get(string $uuid): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface
    {
    }
    /**
     * @return ProductInterface[]
     */
    public function all(): array
    {
    }
    /**
     * @return ProductCollection
     */
    public function reset(): self
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase;

final class Purchase
{
    /**
     * @var string
     */
    private $uuid;
    /**
     * @var string
     */
    private $uuid1;
    /**
     * @var \DateTime
     */
    private $timestamp;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Coordinates\Coordinates|null
     */
    private $coordinates;
    /**
     * @var string
     */
    private $country;
    /**
     * @var string
     */
    private $currency;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\User\User
     */
    private $user;
    /**
     * @var int
     */
    private $organizationId;
    /**
     * @var int
     */
    private $purchaseNumber;
    /**
     * @var float
     */
    private $amount;
    /**
     * @var float
     */
    private $vatAmount;
    /**
     * @var array
     */
    private $products;
    /**
     * @var array
     */
    private $payments;
    /**
     * @var array
     */
    private $vatAmounts;
    /**
     * @var bool
     */
    private $receiptCopyAllowed;
    /**
     * @var bool|null
     */
    private $published;
    /**
     * @var bool
     */
    private $refund;
    /**
     * @var bool
     */
    private $refunded;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\Type\SourceType|null
     */
    private $sourceType;
    /**
     * Purchase constructor.
     *
     * @TODO: Maybe use Collections instead of arrays
     *
     * @param string $uuid
     * @param string $uuid1
     * @param \DateTime $timestamp
     * @param string $country
     * @param string $currency
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\User\User $user
     * @param int $organizationId
     * @param int $purchaseNumber
     * @param float $amount
     * @param float $vatAmount
     * @param array $products
     * @param array $payments
     * @param array $vatAmounts
     * @param bool $receiptCopyAllowed
     * @param bool $refund
     * @param bool $refunded
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Coordinates\Coordinates|null $coordinates
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\Type\SourceType $sourceType
     * @param bool|null $published
     */
    public function __construct(string $uuid, string $uuid1, \DateTime $timestamp, string $country, string $currency, \Inpsyde\Zettle\PhpSdk\DAL\Entity\User\User $user, int $organizationId, int $purchaseNumber, float $amount, float $vatAmount, array $products, array $payments, array $vatAmounts, bool $receiptCopyAllowed, bool $refund, bool $refunded, ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Coordinates\Coordinates $coordinates = null, ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\Type\SourceType $sourceType = null, ?bool $published = null)
    {
    }
    /**
     * @return string
     */
    public function uuid(): string
    {
    }
    /**
     * @return string
     */
    public function uuid1(): string
    {
    }
    /**
     * @return \DateTime
     */
    public function timestamp(): \DateTime
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Coordinates\Coordinates|null
     */
    public function coordinates(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Coordinates\Coordinates
    {
    }
    /**
     * @return string
     */
    public function country(): string
    {
    }
    /**
     * @return string
     */
    public function currency(): string
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\User\User
     */
    public function user(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\User\User
    {
    }
    /**
     * @return int
     */
    public function organizationId(): int
    {
    }
    /**
     * @return int
     */
    public function purchaseNumber(): int
    {
    }
    /**
     * @return float
     */
    public function amount(): float
    {
    }
    /**
     * @return float
     */
    public function vatAmount(): float
    {
    }
    /**
     * @return array
     */
    public function products(): array
    {
    }
    /**
     * @return array
     */
    public function payments(): array
    {
    }
    /**
     * @return array
     */
    public function vatAmounts(): array
    {
    }
    /**
     * @return bool
     */
    public function isReceiptCopyAllowed(): bool
    {
    }
    /**
     * @return bool|null
     */
    public function isPublished(): ?bool
    {
    }
    /**
     * @return bool
     */
    public function isRefund(): bool
    {
    }
    /**
     * @return bool
     */
    public function isRefunded(): bool
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\Type\SourceType|null
     */
    public function sourceType(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\Type\SourceType
    {
    }
}
final class PurchaseCollection
{
    /**
     * @var Purchase[]
     */
    private $collection = [];
    /**
     * PurchaseCollection constructor.
     *
     * @param array|null $purchases
     */
    public function __construct(?array $purchases = [])
    {
    }
    /**
     * @param Purchase $purchase
     *
     * @return PurchaseCollection
     */
    public function add(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\Purchase $purchase): self
    {
    }
    /**
     * @param Purchase $purchase
     *
     * @return PurchaseCollection
     */
    public function remove(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\Purchase $purchase): self
    {
    }
    /**
     * @param string $uuid
     *
     * @return Purchase
     */
    public function get(string $uuid): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\Purchase
    {
    }
    /**
     * @return Purchase[]
     */
    public function all(): array
    {
    }
    /**
     * @return PurchaseCollection
     */
    public function reset(): self
    {
    }
}
final class PurchaseCollectionFactory
{
    /**
     * @return PurchaseCollection
     */
    public function create(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseCollection
    {
    }
}
final class PurchaseFactory
{
    /**
     * @param string $uuid
     * @param \DateTime $timestamp
     * @param string $country
     * @param string $currency
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\User\User $user
     * @param int $organizationId
     * @param int $purchaseNumber
     * @param float $amount
     * @param float $vatAmount
     * @param array $products
     * @param array $payments
     * @param array $vatAmounts
     * @param bool $receiptCopyAllowed
     * @param bool $refund
     * @param bool $refunded
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Coordinates\Coordinates|null $coordinates
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\Type\SourceType|null $sourceType
     * @param bool|null $published
     *
     * @return Purchase
     *
     * @throws \Exception
     */
    public function create(string $uuid, \DateTime $timestamp, string $country, string $currency, \Inpsyde\Zettle\PhpSdk\DAL\Entity\User\User $user, int $organizationId, int $purchaseNumber, float $amount, float $vatAmount, array $products, array $payments, array $vatAmounts, bool $receiptCopyAllowed, bool $refund, bool $refunded, ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Coordinates\Coordinates $coordinates = null, ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\Type\SourceType $sourceType = null, ?bool $published = null): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\Purchase
    {
    }
}
final class PurchaseHistory
{
    /**
     * @var string
     */
    private $firstPurchaseHash;
    /**
     * @var string
     */
    private $lastPurchaseHash;
    /**
     * @var PurchaseCollection
     */
    private $purchaseCollection;
    /**
     * PurchaseHistory constructor.
     *
     * @param string $firstPurchaseHash
     * @param string $lastPurchaseHash
     * @param PurchaseCollection $purchaseCollection
     */
    public function __construct(string $firstPurchaseHash, string $lastPurchaseHash, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseCollection $purchaseCollection)
    {
    }
    /**
     * @return string
     */
    public function firstPurchaseHash(): string
    {
    }
    /**
     * @return string
     */
    public function lastPurchaseHash(): string
    {
    }
    /**
     * @param string $uuid
     * @return Purchase
     */
    public function purchase(string $uuid): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\Purchase
    {
    }
    /**
     * @return PurchaseCollection
     */
    public function purchases(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseCollection
    {
    }
    /**
     * @param Purchase $purchase
     */
    public function addPurchase(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\Purchase $purchase): void
    {
    }
    /**
     * @param Purchase $purchase
     */
    public function removePurchase(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\Purchase $purchase): void
    {
    }
}
class PurchaseHistoryFactory
{
    /**
     * @param string $firstPurchaseHash
     * @param string $lastPurchaseHash
     * @param PurchaseCollection $purchaseCollection
     *
     * @return PurchaseHistory
     */
    public function create(string $firstPurchaseHash, string $lastPurchaseHash, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseCollection $purchaseCollection): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\PurchaseHistory
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\Purchase\Type;

/**
 * @method static SourceType posSource()
 * @method bool isPosSource()
 * @method static SourceType shopSource()
 * @method bool isShopSource()
 * @method static SourceType SDKSource()
 * @method bool isSDKSource()
 */
class SourceType extends \Werkspot\Enum\AbstractEnum
{
    public const POS = 'POS';
    public const SHOP = 'WEB_SHOP';
    public const SDK = 'SDK';
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\Tax;

class TaxRate
{
    /**
     * @var string
     */
    private $uuid;
    /**
     * @var string
     */
    private $label;
    /**
     * @var float|null
     */
    private $percentage;
    /**
     * @var bool|null
     */
    private $default;
    public function __construct(string $uuid, string $label, ?float $percentage, ?bool $default)
    {
    }
    public function uuid(): string
    {
    }
    public function label(): string
    {
    }
    public function percentage(): ?float
    {
    }
    public function isDefault(): bool
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\User;

final class User
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $displayName;
    /**
     * User constructor.
     *
     * @param int $id
     * @param string $displayName
     */
    public function __construct(int $id, string $displayName)
    {
    }
    /**
     * @return int
     */
    public function id(): int
    {
    }
    /**
     * @param int $id
     *
     * @return User
     */
    public function setId(int $id): \Inpsyde\Zettle\PhpSdk\DAL\Entity\User\User
    {
    }
    /**
     * @return string
     */
    public function displayName(): string
    {
    }
    /**
     * @param string $displayName
     *
     * @return User
     */
    public function setDisplayName(string $displayName): \Inpsyde\Zettle\PhpSdk\DAL\Entity\User\User
    {
    }
    /**
     * Return by default the E-Mail
     *
     * @return string
     */
    public function __toString(): string
    {
    }
}
class UserFactory
{
    /**
     * @param string $id
     * @param string $displayName
     *
     * @return User
     */
    public function create(string $id, string $displayName): \Inpsyde\Zettle\PhpSdk\DAL\Entity\User\User
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant;

interface VariantInterface
{
    /**
     * @return string
     */
    public function uuid(): string;
    /**
     * @return string
     */
    public function name(): string;
    /**
     * @return string
     */
    public function description(): string;
    /**
     * @return string
     */
    public function sku(): string;
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price|null
     */
    public function price(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price;
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat|null
     */
    public function vat(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat;
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation
     */
    public function presentation(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation;
    /**
     * @return string|null
     */
    public function unitName(): ?string;
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection|null
     */
    public function options(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection;
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price|null
     */
    public function costPrice(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price;
    /**
     * @return string|null
     */
    public function barcode(): ?string;
}
interface StockQuantityAwareInterface
{
    /**
     * @return int
     */
    public function defaultQuantity(): int;
    /**
     * @param int $defaultQuantity
     *
     * @return void
     */
    public function setDefaultQuantity(int $defaultQuantity): void;
}
interface PriceAwareInterface
{
    public function price(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price;
    public function setPrice(?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price $price): void;
}
trait VariantGetterDecoratorTrait
{
    abstract protected function baseVariant(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantInterface;
    public function uuid(): string
    {
    }
    public function name(): string
    {
    }
    public function description(): string
    {
    }
    public function sku(): string
    {
    }
    public function price(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price
    {
    }
    public function vat(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat
    {
    }
    public function presentation(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation
    {
    }
    public function unitName(): ?string
    {
    }
    public function options(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection
    {
    }
    public function costPrice(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price
    {
    }
    public function barcode(): ?string
    {
    }
}
class LazyVariant implements \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantInterface, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\StockQuantityAwareInterface, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\PriceAwareInterface
{
    use \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantGetterDecoratorTrait;
    /**
     * @var int
     */
    private $localId;
    /**
     * @var VariantTransferInterface
     */
    private $base;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Map\MapRecordCreator
     */
    private $recordCreator;
    /**
     * @var bool
     */
    private $persisted;
    public function __construct(int $localId, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantTransferInterface $base, \Inpsyde\Zettle\PhpSdk\Map\MapRecordCreator $recordCreator)
    {
    }
    public function uuid(): string
    {
    }
    public function defaultQuantity(): int
    {
    }
    public function setDefaultQuantity(int $defaultQuantity): void
    {
    }
    public function setPrice(?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price $price): void
    {
    }
    protected function baseVariant(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantInterface
    {
    }
}
/**
 * Interface WritableVariantInterface
 * phpcs:disable Inpsyde.CodeQuality.NoAccessors
 *
 * @package Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant
 */
interface WritableVariantInterface extends \Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\VatSetterInterface
{
    public function setUuid(string $uuid): void;
    public function setName(string $name): void;
    public function setDescription(string $description): void;
    public function setSku(string $sku): void;
    public function setPrice(?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price $price): void;
    public function setPresentation(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation $presentation): void;
    public function setOptions(\Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection $options): void;
    public function setUnitName(string $unitName): void;
    public function setCostPrice(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price $costPrice): void;
    public function setBarcode(string $barcode): void;
}
interface VariantTransferInterface extends \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantInterface, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\WritableVariantInterface
{
}
/**
 * Class Variant
 * phpcs:disable Inpsyde.CodeQuality.PropertyPerClassLimit.TooMuchProperties
 * phpcs:disable Inpsyde.CodeQuality.NoAccessors *
 *
 * @package Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant
 */
class Variant implements \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantTransferInterface, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\StockQuantityAwareInterface, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\PriceAwareInterface
{
    /**
     * @var string
     */
    private $uuid;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $description;
    /**
     * @var string
     */
    private $sku;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price|null
     */
    private $price;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat|null
     */
    private $vat;
    /**
     * @var int
     */
    private $defaultQuantity;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation
     */
    private $presentation;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection
     */
    private $options;
    /**
     * @var string|null
     */
    private $unitName;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price|null
     */
    private $costPrice;
    /**
     * @var string|null
     */
    private $barcode;
    /**
     * Variant constructor.
     *
     * @param string $uuid
     * @param string $name
     * @param string $description
     * @param string $sku
     * @param int $defaultQuantity
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price|null $price
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat|null $vat
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation|null $presentation
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection|null $options
     * @param string|null $unitName
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price|null $costPrice
     * @param string|null $barcode
     */
    public function __construct(string $uuid, string $name, string $description, string $sku, int $defaultQuantity, ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price $price = null, ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat $vat = null, ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation $presentation = null, ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection $options = null, ?string $unitName = null, ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price $costPrice = null, ?string $barcode = null)
    {
    }
    /**
     * @return string
     */
    public function uuid(): string
    {
    }
    /**
     * @param string $uuid
     */
    public function setUuid(string $uuid): void
    {
    }
    /**
     * @return string
     */
    public function name(): string
    {
    }
    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
    }
    /**
     * @return string
     */
    public function description(): string
    {
    }
    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
    }
    /**
     * @return string
     */
    public function sku(): string
    {
    }
    /**
     * @param string $sku
     */
    public function setSku(string $sku): void
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price|null
     */
    public function price(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price|null $price
     */
    public function setPrice(?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price $price): void
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat
     */
    public function vat(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat $vat
     */
    public function setVat(?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat $vat): void
    {
    }
    /**
     * @return int
     */
    public function defaultQuantity(): int
    {
    }
    /**
     * @param int $defaultQuantity
     *
     * @return void
     */
    public function setDefaultQuantity(int $defaultQuantity): void
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation|null
     */
    public function presentation(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation $presentation
     */
    public function setPresentation(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation $presentation): void
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection|null
     */
    public function options(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection $options
     */
    public function setOptions(\Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection $options): void
    {
    }
    /**
     * @return string|null
     */
    public function unitName(): ?string
    {
    }
    /**
     * @param string|null $unitName
     */
    public function setUnitName(string $unitName): void
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price|null
     */
    public function costPrice(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price|null $costPrice
     */
    public function setCostPrice(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price $costPrice): void
    {
    }
    /**
     * @return string|null
     */
    public function barcode(): ?string
    {
    }
    /**
     * @param string|null $barcode
     */
    public function setBarcode(string $barcode): void
    {
    }
}
final class VariantCollection
{
    /**
     * @var VariantInterface[]
     */
    private $collection = [];
    /**
     * VariantCollection constructor.
     *
     * @param VariantInterface[] $variants
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantInterface ...$variants)
    {
    }
    /**
     * @param VariantInterface $variant
     *
     * @return VariantCollection
     */
    public function add(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantInterface $variant): self
    {
    }
    /**
     * @param VariantInterface $variant
     *
     * @return VariantCollection
     */
    public function remove(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantInterface $variant): self
    {
    }
    /**
     * @param string $uuid
     *
     * @return VariantInterface
     */
    public function get(string $uuid): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantInterface
    {
    }
    /**
     * @return Variant[]
     */
    public function all(): array
    {
    }
    /**
     * @return VariantCollection
     */
    public function reset(): self
    {
    }
}
/**
 * Trait VariantSetterDecoratorTrait
 * phpcs:disable Inpsyde.CodeQuality.NoAccessors
 *
 * @package Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant
 */
trait VariantSetterDecoratorTrait
{
    abstract protected function baseWritableVariant(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\WritableVariantInterface;
    public function setUuid(string $uuid): void
    {
    }
    public function setName(string $name): void
    {
    }
    public function setDescription(string $description): void
    {
    }
    public function setSku(string $sku): void
    {
    }
    public function setPrice(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price $price): void
    {
    }
    public function setVat(?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat $vat): void
    {
    }
    public function setPresentation(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Presentation\Presentation $presentation): void
    {
    }
    public function setOptions(\Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection $options): void
    {
    }
    public function setUnitName(string $unitName): void
    {
    }
    public function setCostPrice(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Price\Price $costPrice): void
    {
    }
    public function setBarcode(string $barcode): void
    {
    }
}
/**
 * Class WcVariationIterator
 *
 * Iterates over product attributes, generates all possible permutations,
 * and creates a Variant object for each of them
 *
 * @package Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant
 */
class WcVariationIterator implements \IteratorAggregate
{
    /**
     * @var \WC_Product_Variable
     */
    private $wcProduct;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface
     */
    private $builder;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface
     */
    private $repository;
    /**
     * WcVariationIterator constructor.
     *
     * @param \WC_Product_Variable $wcProduct
     * @param \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder
     * @param \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository
     */
    public function __construct(\WC_Product_Variable $wcProduct, \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder, \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository)
    {
    }
    /**
     * @inheritDoc
     *
     * TODO: Write Unit Test
     */
    public function getIterator(): \Generator
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantInventoryState;

final class VariantInventoryState
{
    /**
     * @var string
     */
    private $uuid;
    /**
     * @var string
     */
    private $productUuid;
    /**
     * @var string
     */
    private $variantUuid;
    /**
     * @var int
     */
    private $balance;
    /**
     * VariantChangeHistory constructor.
     *
     * @param string $locationUuid
     * @param string $productUuid
     * @param string $variantUuid
     * @param int $balance
     *
     */
    public function __construct(string $locationUuid, string $productUuid, string $variantUuid, int $balance)
    {
    }
    /**
     * @return string
     */
    public function locationUuid(): string
    {
    }
    /**
     * @return string
     */
    public function productUuid(): string
    {
    }
    /**
     * @return string
     */
    public function variantUuid(): string
    {
    }
    /**
     * @return int
     */
    public function balance(): int
    {
    }
}
class VariantInventoryStateCollection
{
    /**
     * @var VariantInventoryState[]
     */
    private $collection = [];
    /**
     * VariantChangeHistoryCollection constructor.
     *
     * @param array|null $inventoryStates
     */
    public function __construct(?array $inventoryStates = [])
    {
    }
    /**
     * @param VariantInventoryState $variantInventoryState
     *
     * @return VariantInventoryState
     */
    public function add(\Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantInventoryState\VariantInventoryState $variantInventoryState): self
    {
    }
    /**
     * @param VariantInventoryState $variantInventoryState
     *
     * @return VariantInventoryState
     */
    public function remove(\Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantInventoryState\VariantInventoryState $variantInventoryState): self
    {
    }
    /**
     * @param string $uuid
     *
     * @return VariantInventoryState
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\IdNotFoundException
     */
    public function get(string $uuid): \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantInventoryState\VariantInventoryState
    {
    }
    /**
     * @return VariantInventoryState[]
     */
    public function all(): array
    {
    }
    /**
     * @return VariantInventoryState
     */
    public function reset(): self
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption;

/**
 * Unique Data Set for Attributes
 */
class AttributeSet
{
    /**
     * @var array<string, string[]>
     */
    protected $set = [];
    /**
     * @param string $type
     * @param string $attribute
     */
    public function add(string $type, string $attribute): void
    {
    }
    /**
     * @param string $type
     */
    public function remove(string $type): void
    {
    }
    /**
     * @param string $type
     *
     * @return array
     */
    public function get(string $type): array
    {
    }
    /**
     * @param string $type
     *
     * @return bool
     */
    public function has(string $type): bool
    {
    }
    /**
     * Returns the Set as array
     *
     * @return array<string, string>
     */
    public function all(): array
    {
    }
}
interface AttributeType
{
    /**
     * Edge Case 'any' Attribute
     */
    public const ANY = 'Any';
}
class VariantOption
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $value;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageInterface
     */
    private $image;
    /**
     * VariantOption constructor.
     *
     * @param string $name
     * @param string $value
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageInterface|null $image
     */
    public function __construct(string $name, string $value, ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageInterface $image = null)
    {
    }
    /**
     * @return string
     */
    public function name(): string
    {
    }
    /**
     * @param string $name
     *
     * @return VariantOption
     */
    public function setName(string $name): \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOption
    {
    }
    /**
     * @return string
     */
    public function value(): string
    {
    }
    /**
     * @param string $value
     *
     * @return VariantOption
     */
    public function setValue(string $value): \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOption
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageInterface
     */
    public function image(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageInterface
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageInterface $image
     */
    public function setImage(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Image\ImageInterface $image): \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOption
    {
    }
}
class VariantOptionCollection
{
    /**
     * @var VariantOption[]
     */
    private $collection = [];
    /**
     * VariantOptionCollection constructor.
     *
     * @param VariantOption[] $variantOptions
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOption ...$variantOptions)
    {
    }
    /**
     * @param VariantOption $variantOption
     *
     * @return VariantOptionCollection
     */
    public function add(\Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOption $variantOption): self
    {
    }
    /**
     * @param VariantOption $variantOption
     *
     * @return VariantOptionCollection
     */
    public function remove(\Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOption $variantOption): self
    {
    }
    /**
     * @param VariantOption $variantOption
     *
     * @return VariantOption|null
     */
    public function get(\Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOption $variantOption): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOption
    {
    }
    /**
     * @param string $key
     *
     * @return VariantOption|null
     */
    public function byName(string $key): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOption
    {
    }
    public function set(string $key, string $value)
    {
    }
    /**
     * @return VariantOption[]
     */
    public function all(): ?array
    {
    }
    /**
     * @return VariantOptionCollection
     */
    public function reset(): self
    {
    }
}
class VariantOptionDefinitions
{
    /**
     * @var VariantOptionCollection[]
     */
    private $definitions = [];
    public function __construct()
    {
    }
    /**
     * Add new Definition
     *
     * @param string $name
     * @param VariantOptionCollection $definition
     *
     * @return $this
     */
    public function addDefinition(string $name, \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection $definition): self
    {
    }
    /**
     * Append new VariantOptions to Definition
     *
     * @param string $name
     * @param VariantOptionCollection $collection
     *
     * @return $this
     */
    public function addCollectionToDefinition(string $name, \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection $collection): self
    {
    }
    /**
     * @return VariantOptionCollection[]
     */
    public function definitions(): array
    {
    }
}
class VariantOptionFactory
{
    /**
     * @param string $name
     * @param string $value
     *
     * @return VariantOption
     */
    public function create(string $name, string $value): \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOption
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat;

final class Vat
{
    /**
     * @var float
     */
    private $percentage;
    /**
     * Vat constructor.
     * @param float $percentage
     */
    public function __construct(float $percentage)
    {
    }
    /**
     * @return float
     */
    public function percentage(): float
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\Exception;

interface BuilderException extends \Throwable
{
}
interface ValidatorException extends \Inpsyde\Zettle\PhpSdk\Exception\BuilderException
{
    /**
     * Values of ValidationErrorCodes
     * @return string[]
     */
    public function errorCodes(): array;
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Exception\Coordinates;

final class InvalidLatitudeException extends \Exception implements \Inpsyde\Zettle\PhpSdk\Exception\ValidatorException
{
    public function errorCodes(): array
    {
    }
}
final class InvalidLongitudeException extends \Exception implements \Inpsyde\Zettle\PhpSdk\Exception\ValidatorException
{
    public function errorCodes(): array
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Exception;

class EntityFactoryException extends \Exception
{
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Exception\Payment;

final class InvalidPaymentTypeException extends \Exception implements \Inpsyde\Zettle\PhpSdk\Exception\ValidatorException
{
    public function errorCodes(): array
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Exception\Vat;

final class VatNotFound extends \Exception implements \Inpsyde\Zettle\PhpSdk\Exception\ValidatorException
{
    public function errorCodes(): array
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Handler\Payment;

interface PaymentHandlerInterface
{
    /**
     * @param string $paymentType
     *
     * @return bool
     */
    public function accepts(string $paymentType): bool;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod $payment
     *
     * @return array
     */
    public function serialize(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod $payment): array;
    /**
     * @param array $data
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
     */
    public function deserialize(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod;
}
abstract class AbstractPaymentHandler implements \Inpsyde\Zettle\PhpSdk\DAL\Handler\Payment\PaymentHandlerInterface
{
    /**
     * @var string
     */
    private $validPaymentType;
    /**
     * AbstractPaymentHandler constructor.
     *
     * @param string $validPaymentType
     */
    public function __construct(string $validPaymentType)
    {
    }
    /**
     * @inheritDoc
     */
    public function accepts(string $paymentType): bool
    {
    }
    /**
     * @inheritDoc
     */
    abstract public function serialize(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod $payment): array;
    /**
     * @inheritDoc
     */
    abstract public function deserialize(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod;
}
class CardOnlinePaymentHandler extends \Inpsyde\Zettle\PhpSdk\DAL\Handler\Payment\AbstractPaymentHandler
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\CardOnlinePaymentBuilder
     */
    private $cardOnlinePaymentBuilder;
    /**
     * CardOnlinePaymentHandler constructor.
     *
     * @param string $validPaymentType
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\CardOnlinePaymentBuilderInterface $cardOnlinePaymentBuilder
     */
    public function __construct(string $validPaymentType, \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\CardOnlinePaymentBuilderInterface $cardOnlinePaymentBuilder)
    {
    }
    /**
     * @inheritDoc
     */
    public function serialize(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod $payment): array
    {
    }
    /**
     * @inheritDoc
     */
    public function deserialize(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
    {
    }
}
class CardPaymentHandler extends \Inpsyde\Zettle\PhpSdk\DAL\Handler\Payment\AbstractPaymentHandler
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\CardPaymentBuilder
     */
    private $cardPaymentBuilder;
    /**
     * CardPaymentHandler constructor.
     *
     * @param string $validPaymentType
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\CardPaymentBuilderInterface $cardPaymentBuilder
     */
    public function __construct(string $validPaymentType, \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\CardPaymentBuilderInterface $cardPaymentBuilder)
    {
    }
    /**
     * @inheritDoc
     */
    public function serialize(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod $payment): array
    {
    }
    /**
     * @inheritDoc
     */
    public function deserialize(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
    {
    }
}
class CashPaymentHandler extends \Inpsyde\Zettle\PhpSdk\DAL\Handler\Payment\AbstractPaymentHandler
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\CashPaymentBuilder
     */
    private $cashPaymentBuilder;
    /**
     * CashPaymentHandler constructor.
     *
     * @param string $validPaymentType
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\CashPaymentBuilderInterface $cashPaymentBuilder
     */
    public function __construct(string $validPaymentType, \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\CashPaymentBuilderInterface $cashPaymentBuilder)
    {
    }
    /**
     * @inheritDoc
     */
    public function serialize(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod $payment): array
    {
    }
    /**
     * @inheritDoc
     */
    public function deserialize(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
    {
    }
}
class CustomPaymentHandler extends \Inpsyde\Zettle\PhpSdk\DAL\Handler\Payment\AbstractPaymentHandler
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\CustomPaymentBuilder
     */
    private $customPaymentBuilder;
    /**
     * CustomPaymentHandler constructor.
     *
     * @param string $validPaymentType
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\CustomPaymentBuilderInterface $customPaymentBuilder
     */
    public function __construct(string $validPaymentType, \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\CustomPaymentBuilderInterface $customPaymentBuilder)
    {
    }
    /**
     * @inheritDoc
     */
    public function serialize(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod $payment): array
    {
    }
    /**
     * @inheritDoc
     */
    public function deserialize(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
    {
    }
}
class GiftcardPaymentHandler extends \Inpsyde\Zettle\PhpSdk\DAL\Handler\Payment\AbstractPaymentHandler
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\GiftcardPaymentBuilder
     */
    private $giftcardPaymentBuilder;
    /**
     * GiftcardPaymentHandler constructor.
     *
     * @param string $validPaymentType
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\GiftcardPaymentBuilderInterface $giftcardPaymentBuilder
     */
    public function __construct(string $validPaymentType, \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\GiftcardPaymentBuilderInterface $giftcardPaymentBuilder)
    {
    }
    /**
     * @inheritDoc
     */
    public function serialize(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod $payment): array
    {
    }
    /**
     * @inheritDoc
     */
    public function deserialize(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
    {
    }
}
class InvoicePaymentHandler extends \Inpsyde\Zettle\PhpSdk\DAL\Handler\Payment\AbstractPaymentHandler
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\InvoicePaymentBuilder
     */
    private $invoicePaymentBuilder;
    /**
     * InvoicePaymentHandler constructor.
     *
     * @param string $validPaymentType
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\InvoicePaymentBuilderInterface $invoicePaymentBuilder
     */
    public function __construct(string $validPaymentType, \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\InvoicePaymentBuilderInterface $invoicePaymentBuilder)
    {
    }
    /**
     * @inheritDoc
     */
    public function serialize(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod $payment): array
    {
    }
    /**
     * @inheritDoc
     */
    public function deserialize(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
    {
    }
}
class KlarnaPaymentHandler extends \Inpsyde\Zettle\PhpSdk\DAL\Handler\Payment\AbstractPaymentHandler
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\KlarnaPaymentBuilder
     */
    private $klarnaPaymentBuilder;
    /**
     * KlarnaPaymentHandler constructor.
     *
     * @param string $validPaymentType
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\KlarnaPaymentBuilderInterface $klarnaPaymentBuilder
     */
    public function __construct(string $validPaymentType, \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\KlarnaPaymentBuilderInterface $klarnaPaymentBuilder)
    {
    }
    /**
     * @inheritDoc
     */
    public function serialize(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod $payment): array
    {
    }
    /**
     * @inheritDoc
     */
    public function deserialize(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
    {
    }
}
class MobilePaymentHandler extends \Inpsyde\Zettle\PhpSdk\DAL\Handler\Payment\AbstractPaymentHandler
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\MobilePaymentBuilder
     */
    private $mobilePaymentBuilder;
    /**
     * MobilePaymentHandler constructor.
     *
     * @param string $validPaymentType
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\MobilePaymentBuilderInterface $mobilePaymentBuilder
     */
    public function __construct(string $validPaymentType, \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\MobilePaymentBuilderInterface $mobilePaymentBuilder)
    {
    }
    /**
     * @inheritDoc
     */
    public function serialize(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod $payment): array
    {
    }
    /**
     * @inheritDoc
     */
    public function deserialize(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
    {
    }
}
class PaypalPaymentHandler extends \Inpsyde\Zettle\PhpSdk\DAL\Handler\Payment\AbstractPaymentHandler
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\PaypalPaymentBuilder
     */
    private $paypalPaymentBuilder;
    /**
     * PaypalPaymentHandler constructor.
     *
     * @param string $validPaymentType
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\PaypalPaymentBuilderInterface $paypalPaymentBuilder
     */
    public function __construct(string $validPaymentType, \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\PaypalPaymentBuilderInterface $paypalPaymentBuilder)
    {
    }
    /**
     * @inheritDoc
     */
    public function serialize(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod $payment): array
    {
    }
    /**
     * @inheritDoc
     */
    public function deserialize(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
    {
    }
}
class StoreCreditPayment extends \Inpsyde\Zettle\PhpSdk\DAL\Handler\Payment\AbstractPaymentHandler
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\StoreCreditPaymentBuilder
     */
    private $storeCreditPaymentBuilder;
    /**
     * StoreCreditPayment constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\StoreCreditPaymentBuilderInterface $storeCreditPaymentBuilder
     * @param string $validPaymentType
     */
    public function __construct(string $validPaymentType, \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\StoreCreditPaymentBuilderInterface $storeCreditPaymentBuilder)
    {
    }
    /**
     * @inheritDoc
     */
    public function serialize(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod $payment): array
    {
    }
    /**
     * @inheritDoc
     */
    public function deserialize(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
    {
    }
}
class SwishPaymentHandler extends \Inpsyde\Zettle\PhpSdk\DAL\Handler\Payment\AbstractPaymentHandler
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\SwishPaymentBuilder
     */
    private $swishPaymentBuilder;
    /**
     * SwishPaymentHandler constructor.
     *
     * @param string $validPaymentType
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\SwishPaymentBuilderInterface $swishPaymentBuilder
     */
    public function __construct(string $validPaymentType, \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\SwishPaymentBuilderInterface $swishPaymentBuilder)
    {
    }
    /**
     * @inheritDoc
     */
    public function serialize(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod $payment): array
    {
    }
    /**
     * @inheritDoc
     */
    public function deserialize(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
    {
    }
}
class VippsPaymentHandler extends \Inpsyde\Zettle\PhpSdk\DAL\Handler\Payment\AbstractPaymentHandler
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\VippsPaymentBuilder
     */
    private $vippsPaymentBuilder;
    /**
     * VippsPaymentHandler constructor.
     *
     * @param string $validPaymentType
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\VippsPaymentBuilderInterface $vippsPaymentBuilder
     */
    public function __construct(string $validPaymentType, \Inpsyde\Zettle\PhpSdk\DAL\Builder\Payment\VippsPaymentBuilderInterface $vippsPaymentBuilder)
    {
    }
    /**
     * @inheritDoc
     */
    public function serialize(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod $payment): array
    {
    }
    /**
     * @inheritDoc
     */
    public function deserialize(array $data): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Provider\Image;

interface UrlProviderInterface
{
    /**
     * @param string $imageId An ID/lookupKey corresponding to the requested URL
     *
     * @return string The full URL to the requested image
     */
    public function provide(string $imageId): string;
}
/**
 * Always returns the same specified URL when queried
 */
class PlaceholderUrlProvider implements \Inpsyde\Zettle\PhpSdk\DAL\Provider\Image\UrlProviderInterface
{
    /**
     * @var string
     */
    private $url;
    public function __construct(string $url)
    {
    }
    /**
     * @inheritDoc
     */
    public function provide(string $imageId): string
    {
    }
}
/**
 * Returns the path to a WordPress attachment on the server's filesystem.
 * Yes we are using filepaths as a Uniform Resource Locator, which is entirely valid
 * Though admittedly we are omitting the file:// access method
 */
class WordPressFilePathProvider implements \Inpsyde\Zettle\PhpSdk\DAL\Provider\Image\UrlProviderInterface
{
    /**
     * {@inheritDoc}
     */
    public function provide(string $imageId): string
    {
    }
}
class WordpressUrlProvider implements \Inpsyde\Zettle\PhpSdk\DAL\Provider\Image\UrlProviderInterface
{
    /**
     * @param string $attachmentId
     *
     * @return string
     */
    public function provide(string $attachmentId): string
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Provider\Organization;

interface OrganizationProvider
{
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    public function provide(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization;
}
class RestOrganizationProvider implements \Inpsyde\Zettle\PhpSdk\DAL\Provider\Organization\OrganizationProvider
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\API\OAuth\Organizations
     */
    private $client;
    public function __construct(\Inpsyde\Zettle\PhpSdk\API\OAuth\Organizations $client)
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    public function provide(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
}
/**
 * Organization data rarely changes, so it can be cached locally using this Decorator
 */
class TransientCachingOrganizationProvider implements \Inpsyde\Zettle\PhpSdk\DAL\Provider\Organization\OrganizationProvider
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization|null
     */
    private $cache;
    /**
     * Transient Identifier Key
     *
     * @var string
     */
    private $key;
    /**
     * @var int
     */
    private $expiration;
    /**
     * @var OrganizationProvider
     */
    private $provider;
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Provider\Organization\OrganizationProvider $provider, string $key, int $expiration = 0)
    {
    }
    /**
     * Get the Organization Data from transient
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
     *
     * phpcs:disable WordPress.PHP.DiscouragedPHPFunctions.serialize_unserialize
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    public function provide(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    private function getCached(): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    /**
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
     * phpcs:disable WordPress.PHP.DiscouragedPHPFunctions.serialize_serialize
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    private function delegateAndCache(): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Provider\Vat;

interface VatProvider
{
    /**
     * @param \WC_Product $wcProduct
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\Vat\VatNotFound
     * @throws \Exception
     */
    public function provide(\WC_Product $wcProduct): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat;
}
class WooCommerceVatProvider implements \Inpsyde\Zettle\PhpSdk\DAL\Provider\Vat\VatProvider
{
    /**
     * @var array
     */
    private $location;
    /**
     * @param array $location An array with keys country, state, etc., used for looking up taxes.
     */
    public function __construct(array $location)
    {
    }
    public function provide(\WC_Product $wcProduct): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Vat\Vat
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Validator\Coordinates;

class CoordinatesValidator
{
    /**
     * @param string $latitude
     * @param string $longitude
     *
     * @return bool
     *
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\Coordinates\InvalidLatitudeException
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\Coordinates\InvalidLongitudeException
     */
    public function validate(string $latitude, string $longitude): bool
    {
    }
    /**
     * @param string $latitude
     *
     * @return bool
     */
    private function validateLatitude(string $latitude): bool
    {
    }
    /**
     * @param string $longitude
     *
     * @return bool
     */
    private function validateLongitude(string $longitude): bool
    {
    }
    /**
     * @param string $value
     * @param float $min
     * @param float $max
     *
     * @return bool
     */
    private function isNumericInRange(string $value, float $min, float $max): bool
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DAL\Validator\Payment;

class PaymentValidator
{
    /**
     * @param string $validPaymentType
     * @param string $paymentType
     *
     * @return bool
     *
     * @throws \Inpsyde\Zettle\PhpSdk\DAL\Exception\Payment\InvalidPaymentTypeException
     */
    public function validate(string $validPaymentType, string $paymentType): bool
    {
    }
    /**
     * @param string $validPaymentType
     * @param string $paymentType
     *
     * @return bool
     */
    private function validatePaymentType(string $validPaymentType, string $paymentType): bool
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\DB;

/**
 * Interface Table
 */
interface Table
{
    const MAX_INDEX_LENGTH = 191;
    /**
     * The name of the database table
     *
     * @return string
     */
    public function name(): string;
    /**
     * The table schema
     *
     * @return string
     */
    public function schema(): string;
}
class DataMappingTable implements \Inpsyde\Zettle\PhpSdk\DB\Table
{
    /**
     * @var string
     */
    private $name;
    /**
     * DataMappingTable constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
    }
    /**
     * @return string
     */
    public function name(): string
    {
    }
    /**
     * @return string
     */
    public function schema(): string
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\Exception;

class BuilderNotFoundException extends \Exception implements \Inpsyde\Zettle\PhpSdk\Exception\BuilderException
{
}
class IdNotFoundException extends \Exception
{
}
/**
 * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
 * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
 * phpcs:disable Inpsyde.CodeQuality.LineLength.TooLong
 */
class InvalidBuilderPayloadException extends \Exception implements \Inpsyde\Zettle\PhpSdk\Exception\BuilderException, \Inpsyde\Zettle\PhpSdk\Exception\ValidatorException
{
    protected $payload;
    /**
     * @var string[]
     */
    protected $errorCodes;
    /**
     * @param string[] $errorCodes Values of ValidationErrorCodes.
     */
    public function __construct(string $className, $payload, array $errorCodes, ?\Throwable $previous = null)
    {
    }
    public function payload()
    {
    }
    public function errorCodes(): array
    {
    }
}
class UnexpectedBuilderPayloadTypeException extends \Inpsyde\Zettle\PhpSdk\Exception\InvalidBuilderPayloadException
{
    public function __construct(string $expectedClassName, $payload)
    {
    }
}
interface ValidationErrorCodes
{
    public const NO_VARIANTS = 'no-variants';
    public const TOO_MANY_VARIANTS = 'too-many-variants';
    public const NO_VARIANT_OPTIONS = 'no-variant-options';
    public const TOO_MANY_VARIANT_OPTIONS = 'too-many-variant-options';
    public const VARIANT_OPTION_AMOUNT_MISMATCH = 'variant-option-amount-mismatch';
    public const TOO_SHORT_VARIANT_NAME = 'too-short-variant-name';
    public const TOO_LONG_VARIANT_NAME = 'too-long-variant-name';
    public const DIFFERING_VARIANT_TAXES = 'differing-variant-taxes';
    public const TOO_BIG_STOCK = 'too-big-stock';
    public const INVALID_HEX_COLOR = 'invalid-hex-color';
    public const SHORT_HEX_COLOR = 'short-hex-color';
    public const IMAGE_NOT_FOUND = 'image-not-found';
    public const INVALID_IMAGE_SIZE = 'invalid-image-size';
    public const UNSUPPORTED_IMAGE_FILE_SIZE = 'unsupported-image-file-size';
    public const UNSUPPORTED_IMAGE_FILE_TYPE = 'unsupported-image-file-type';
    public const UNEXPECTED_IMAGE_URL = 'unexpected-image-url';
    public const INVALID_COORDINATES = 'invalid-coordinates';
    public const INVALID_PAYMENT_TYPE = 'invalid-payment-type';
    public const TAX_RATE_NOT_FOUND = 'tax-rate-not-found';
    public const UNEXPECTED_PAYLOAD_TYPE = 'unexpected-payload-type';
}
namespace Inpsyde\Zettle\PhpSdk\Exception\Validator;

final class DifferentVariantVatException extends \Exception implements \Inpsyde\Zettle\PhpSdk\Exception\ValidatorException
{
    public function __construct(string $productName, array $vatValues, int $code = 0, ?\Throwable $previous = null)
    {
    }
    public function errorCodes(): array
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\Exception\Validator\Image;

class ImageNotFoundException extends \Exception implements \Inpsyde\Zettle\PhpSdk\Exception\ValidatorException
{
    public function errorCodes(): array
    {
    }
}
final class InvalidImageSizeException extends \Exception implements \Inpsyde\Zettle\PhpSdk\Exception\ValidatorException
{
    public function errorCodes(): array
    {
    }
}
class UnexpectedImageUrlException extends \Exception implements \Inpsyde\Zettle\PhpSdk\Exception\ValidatorException
{
    public function errorCodes(): array
    {
    }
}
final class UnsupportedImageFileSizeException extends \Exception implements \Inpsyde\Zettle\PhpSdk\Exception\ValidatorException
{
    public function errorCodes(): array
    {
    }
}
final class UnsupportedImageFileTypeException extends \Exception implements \Inpsyde\Zettle\PhpSdk\Exception\ValidatorException
{
    public function errorCodes(): array
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\Exception\Validator;

class MaximumStockException extends \Exception implements \Inpsyde\Zettle\PhpSdk\Exception\ValidatorException
{
    public function __construct(int $stock, int $maxStock, int $code = 0, ?\Throwable $previous = null)
    {
    }
    public function errorCodes(): array
    {
    }
}
final class MaximumVariantsException extends \Exception implements \Inpsyde\Zettle\PhpSdk\Exception\ValidatorException
{
    public function __construct(string $productName, int $variantsAmount, int $code = 0, ?\Throwable $previous = null)
    {
    }
    public function errorCodes(): array
    {
    }
}
final class MinimumVariantsException extends \Exception implements \Inpsyde\Zettle\PhpSdk\Exception\ValidatorException
{
    public function __construct(string $productName, int $code = 0, ?\Throwable $previous = null)
    {
    }
    public function errorCodes(): array
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\Exception\Validator\Presentation;

class InvalidHexColorException extends \Exception implements \Inpsyde\Zettle\PhpSdk\Exception\ValidatorException
{
    public function __construct(string $color, ?\Throwable $previous = null)
    {
    }
    public function errorCodes(): array
    {
    }
}
class ShortHexColorException extends \Exception implements \Inpsyde\Zettle\PhpSdk\Exception\ValidatorException
{
    public function __construct(string $color, string $context, ?\Throwable $previous = null)
    {
    }
    public function errorCodes(): array
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\Exception\Validator\VariantOption;

class MaximumVariantOptionNameCharacterLengthException extends \Exception implements \Inpsyde\Zettle\PhpSdk\Exception\ValidatorException
{
    public function __construct(string $variantOptionName, int $maxLength, ?\Throwable $previous = null)
    {
    }
    public function errorCodes(): array
    {
    }
}
class MinimumVariantOptionNameCharacterLengthException extends \Exception implements \Inpsyde\Zettle\PhpSdk\Exception\ValidatorException
{
    public function __construct(string $variantOptionName, int $minLength, ?\Throwable $previous = null)
    {
    }
    public function errorCodes(): array
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\Exception\Validator\VariantOptionDefinitions;

class EmptyVariantOptionCollectionException extends \Exception implements \Inpsyde\Zettle\PhpSdk\Exception\ValidatorException
{
    public function __construct(array $emptyOptions, ?\Throwable $previous = null)
    {
    }
    public function errorCodes(): array
    {
    }
}
class EmptyVariantOptionDefinitionsException extends \Exception implements \Inpsyde\Zettle\PhpSdk\Exception\ValidatorException
{
    public function __construct(\Throwable $previous = null)
    {
    }
    public function errorCodes(): array
    {
    }
}
// phpcs:ignore Inpsyde.CodeQuality.LineLength.TooLong
class MaximumVariantOptionDefinitionsAmountException extends \Exception implements \Inpsyde\Zettle\PhpSdk\Exception\ValidatorException
{
    /**
     * @param int $limit                Maximum amount of VariantOptionDefinitions
     * @param int $amount               VariantOptionDefinitions amount provided
     * @param \Throwable|null $previous
     */
    public function __construct(int $limit, int $amount, ?\Throwable $previous = null)
    {
    }
    public function errorCodes(): array
    {
    }
}
class VariantOptionAmountMismatchException extends \Exception implements \Inpsyde\Zettle\PhpSdk\Exception\ValidatorException
{
    public function __construct(int $expected, int $amount, ?\Throwable $previous = null)
    {
    }
    public function errorCodes(): array
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\Exception;

class WebhookException extends \Exception
{
}
class ZettleRestException extends \Exception
{
    const TYPE_ENTITY_NOT_FOUND = 'ENTITY_NOT_FOUND';
    const TYPE_PRODUCT_NOT_TRACKED = 'PRODUCT_NOT_TRACKED';
    const TYPE_UNAUTHENTICATED = 'UNAUTHENTICATED';
    const TYPE_UNKNOWN = 'UNKNOWN';
    /**
     * @var array
     */
    private $json;
    /**
     * @var array
     */
    private $payload;
    public function __construct(string $message = "", int $code = 0, array $json = [], array $payload = [], ?\Throwable $previous = null)
    {
    }
    /**
     * Returns error context data received from Zettle
     *
     * @return array
     */
    public function json(): array
    {
    }
    /**
     * Inspects the error context data to check if the error type matches the specified one
     *
     * @param string $errorType
     *
     * @return bool
     */
    public function isType(string $errorType): bool
    {
    }
    public function type(): string
    {
    }
    public function developerMessage(): string
    {
    }
    public function violations(): array
    {
    }
    public function payload(): array
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\Factory;

interface WcProductFactoryInterface
{
    /**
     * Fetch a Record with the provided uuid and return a WC_Product
     *
     * @param string $uuid
     *
     * @return \WC_Product|null
     */
    public function fromUuid(string $uuid): ?\WC_Product;
}
class WcProductFactory implements \Inpsyde\Zettle\PhpSdk\Factory\WcProductFactoryInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Repository\Zettle\Product\ProductRepositoryInterface
     */
    private $izProductRepository;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface
     */
    private $wcProductRepository;
    /**
     * ProductRepository constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\Repository\Zettle\Product\ProductRepositoryInterface $izProductRepository
     * @param \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $wcProductRepository
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\Repository\Zettle\Product\ProductRepositoryInterface $izProductRepository, \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $wcProductRepository)
    {
    }
    /**
     * @inheritDoc
     */
    public function fromUuid(string $uuid): ?\WC_Product
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\Filter;

interface FilterInterface
{
    /**
     * @param mixed $entity
     * @param mixed $payload
     *
     * @return bool
     */
    public function accepts($entity, $payload): bool;
    /**
     * @param mixed $entity
     * @param mixed $payload
     *
     * @return mixed
     */
    public function filter($entity, $payload);
}
// phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
// phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
class CompoundFilter implements \Inpsyde\Zettle\PhpSdk\Filter\FilterInterface
{
    /**
     * @var FilterInterface[]
     */
    private $filters;
    public function __construct(\Inpsyde\Zettle\PhpSdk\Filter\FilterInterface ...$filters)
    {
    }
    /**
     * @inheritDoc
     */
    public function accepts($entity, $payload): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function filter($entity, $payload)
    {
    }
}
/**
 * Limits the given description in length
 *
 * @TODO: create injectable Filter instead of current Helper approach
 */
class DescriptionLengthFilter
{
    public const MAX_DESCRIPTION_SIZE = 1024;
    public const DEFAULT_TRIM_MARKER = '...';
    /**
     * Limits the given description in length according to given parameters
     *
     * @param string $description   Text/Description which will be trimmed
     * @param int $start            Start character position
     * @param int $max              End character position
     * @param string $trimMaker     Replacement for the rest of the characters
     *
     * @return string
     */
    public static function limitDescription(string $description, int $start = 0, int $max = self::MAX_DESCRIPTION_SIZE, string $trimMaker = self::DEFAULT_TRIM_MARKER): string
    {
    }
}
// phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
// phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
class ImageConnectionFilter implements \Inpsyde\Zettle\PhpSdk\Filter\FilterInterface
{
    /**
     * @inheritDoc
     */
    public function accepts($entity, $payload): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function filter($image, $payload)
    {
    }
}
/**
 * Sets Price to null.
 */
class PriceFilter implements \Inpsyde\Zettle\PhpSdk\Filter\FilterInterface
{
    /**
     * @inheritDoc
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     */
    public function accepts($entity, $payload): bool
    {
    }
    /**
     * @inheritDoc
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
     */
    public function filter($variant, $wcProduct)
    {
    }
}
// phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
// phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
/**
 * Class ProductConnectionFilter
 *
 * This filter connects an Zettle Product with its WooCommerce counterpart
 * by querying an ID mapping table
 *
 * @package Inpsyde\Zettle\PhpSdk\Filter
 */
class ProductConnectionFilter implements \Inpsyde\Zettle\PhpSdk\Filter\FilterInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface
     */
    private $idMap;
    private $lazyPool = [];
    /**
     * @var callable
     */
    private $productClientProvider;
    public function __construct(\Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface $idMap, callable $productClientProvider)
    {
    }
    /**
     * @inheritDoc
     */
    public function accepts($entity, $payload): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function filter($product, $wcProduct)
    {
    }
    private function getLazyProduct(int $localId, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductTransferInterface $product): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface
    {
    }
}
/**
 * Sets taxExempt and usesDefaultTax to null for existing items
 * because we are not supposed to overwrite taxes after creation.
 * For VAT accounts sets taxExempt to false (IZET-374).
 */
class TaxFilter implements \Inpsyde\Zettle\PhpSdk\Filter\FilterInterface
{
    /**
     * @var callable():string
     */
    protected $taxationType;
    /**
     * @param callable():string $taxationType Returns one of TaxationType values.
     * It's callback because of the recursive dependency.
     */
    public function __construct(callable $taxationType)
    {
    }
    /**
     * @inheritDoc
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     */
    public function accepts($entity, $payload): bool
    {
    }
    /**
     * @inheritDoc
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
     */
    public function filter($entity, $wcProduct)
    {
    }
    // phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
    private function existsRemotely($entity): bool
    {
    }
}
/**
 * Searches our ID-Map for an existing record and updates the Variant's UUID with it.
 * If none is found, it will wrap the Variant into a LazyVariant that will automatically
 * create a new entry as soon as required (when accessing its UUID)
 *
 * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
 * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
 */
class VariantConnectionFilter implements \Inpsyde\Zettle\PhpSdk\Filter\FilterInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface|\Inpsyde\Zettle\PhpSdk\Map\MapRecordCreator
     */
    private $idMap;
    private $lazyPool = [];
    public function __construct(\Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface $idMap)
    {
    }
    /**
     * @inheritDoc
     */
    public function accepts($entity, $payload): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function filter($variant, $wcProduct)
    {
    }
    private function getLazyVariant(int $localId, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantTransferInterface $variant): \Inpsyde\Zettle\PhpSdk\DAL\Entity\Variant\VariantInterface
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\Image;

interface ImageFormatRetrieverInterface
{
    /**
     * Determines the format of the given image.
     * @param string $url
     * @return string One of ImageFormat values
     * @throws \UnexpectedValueException If failed to determine type.
     */
    public function determineImageFormat(string $url): string;
}
/**
 * Uses exif_imagetype to determine image type.
 */
class ExifImageFormatRetriever implements \Inpsyde\Zettle\PhpSdk\Image\ImageFormatRetrieverInterface
{
    public function determineImageFormat(string $url): string
    {
    }
}
/**
 * Uses file extension to determine image type.
 */
class ExtensionImageFormatRetriever implements \Inpsyde\Zettle\PhpSdk\Image\ImageFormatRetrieverInterface
{
    public function determineImageFormat(string $url): string
    {
    }
}
/**
 * Image formats used in Zettle API
 */
interface ImageFormat
{
    public const JPEG = 'JPEG';
    public const PNG = 'PNG';
    public const TIFF = 'TIFF';
    public const GIF = 'GIF';
    public const BMP = 'BMP';
}
namespace Inpsyde\Zettle\PhpSdk\Iterator;

interface WcProductIterator extends \Iterator
{
    /**
     * Makes the Iterator traverse a different WC_Product instance.
     * the Iterator MUST rewind when receiving a new product
     *
     * @param \WC_Product $product
     */
    public function switchProduct(\WC_Product $product): void;
}
namespace Inpsyde\Zettle\PhpSdk\Iterator\Attachment;

/**
 * Returns the featured image attachment ID ($product->get_image_id())
 * of all the product's children.
 * You can use this to fetch all product images of variations of a variable product
 */
class ChildrenImageIterator implements \Inpsyde\Zettle\PhpSdk\Iterator\WcProductIterator
{
    /**
     * @var int[]
     */
    private $children = [];
    /**
     * @var int
     */
    private $key = 0;
    /**
     * @var \WC_Product
     */
    private $product;
    public function __construct(\WC_Product $product)
    {
    }
    #[\ReturnTypeWillChange]
    public function current()
    {
    }
    public function next(): void
    {
    }
    #[\ReturnTypeWillChange]
    public function key()
    {
    }
    public function valid(): bool
    {
    }
    public function rewind(): void
    {
    }
    /**
     * {@inheritDoc}
     */
    public function switchProduct(\WC_Product $product): void
    {
    }
}
/**
 * This class is admittedly a bit weird because it "iterates" over a single value.
 * But this construct allows us to combine it with other Iterators in a general-purpose
 * WcProductIteratorAggregate.
 */
class FeaturedImageIterator implements \Inpsyde\Zettle\PhpSdk\Iterator\WcProductIterator
{
    /**
     * @var int The featured image attachment ID
     */
    private $attachmentId;
    /**
     * @var bool Used to check if the attachment ID has already been returned
     */
    private $called = false;
    /**
     * @var \WC_Product
     */
    private $product;
    public function __construct(\WC_Product $product)
    {
    }
    #[\ReturnTypeWillChange]
    public function current()
    {
    }
    public function next(): void
    {
    }
    #[\ReturnTypeWillChange]
    public function key()
    {
    }
    public function valid(): bool
    {
    }
    public function rewind(): void
    {
    }
    /**
     * {@inheritDoc}
     */
    public function switchProduct(\WC_Product $product): void
    {
    }
}
/**
 * Returns the IDs of all product gallery images
 */
class GalleryImageIterator implements \Inpsyde\Zettle\PhpSdk\Iterator\WcProductIterator
{
    /**
     * @var \WC_Product
     */
    private $product;
    /**
     * @var int[]
     */
    private $galleryIds;
    public function __construct(\WC_Product $product)
    {
    }
    #[\ReturnTypeWillChange]
    public function current()
    {
    }
    public function next(): void
    {
    }
    #[\ReturnTypeWillChange]
    public function key()
    {
    }
    public function valid(): bool
    {
    }
    public function rewind(): void
    {
    }
    /**
     * {@inheritDoc}
     */
    public function switchProduct(\WC_Product $product): void
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\Iterator;

/**
 * Iterates over a collection of WcProductIterator instances as if they were
 * one large Iterator
 */
class WcProductIteratorAggregate implements \Inpsyde\Zettle\PhpSdk\Iterator\WcProductIterator
{
    /**
     * @var WcProductIterator[]
     */
    private $iterators;
    /**
     * @var \WC_Product
     */
    private $currentProduct;
    /**
     * @var WcProductIterator
     */
    private $currentIterator;
    /**
     * @var int The key of the current value
     */
    protected $key = 0;
    public function __construct(\Inpsyde\Zettle\PhpSdk\Iterator\WcProductIterator ...$iterators)
    {
    }
    #[\ReturnTypeWillChange]
    public function current()
    {
    }
    public function next(): void
    {
    }
    /**
     * Move on to the next iterator and check if it is has data.
     * If not, recurse until an iterator with data is found.
     */
    private function advanceIterator()
    {
    }
    #[\ReturnTypeWillChange]
    public function key()
    {
    }
    public function valid(): bool
    {
    }
    public function rewind(): void
    {
    }
    /**
     * {@inheritDoc}
     */
    public function switchProduct(\WC_Product $product): void
    {
    }
}
/**
 * Iterates over all image IDs of a WC_Product
 * First, it returns the featured image
 * Then it returns the featured image of  all children (->variations)
 * Then it returns all gallery image IDs.
 * You can limit the number of IDs with the $limit parameter.
 *
 * This class is basically just a sugar on top of WcProductIteratorAggregate
 */
class WcProductAttachmentIterator extends \Inpsyde\Zettle\PhpSdk\Iterator\WcProductIteratorAggregate
{
    /**
     * @var int
     */
    private $limit;
    public function __construct(\WC_Product $product, int $limit = 0, \Inpsyde\Zettle\PhpSdk\Iterator\WcProductIterator ...$iterators)
    {
    }
    public function valid(): bool
    {
    }
    public function current(): int
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\Map;

interface LocalIdProvider
{
    /**
     * @param string $remoteId
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\IdNotFoundException
     * @return int
     */
    public function localId(string $remoteId): int;
}
interface RemoteIdProvider
{
    /**
     * @param int $localId
     *
     * @return string
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\IdNotFoundException
     */
    public function remoteId(int $localId): string;
}
/**
 * Interface MapInterface
 * Maps a numeric local ID to an arbitrary string representing a remote ID
 */
interface OneToOneMapInterface extends \Inpsyde\Zettle\PhpSdk\Map\LocalIdProvider, \Inpsyde\Zettle\PhpSdk\Map\RemoteIdProvider
{
}
interface MultipleRemoteIdProvider
{
    /**
     * @param int $localId
     *
     * @return string[]
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\IdNotFoundException
     */
    public function remoteIds(int $localId): array;
}
interface OneToManyMapInterface extends \Inpsyde\Zettle\PhpSdk\Map\LocalIdProvider, \Inpsyde\Zettle\PhpSdk\Map\MultipleRemoteIdProvider
{
}
interface MapRecordCreator
{
    /**
     * @param int $localId
     * @param string $remoteId
     * @param array $arguments
     *
     * @return bool
     */
    public function createRecord(int $localId, string $remoteId, array $arguments = []): bool;
    /**
     * @param int $localId
     * @param string $remoteId
     *
     * @return bool
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\IdNotFoundException
     */
    public function deleteRecord(int $localId, string $remoteId): bool;
}
/**
 * Class CachedIdMap
 * Decorates another ID Map and caches its results
 *
 * @package Inpsyde\Zettle\PhpSdk\Map
 */
class CachedIdMap implements \Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface, \Inpsyde\Zettle\PhpSdk\Map\OneToManyMapInterface, \Inpsyde\Zettle\PhpSdk\Map\MapRecordCreator
{
    private $localIdCache = [];
    private $remoteIdCache = [];
    /**
     * @var OneToOneMapInterface
     */
    private $base;
    public function __construct(\Inpsyde\Zettle\PhpSdk\Map\LocalIdProvider $base)
    {
    }
    /**
     * @inheritDoc
     */
    public function remoteId(int $localId): string
    {
    }
    /**
     * @param string $className
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\IdNotFoundException
     */
    private function assertBaseInstance(string $className)
    {
    }
    /**
     * @inheritDoc
     */
    public function localId(string $remoteId): int
    {
    }
    public function createRecord(int $localId, string $remoteId, array $arguments = []): bool
    {
    }
    public function deleteRecord(int $localId, string $remoteId): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function remoteIds(int $localId): array
    {
    }
}
interface RecordMetaProvider
{
    public function metaData(int $localId, string $remoteId): array;
}
/**
 * Class InMemoryMap
 *
 * @package Inpsyde\Zettle\PhpSdk\Map
 */
class InMemoryMap implements \Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface, \Inpsyde\Zettle\PhpSdk\Map\OneToManyMapInterface, \Inpsyde\Zettle\PhpSdk\Map\MapRecordCreator, \Inpsyde\Zettle\PhpSdk\Map\RecordMetaProvider
{
    /**
     * @var array
     */
    private $map;
    /**
     * @var array
     */
    private $meta = [];
    /**
     * InMemoryMap constructor.
     *
     * @param array $map
     */
    public function __construct(array $map = [])
    {
    }
    /**
     * @inheritDoc
     */
    public function remoteId(int $localId): string
    {
    }
    /**
     * @inheritDoc
     */
    public function localId(string $remoteId): int
    {
    }
    /**
     * @inheritDoc
     */
    public function createRecord(int $localId, string $remoteId, array $arguments = []): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function deleteRecord(int $localId, string $remoteId): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function remoteIds(int $localId): array
    {
    }
    /**
     * @inheritDoc
     */
    public function metaData(int $localId, string $remoteId): array
    {
    }
    /**
     * @param int $localId
     * @param string $remoteId
     *
     * @return string
     */
    private function metaKey(int $localId, string $remoteId): string
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\Map\RecordEntity;

class Variant
{
    public const TYPE = 'variant';
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $uuid;
    /**
     * @var int
     */
    private $localId;
    /**
     * @var string
     */
    private $type;
    /**
     * @var int
     */
    private $siteId;
    /**
     * @var array
     */
    private $meta;
    /**
     * Variant constructor.
     *
     * @param int $id
     * @param string $uuid
     * @param int $localId
     * @param string $type
     * @param int $siteId
     * @param array $meta
     */
    public function __construct(int $id, string $uuid, int $localId, int $siteId, string $type = self::TYPE, array $meta = [])
    {
    }
    /**
     * @return int
     */
    public function id(): int
    {
    }
    /**
     * @return string
     */
    public function uuid(): string
    {
    }
    /**
     * @return int
     */
    public function localId(): int
    {
    }
    /**
     * @return int
     */
    public function siteId(): int
    {
    }
    /**
     * @return string
     */
    public function type(): string
    {
    }
    /**
     * @return array
     */
    public function meta(): array
    {
    }
    /**
     * @param array $data
     *
     * @return static
     */
    public static function fromArray(array $data): self
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\Map;

/**
 * phpcs:disable WordPress.DB.PreparedSQL.NotPrepared
 * phpcs:disable WordPress.DB.PreparedSQL.InterpolatedNotPrepared
 */
class WpdbMap implements \Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface, \Inpsyde\Zettle\PhpSdk\Map\OneToManyMapInterface, \Inpsyde\Zettle\PhpSdk\Map\MapRecordCreator, \Countable, \Inpsyde\Zettle\PhpSdk\Map\RecordMetaProvider
{
    /**
     * @var \wpdb
     */
    private $wpdb;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DB\Table
     */
    private $table;
    /**
     * @var string
     */
    private $type;
    /**
     * @var int
     */
    private $siteId;
    /**
     * WpdbMap constructor.
     *
     * @param \wpdb $wpdb
     * @param \Inpsyde\Zettle\PhpSdk\DB\Table $table
     * @param string $type
     * @param int $siteId
     */
    public function __construct(\wpdb $wpdb, \Inpsyde\Zettle\PhpSdk\DB\Table $table, string $type, int $siteId)
    {
    }
    /**
     * @param int $localId
     *
     * @return string
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\IdNotFoundException
     */
    public function remoteId(int $localId): string
    {
    }
    /**
     * @inheritDoc
     */
    public function remoteIds(int $localId): array
    {
    }
    /**
     * @param string $remoteId
     *
     * @return int
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\IdNotFoundException
     */
    public function localId(string $remoteId): int
    {
    }
    /**
     * @return string
     */
    public function tableName(): string
    {
    }
    /**
     * @inheritDoc
     */
    public function createRecord(int $localId, string $remoteId, array $arguments = []): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function deleteRecord(int $localId, string $remoteId): bool
    {
    }
    /**
     * @param int $localId
     * @param string $remoteId
     *
     * @return array
     */
    public function metaData(int $localId, string $remoteId): array
    {
    }
    public function count(): int
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk;

/**
 * Class NamespacedContainer
 * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
 * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
 *
 * @package Inpsyde\Zettle\PhpSdk
 */
class NamespacedContainer implements \Psr\Container\ContainerInterface
{
    /**
     * @var string
     */
    private $namespace;
    /**
     * @var \Psr\Container\ContainerInterface
     */
    private $base;
    public function __construct(string $namespace, \Psr\Container\ContainerInterface $base)
    {
    }
    /**
     * @inheritDoc
     */
    public function get($id)
    {
    }
    /**
     * @inheritDoc
     */
    public function has($id)
    {
    }
}
class PhpSdkModule implements \Dhii\Modular\Module\ModuleInterface, \Inpsyde\Zettle\BootableProviderModuleInterface
{
    use \Inpsyde\Zettle\BootableProviderAwareTrait;
    /**
     * @inheritDoc
     */
    public function setup(): \Interop\Container\ServiceProviderInterface
    {
    }
    /**
     * @inheritDoc
     */
    public function run(\Psr\Container\ContainerInterface $container): void
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\Provider;

class BootstrapProvider implements \Inpsyde\Zettle\Provider
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Bootstrap
     */
    private $boostrap;
    /**
     * BootstrapProvider constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\Bootstrap $boostrap
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\Bootstrap $boostrap)
    {
    }
    /**
     * @inheritDoc
     */
    public function boot(\Psr\Container\ContainerInterface $container): bool
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk;

interface RestClientInterface
{
    /**
     * @param string $url
     * @param array $payload
     * @param callable|null $modifyRequest
     *
     * @return array
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    public function get(string $url, array $payload, ?callable $modifyRequest = null): array;
    /**
     * @param string $url
     * @param array $payload
     * @param callable|null $modifyRequest
     *
     * @return array
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    public function post(string $url, array $payload, ?callable $modifyRequest = null): array;
    /**
     * @param string $url
     * @param array $payload
     * @param callable|null $modifyRequest
     *
     * @return array
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    public function put(string $url, array $payload, ?callable $modifyRequest = null): array;
    /**
     * @param string $url
     * @param array $payload
     * @param callable|null $modifyRequest
     *
     * @return array
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    public function delete(string $url, array $payload, ?callable $modifyRequest = null): array;
}
class Psr18RestClient implements \Inpsyde\Zettle\PhpSdk\RestClientInterface
{
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;
    /**
     * @var \Psr\Http\Client\ClientInterface
     */
    private $client;
    /**
     * @var \Psr\Http\Message\UriFactoryInterface
     */
    private $uriFactory;
    /**
     * @var \Psr\Http\Message\RequestFactoryInterface
     */
    private $requestFactory;
    /**
     * @var \Psr\Http\Message\StreamFactoryInterface
     */
    private $streamFactory;
    /**
     * @var callable[]
     */
    private $listeners;
    /**
     * Psr18RestClient constructor.
     *
     * @param \Psr\Log\LoggerInterface $logger
     * @param \Psr\Http\Client\ClientInterface $client
     * @param \Psr\Http\Message\UriFactoryInterface $uriFactory
     * @param \Psr\Http\Message\RequestFactoryInterface $requestFactory
     * @param \Psr\Http\Message\StreamFactoryInterface $streamFactory
     * @param callable[] $listeners
     */
    public function __construct(\Psr\Log\LoggerInterface $logger, \Psr\Http\Client\ClientInterface $client, \Psr\Http\Message\UriFactoryInterface $uriFactory, \Psr\Http\Message\RequestFactoryInterface $requestFactory, \Psr\Http\Message\StreamFactoryInterface $streamFactory, callable ...$listeners)
    {
    }
    /**
     * @inheritDoc
     */
    public function post(string $url, array $payload, ?callable $modifyRequest = null): array
    {
    }
    /**
     * @inheritDoc
     */
    public function get(string $url, array $payload, ?callable $modifyRequest = null): array
    {
    }
    /**
     * @inheritDoc
     */
    public function put(string $url, array $payload, ?callable $modifyRequest = null): array
    {
    }
    /**
     * @inheritDoc
     */
    public function delete(string $url, array $payload, ?callable $modifyRequest = null): array
    {
    }
    /**
     * @param string $method
     * @param string $url
     * @param array $payload
     * @param callable|null $modifyRequest
     *
     * @return array
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     *
     * phpcs:disable Inpsyde.CodeQuality.FunctionLength.TooLong
     */
    private function sendRequest(string $method, string $url, array $payload, ?callable $modifyRequest = null): array
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product;

interface ProductRepositoryInterface
{
    /**
     * @param int $id
     *
     * @return \WC_Product|null
     */
    public function findById(int $id): ?\WC_Product;
    /**
     * Return the parent product if it is a variation id, otherwise the same as findById.
     *
     * @param int $id
     *
     * @return \WC_Product|null
     */
    public function findByIdOrVariationId(int $id): ?\WC_Product;
    /**
     * @param \WC_Product_Variation $variation
     *
     * @return \WC_Product|null
     */
    public function findByVariation(\WC_Product_Variation $variation): ?\WC_Product;
    /**
     * @param int $variationId
     *
     * @return \WC_Product|null
     */
    public function findByVariationId(int $variationId): ?\WC_Product;
    /**
     * Fetch all Products from WooCommerce
     *
     * @param int $limit
     *
     * @return array
     */
    public function fetch(int $limit = -1): array;
    /**
     * Fetch specific type of Products
     *
     * @param array $types
     * @param string $status
     * @param int $limit
     *
     * @return int[]
     */
    public function fetchFromTypes(array $types, string $status = \Inpsyde\WcProductContracts\ProductState::PUBLISH, int $limit = -1): array;
}
class ArrayProductRepository implements \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface
{
    /**
     * @var array<int, \WC_Product>
     */
    private $repository;
    /**
     * ArrayProductRepository constructor.
     *
     * @param array $repository
     */
    public function __construct(array $repository = [])
    {
    }
    /**
     * @param int $id
     *
     * @return \WC_Product
     */
    public function findById(int $id): \WC_Product
    {
    }
    /**
     * @inheritDoc
     */
    public function findByIdOrVariationId(int $id): ?\WC_Product
    {
    }
    /**
     * @inheritDoc
     */
    public function findByVariation(\WC_Product_Variation $variation): ?\WC_Product
    {
    }
    /**
     * @inheritDoc
     */
    public function findByVariationId(int $variationId): ?\WC_Product
    {
    }
    /**
     * @inheritDoc
     */
    public function fetch(int $limit = -1): array
    {
    }
    /**
     * @inheritDoc
     */
    public function fetchFromTypes(array $types, string $status = \Inpsyde\WcProductContracts\ProductState::PUBLISH, int $limit = -1): array
    {
    }
}
class ProductRepository implements \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function findById(int $id): ?\WC_Product
    {
    }
    /**
     * @inheritDoc
     */
    public function findByIdOrVariationId(int $id): ?\WC_Product
    {
    }
    /**
     * @inheritDoc
     */
    public function findByVariation(\WC_Product_Variation $variation): ?\WC_Product
    {
    }
    /**
     * @inheritDoc
     */
    public function findByVariationId(int $variationId): ?\WC_Product
    {
    }
    /**
     * @inheritDoc
     */
    public function fetch(int $limit = -1): array
    {
    }
    /**
     * @inheritDoc
     */
    public function fetchFromTypes(array $types, string $status = \Inpsyde\WcProductContracts\ProductState::PUBLISH, int $limit = -1): array
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\Repository\Zettle\Product;

interface ProductRepositoryInterface
{
    /**
     * Get ProductId from Product Uuid
     *
     * @param string $uuid
     *
     * @return int|null
     */
    public function findByUuid(string $uuid): ?int;
    /**
     * Get Uuid from ProductId
     *
     * @param int $productId
     *
     * @return string|null
     */
    public function findById(int $productId): ?string;
}
class ProductRepository implements \Inpsyde\Zettle\PhpSdk\Repository\Zettle\Product\ProductRepositoryInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface|\Inpsyde\Zettle\PhpSdk\Map\OneToManyMapInterface|\Inpsyde\Zettle\PhpSdk\Map\MapRecordCreator
     */
    private $productMap;
    /**
     * ProductRepository constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\Map\OneToManyMapInterface $productMap
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\Map\OneToManyMapInterface $productMap)
    {
    }
    /**
     * @inheritDoc
     */
    public function findByUuid(string $uuid): ?int
    {
    }
    /**
     * @inheritDoc
     */
    public function findById(int $productId): ?string
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\Serializer;

interface SerializerInterface
{
    /**
     * @param $entity
     * @param SerializerInterface|null $serializer
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     *
     * @return array
     */
    public function serialize($entity, ?\Inpsyde\Zettle\PhpSdk\Serializer\SerializerInterface $serializer = null): array;
}
class CallbackSerializer implements \Inpsyde\Zettle\PhpSdk\Serializer\SerializerInterface
{
    /**
     * @var callable
     */
    private $callback;
    public function __construct(callable $callback)
    {
    }
    /**
     * @inheritDoc
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     */
    public function serialize($entity, ?\Inpsyde\Zettle\PhpSdk\Serializer\SerializerInterface $serializer = null): array
    {
    }
}
class ContainerAwareEntitySerializer implements \Inpsyde\Zettle\PhpSdk\Serializer\SerializerInterface
{
    /**
     * @var \Psr\Container\ContainerInterface
     */
    private $container;
    public function __construct(\Psr\Container\ContainerInterface $container)
    {
    }
    /**
     * @param $entity
     * @param SerializerInterface|null $serializer
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     *
     * @return array
     */
    public function serialize($entity, ?\Inpsyde\Zettle\PhpSdk\Serializer\SerializerInterface $serializer = null): array
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\Uuid;

/**
 * This class produces valid UUIDv1 strings based on a WC_Product.
 * The resulting strings are not explicitly random any more because the intention is that
 * Each individual WC_Product reliably produces the same UUID. They will look random to onlookers
 * and they're actually not too far off the spec in implementation.
 * -
 * The reason we need this is because Zettle expects us to produce UUIDv1 when syncing products,
 * but we've had a fair amount of trouble when the same product is being synced multiple times,
 * for example in two concurrent web requests. There are other mechanisms to alleviate this problem
 * but this custom UUIDv1 practically resolves the issue at the root.
 * -
 * The randomness of a UUIDv1 basically comes from two things:
 * - A timestamp: We use the date of creation and add the post ID to mimick sub-second precision
 * - A node ID: Should be the MAC address of the network adapter but CAN simply be random
 *   as well if no mac address is obtainable. Here we simply use home_url()
 */
class Uuid
{
    /**
     * @var string
     */
    private $uuid;
    public function __construct(string $uuid)
    {
    }
    public static function fromWcProduct(\WC_Product $product): self
    {
    }
    public function __toString(): string
    {
    }
    /**
     * @see http://tools.ietf.org/html/rfc4122#section-4.2.2
     *
     * @param int $identifier
     *
     * @return string
     */
    private static function generate(int $identifier): string
    {
    }
    private static function hexTimestamp(int $timestamp): string
    {
    }
    /**
     * @param string $digits
     *
     * @return string
     * phpcs:disable Inpsyde.CodeQuality.NestingLevel.High
     */
    private static function toBinary(string $digits): string
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk\Validator;

interface ValidatorInterface
{
    /**
     * @param $entity
     *
     * @return bool
     */
    public function accepts($entity): bool;
    /**
     * @param $entity
     *
     * @return bool
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ValidatorException
     */
    public function validate($entity): bool;
}
// phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
class CompoundValidator implements \Inpsyde\Zettle\PhpSdk\Validator\ValidatorInterface
{
    /**
     * @var ValidatorInterface[]
     */
    private $validators;
    /**
     * CompoundValidator constructor.
     *
     * @param ValidatorInterface ...$validatorInterfaces
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\Validator\ValidatorInterface ...$validatorInterfaces)
    {
    }
    /**
     * @inheritDoc
     */
    public function accepts($entity): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function validate($entity): bool
    {
    }
}
/**
 * Technically, Validators are supposed to inspect just the entity itself,
 * but since the ImageInterface is currently all about web-URLs, the transition
 * from a local WordPress image to a remote Zettle image is a bit of an edge-case.
 * Sure, we could download the image from our own WordPress installation to inspect it
 * before syncing, but that would be pretty insane. So we allow ourselves to grab the local image ID
 * and inspect the source image directly.
 */
class LocalImageValidator implements \Inpsyde\Zettle\PhpSdk\Validator\ValidatorInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Provider\Image\UrlProviderInterface
     */
    private $filePathProvider;
    /**
     * @var array<int, string>
     */
    protected $supportedImageTypes;
    /**
     * @var int
     */
    protected $minFileSize;
    /**
     * @var int
     */
    protected $maxFileSize;
    /**
     * @var int
     */
    protected $minWidth;
    /**
     * @var int
     */
    protected $minHeight;
    /**
     * @var int
     */
    protected $maxWidth;
    /**
     * @var int
     */
    protected $maxHeight;
    /**
     * @param array<int, string> $supportedImageTypes Key - type of exif_imagetype such as IMAGETYPE_JPEG,
     * value - human-readable name.
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\DAL\Provider\Image\UrlProviderInterface $filePathProvider, array $supportedImageTypes, int $minFileSize, int $maxFileSize, int $minWidth, int $minHeight, int $maxWidth, int $maxHeight)
    {
    }
    /**
     * {@inheritDoc}
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     */
    public function accepts($entity): bool
    {
    }
    /**
     * {@inheritDoc}
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     */
    public function validate($entity): bool
    {
    }
    /**
     * @param string $filePath
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\Validator\Image\UnsupportedImageFileSizeException
     */
    private function validateImageFileSize(string $filePath): void
    {
    }
    /**
     * @param string $filePath
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\Validator\Image\UnsupportedImageFileTypeException
     */
    private function validatedImageType(string $filePath): void
    {
    }
    /**
     * @param string $filePath
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\Validator\Image\InvalidImageSizeException
     */
    private function validateImageSize(string $filePath): void
    {
    }
}
/**
 * Class PresentationValidator
 *
 * Verifies that a Presentation's color values are 6-digit hex strings
 * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
 *
 * @package Inpsyde\Zettle\PhpSdk\Validator
 */
class PresentationValidator implements \Inpsyde\Zettle\PhpSdk\Validator\ValidatorInterface
{
    public const HEX_COLOR_LENGTH = 6;
    /**
     * @inheritDoc
     */
    public function accepts($entity): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function validate($entity): bool
    {
    }
    /**
     * @param string $string
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ValidatorException
     */
    private function assertValidLongHexValue(string $string)
    {
    }
}
// phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
class ProductValidator implements \Inpsyde\Zettle\PhpSdk\Validator\ValidatorInterface
{
    public const MINIMUM_VARIANTS_AMOUNT = 0;
    public const MAXIMUM_VARIANTS_AMOUNT = 99;
    /**
     * @inheritDoc
     */
    public function accepts($entity): bool
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface $product
     *
     * @return bool
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\Validator\MaximumVariantsException
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\Validator\MinimumVariantsException
     */
    public function validate($product): bool
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface $product
     *
     * @return bool
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\Validator\MinimumVariantsException
     *
     */
    public function validateMinimumVariants(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface $product): bool
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface $product
     *
     * @return bool
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\Validator\MaximumVariantsException
     *
     */
    public function validateMaximumVariants(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface $product): bool
    {
    }
}
/**
 * The REST API will complain in Variants contain VariantOption,
 * but the Product itself does not contain matching VariantOptionDefinitions
 *
 * It could be that this Validator would need to be expanded so that it
 * actually checks if both of them contain matching data, but we currently get by
 * with checking if the number of entries matches
 */
class ProductVariantOptionDefinitionsValidator implements \Inpsyde\Zettle\PhpSdk\Validator\ValidatorInterface
{
    /**
     * @inheritDoc
     */
    public function accepts($entity): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function validate($entity): bool
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface $product
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\Validator\VariantOptionDefinitions\VariantOptionAmountMismatchException
     */
    private function assertVariantOptionAmounts(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface $product): void
    {
    }
}
// phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
class StockValidator implements \Inpsyde\Zettle\PhpSdk\Validator\ValidatorInterface
{
    /**
     * @var int
     */
    protected $maxStock;
    /**
     * @param int $maxStock
     */
    public function __construct(int $maxStock)
    {
    }
    /**
     * @inheritDoc
     */
    public function accepts($entity): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function validate($entity): bool
    {
    }
}
// phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
class VariableProductVatValidator implements \Inpsyde\Zettle\PhpSdk\Validator\ValidatorInterface
{
    /**
     * @inheritDoc
     */
    public function accepts($entity): bool
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface $product
     *
     * @return bool
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\Validator\DifferentVariantVatException
     */
    public function validate($product): bool
    {
    }
    private function checkVat(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface $product): void
    {
    }
}
class VariantOptionDefinitionsValidator implements \Inpsyde\Zettle\PhpSdk\Validator\ValidatorInterface
{
    public const MAXIMUM_DEFINITIONS_AMOUNT = 3;
    /**
     * @inheritDoc
     */
    public function accepts($entity): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function validate($entity): bool
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionDefinitions $definitions
     *
     * @return string[]
     */
    private function validateVariantOptionDefinitions(\Inpsyde\Zettle\PhpSdk\DAL\Entity\VariantOption\VariantOptionDefinitions $definitions): array
    {
    }
}
// phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
class VariantOptionValidator implements \Inpsyde\Zettle\PhpSdk\Validator\ValidatorInterface
{
    public const MIN_NAME_LENGTH = 1;
    public const MAX_NAME_LENGTH = 30;
    /**
     * @inheritDoc
     */
    public function accepts($entity): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function validate($entity): bool
    {
    }
}
/**
 * Technically, Validators are supposed to inspect just the entity itself,
 * but since the ImageInterface is currently all about web-URLs, the transition
 * from a local WordPress image to a remote iZettle image is a bit of an edge-case.
 * Sure, we could download the image from our own WordPress installation to inspect it
 * before syncing, but that would be pretty insane. So we allow ourselves to use the stored data
 * from the WordPress Attachment Information directly.
 *
 * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
 */
class WordPressImageValidator implements \Inpsyde\Zettle\PhpSdk\Validator\ValidatorInterface
{
    /**
     * @var string[]
     */
    protected $supportedImageTypes;
    /**
     * @var int
     */
    protected $minFileSize;
    /**
     * @var int
     */
    protected $maxFileSize;
    /**
     * @var int
     */
    protected $minWidth;
    /**
     * @var int
     */
    protected $minHeight;
    /**
     * @var int
     */
    protected $maxWidth;
    /**
     * @var int
     */
    protected $maxHeight;
    /**
     * @param string[] $supportedImageTypes MIME subtypes like 'jpeg', 'png'
     */
    public function __construct(array $supportedImageTypes, int $minFileSize, int $maxFileSize, int $minWidth, int $minHeight, int $maxWidth, int $maxHeight)
    {
    }
    /**
     * @inheritDoc
     */
    public function accepts($entity): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function validate($entity): bool
    {
    }
    protected function validateImageFileSize(int $imageFileSize, string $fileName): void
    {
    }
    protected function validatedImageType(string $type, string $fileName): void
    {
    }
    protected function validateImageSize(int $width, int $height, string $fileName): void
    {
    }
}
namespace Inpsyde\Zettle\PhpSdk;

/**
 * // phpcs:disable Squiz.Classes.ValidClassName.NotCamelCaps
 */
class ZettlePhpSdkLibrary
{
    /**
     * @var \Dhii\Container\DelegatingContainer
     */
    private $container;
    /**
     * @var \Dhii\Container\CompositeCachingServiceProvider
     */
    private $provider;
    /**
     * @var PhpSdkModule
     */
    private $module;
    public function __construct(array $factories = [], array $extensions = [])
    {
    }
    /**
     * @throws \Dhii\Modular\Module\Exception\ModuleExceptionInterface
     */
    public function initialize()
    {
    }
    public function container(): \Psr\Container\ContainerInterface
    {
    }
}
namespace Inpsyde\Zettle\ProductDebug\Cli;

class ProductsCommand
{
    /**
     * @var string[]
     */
    private $productTypeWhitelist;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface
     */
    private $productMap;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface
     */
    private $builder;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\API\Products\Products
     */
    private $productsClient;
    /**
     * @var \Inpsyde\Zettle\Sync\Validator\ProductValidator
     */
    private $productValidator;
    /**
     * @var \Inpsyde\Zettle\Sync\Status\StatusCodeMatcher
     */
    private $statusCodeMatcher;
    public function __construct(array $productTypeWhitelist, \Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface $productMap, \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder, \Inpsyde\Zettle\PhpSdk\API\Products\Products $productsClient, \Inpsyde\Zettle\Sync\Validator\ProductValidator $productValidator, \Inpsyde\Zettle\Sync\Status\StatusCodeMatcher $statusCodeMatcher)
    {
    }
    /**
     * Diff the synced products with the not synced ones
     *
     * ## OPTIONS
     *
     * ## EXAMPLES
     *
     *     wp zettle products validate
     *
     * @when after_wp_load
     */
    public function validate(array $args, array $assocArgs): void
    {
    }
    /**
     * @param int[] $productIds
     *
     * @return array
     *
     * phpcs:disable Inpsyde.CodeQuality.NestingLevel.High
     */
    protected function processProducts(array $productIds): array
    {
    }
    /**
     * @param array<string, string> $problems
     * @param \Throwable[] $syncExceptions
     *
     * @return string
     */
    protected function renderProblems(array $problems, array $syncExceptions): string
    {
    }
    /**
     * @param \WC_Product $wcProduct
     *
     * @return \Throwable[]
     */
    protected function trySync(\WC_Product $wcProduct): array
    {
    }
    /**
     * @param array $exceptions
     * @param int $limit
     *
     * @return array
     *
     * phpcs:disable Inpsyde.CodeQuality.NestingLevel.High
     */
    private function processExceptions(array $exceptions, int $limit = 10): array
    {
    }
    /**
     * @param int $productId
     *
     * @return bool
     */
    private function productExists(int $productId): bool
    {
    }
}
namespace Inpsyde\Zettle\ProductDebug\Listing;

class CustomColumn
{
    /**
     * @var string
     */
    private $key;
    /**
     * @var string
     */
    private $name;
    public function __construct(string $key, string $name)
    {
    }
    /**
     * Add Custom Column - if it's not existing
     *
     * @param $columns
     *
     * @return mixed
     *
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
     */
    public function add($columns)
    {
    }
    /**
     * @param string $name
     * @param int $productId
     *
     * @return string
     */
    public function renderContent(string $name, int $productId): string
    {
    }
    /**
     * Wrapper Function to return loading spinner
     *
     * @return string
     */
    private function renderLoader(): string
    {
    }
}
namespace Inpsyde\Zettle\ProductDebug;

class ProductDebugModule implements \Dhii\Modular\Module\ModuleInterface
{
    /**
     * @inheritDoc
     */
    public function setup(): \Interop\Container\ServiceProviderInterface
    {
    }
    /**
     * @inheritDoc
     *
     * phpcs:disable Inpsyde.CodeQuality.FunctionLength.TooLong
     */
    public function run(\Psr\Container\ContainerInterface $container): void
    {
    }
}
namespace Inpsyde\Zettle\ProductDebug\Rest\V1;

interface EndpointInterface
{
    /**
     * @return string
     */
    public function methods(): string;
    /**
     * @return string
     */
    public function version(): string;
    /**
     * @return string
     */
    public function route(): string;
    /**
     * @return bool
     */
    public function permissionCallback(): bool;
    /**
     * @return array
     */
    public function args(): array;
    /**
     * Handle Endpoint Request
     *
     * @param \WP_REST_Request $request
     *
     * @return \WP_REST_Response
     */
    public function handleRequest(\WP_REST_Request $request): \WP_REST_Response;
}
/**
 * This Endpoint validates a product from passed productId and strategy
 * with the given product validator, returns a json response if the product
 * is valid and if not an array of status codes from the validation methods.
 *
 * @see ProductValidator::validate() = Strategy default
 *      This validation method doesn't return the sync status, only the conflicts
 *
 * @see ProductValidator::validateWithLocalDBCheck() = Strategy local-db-check:
 *      returns the sync status by checking this locally, and the conflicts
 */
class ProductValidationEndpoint implements \Inpsyde\Zettle\ProductDebug\Rest\V1\EndpointInterface
{
    public const METHODS = \WP_REST_Server::READABLE;
    public const VERSION = 'v1';
    public const ROUTE = '/validate';
    public const STRATEGY_DEFAULT = 'default';
    public const STRATEGY_LOCAL_DB_CHECK = 'local-db-check';
    private $productValidator;
    public function __construct(\Inpsyde\Zettle\Sync\Validator\ProductValidator $productValidator)
    {
    }
    /**
     * @inheritDoc
     */
    public function methods(): string
    {
    }
    /**
     * @inheritDoc
     */
    public function version(): string
    {
    }
    /**
     * @inheritDoc
     */
    public function route(): string
    {
    }
    /**
     * @inheritDoc
     */
    public function permissionCallback(): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function args(): array
    {
    }
    /**
     * @inheritDoc
     */
    public function handleRequest(\WP_REST_Request $request): \WP_REST_Response
    {
    }
}
namespace Inpsyde\Zettle\ProductSettings\Barcode;

class BarcodeInputField
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var \Inpsyde\Zettle\ProductSettings\Barcode\Repository\BarcodeRetrieverInterface
     */
    private $barcodeRetriever;
    /**
     * @var string
     */
    private $label;
    /**
     * @var string
     */
    private $containerClasses;
    /**
     * @param string $containerClasses Additional CSS classes for the container of input field.
     */
    public function __construct(string $name, \Inpsyde\Zettle\ProductSettings\Barcode\Repository\BarcodeRetrieverInterface $barcodeRetriever, string $label, string $containerClasses = '')
    {
    }
    // phpcs:ignore Inpsyde.CodeQuality.FunctionLength.TooLong
    public function render(\WC_Product $product, ?int $index = null): string
    {
    }
    /**
     * @return string
     */
    public function name(): string
    {
    }
}
namespace Inpsyde\Zettle\ProductSettings\Barcode\Repository;

/**
 * The interface for saving barcodes.
 */
interface BarcodeSaverInterface
{
    /**
     * Saves barcode.
     * @param \WC_Product $owner The product (or variation) to which this barcode belongs to.
     * @param string $barcode
     * @return void
     */
    public function save(\WC_Product $owner, string $barcode): void;
}
/**
 * The interface for retrieving barcodes.
 */
interface BarcodeRetrieverInterface
{
    /**
     * Returns the barcode belonging to the product/variation or null.
     * @param \WC_Product $owner
     * @return string|null
     */
    public function get(\WC_Product $owner): ?string;
}
/**
 * Saves/retrieves barcode via WC meta data.
 */
class BarcodeRepository implements \Inpsyde\Zettle\ProductSettings\Barcode\Repository\BarcodeSaverInterface, \Inpsyde\Zettle\ProductSettings\Barcode\Repository\BarcodeRetrieverInterface
{
    /**
     * @var string
     */
    private $key;
    /**
     * @var string
     */
    private $filterName;
    /**
     * @param string $key Meta data key where barcode is stored.
     * @param string $filterName The name of WP filter that can be used
     * to get the barcode value instead of meta.
     * Accepts WC_Product, returns string.
     */
    public function __construct(string $key, string $filterName)
    {
    }
    public function save(\WC_Product $owner, string $barcode): void
    {
    }
    public function get(\WC_Product $owner): ?string
    {
    }
}
namespace Inpsyde\Zettle\ProductSettings\Barcode;

class VariantBarcodeSaveHandler
{
    /**
     * @var \Inpsyde\Zettle\ProductSettings\Barcode\Repository\BarcodeSaverInterface
     */
    private $barcodeSaver;
    /**
     * @var BarcodeInputField
     */
    private $barcodeField;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface
     */
    private $wcProductRepository;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;
    public function __construct(\Inpsyde\Zettle\ProductSettings\Barcode\Repository\BarcodeSaverInterface $barcodeSaver, \Inpsyde\Zettle\ProductSettings\Barcode\BarcodeInputField $barcodeField, \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $wcProductRepository, \Psr\Log\LoggerInterface $logger)
    {
    }
    public function save(int $variationId, int $variantIndex)
    {
    }
    private function getBarcode(int $variantIndex): ?string
    {
    }
    private function sanitizeText(string $text): string
    {
    }
}
namespace Inpsyde\Zettle\ProductSettings\Components;

class ProductSettingsTab
{
    public const SECTION_KEY = 'zettle-integration';
    public const SYNC_EXCLUSION_ID = '_zettle_exclude_from_sync';
    public const NONCE_KEY = 'zettle_integration_settings_nonce';
    public const NONCE_FIELD = 'zettle_integration_settings';
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;
    /**
     * @var TermManager
     */
    private $termManager;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface
     */
    private $wcProductRepository;
    /**
     * @var \Inpsyde\Zettle\ProductSettings\Barcode\BarcodeInputField
     */
    private $barcodeField;
    /**
     * @var \Inpsyde\Zettle\ProductSettings\Barcode\Repository\BarcodeSaverInterface
     */
    private $barcodeSaver;
    public function __construct(\Psr\Log\LoggerInterface $logger, \Inpsyde\Zettle\ProductSettings\Components\TermManager $termManager, \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $wcProductRepository, \Inpsyde\Zettle\ProductSettings\Barcode\BarcodeInputField $barcodeField, \Inpsyde\Zettle\ProductSettings\Barcode\Repository\BarcodeSaverInterface $barcodeSaver)
    {
    }
    /**
     * @return string
     */
    public function sectionKey(): string
    {
    }
    /**
     * @return string
     */
    public function syncExclusionId(): string
    {
    }
    public function barcodeId(): string
    {
    }
    /**
     * @return string
     */
    public function nonceKey(): string
    {
    }
    /**
     * @return string
     */
    public function nonceField(): string
    {
    }
    /**
     * @param $tabs
     *
     * @return mixed
     *
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
     */
    public function addTab($tabs)
    {
    }
    /**
     * Add Custom Icon instead of the Default one at the Product Settings Tab
     *
     * @return void
     */
    public function addCustomTabIcon(): void
    {
    }
    /**
     * Add Settings into the Settings Panel
     *
     * @return void
     *
     * phpcs:disable Inpsyde.CodeQuality.FunctionLength.TooLong
     */
    public function renderSettings(bool $addBarcodeInput): void
    {
    }
    public function saveFields($postId): void
    {
    }
    /**
     * @param bool $state
     *
     * @return string
     */
    private function getValue(bool $state): string
    {
    }
    /**
     * phpcs:disable WordPressVIPMinimum.Security.PHPFilterFunctions.MissingThirdParameter
     */
    private function parseRequest(): array
    {
    }
    private function sanitizeText(string $text): string
    {
    }
    private function validateRequest(array $data): void
    {
    }
}
class TermManager
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $slug;
    /**
     * @var string
     */
    private $taxonomy;
    /**
     * ExcludeFromSync constructor.
     *
     * @param string $name
     * @param string $slug
     * @param string $taxonomy
     */
    public function __construct(string $name, string $slug, string $taxonomy)
    {
    }
    /**
     * @return string
     */
    public function name(): string
    {
    }
    /**
     * @return string
     */
    public function slug(): string
    {
    }
    /**
     * @return string
     */
    public function taxonomy(): string
    {
    }
    /**
     * @return int
     */
    public function id(): int
    {
    }
    /**
     * Appends the specified taxonomy term to the incoming post object. If
     * the term doesn't already exist in the database, it will be created.
     *
     * @param int $postId The post to which we're adding the taxonomy term.
     * @param array|null $args
     *
     * @return void
     */
    public function setTerm(int $postId, ?array $args = []): void
    {
    }
    /**
     * @param int $postId
     */
    public function removeTerm(int $postId)
    {
    }
    /**
     * @param int $postId
     *
     * @return bool
     */
    public function hasTerm(int $postId): bool
    {
    }
    /**
     * @param array|null $args
     *
     * @return int|int[]|mixed|\WP_Error
     */
    private function ensureTerm(?array $args = [])
    {
    }
    /**
     * @param array|null $args
     *
     * @psalm-suppress InvalidReturnType
     * @return int[]|\WP_Error
     */
    private function createTerm(?array $args = [])
    {
    }
}
namespace Inpsyde\Zettle\ProductSettings\Handler;

class ProductExcludeHandler
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface
     */
    private $repository;
    /**
     * @var \Inpsyde\Zettle\ProductSettings\Components\TermManager
     */
    private $termManager;
    /**
     * @var callable
     */
    private $createJob;
    /**
     * @var \Inpsyde\Queue\Queue\Job\JobRepository
     */
    private $jobRepository;
    /**
     * ProductExcludeHandler constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository
     * @param \Inpsyde\Zettle\ProductSettings\Components\TermManager $termManager
     * @param \Inpsyde\Queue\Queue\Job\JobRepository $jobRepository
     * @param callable $createJob
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository, \Inpsyde\Zettle\ProductSettings\Components\TermManager $termManager, \Inpsyde\Queue\Queue\Job\JobRepository $jobRepository, callable $createJob)
    {
    }
    /**
     * Check if a Product is valid and doesn't have the zettle_exclude term related
     *
     * @param int $objectId
     * @param string $taxonomy
     * @param int ...$termIds
     *
     * @return bool
     */
    public function isIncludable(int $objectId, string $taxonomy, int ...$termIds): bool
    {
    }
    /**
     * Check if the Product is valid and has the zettle_excluded term related
     *
     * @param int $objectId
     * @param string $taxonomy
     * @param int ...$termIds
     *
     * @return bool
     */
    public function isExcludable(int $objectId, string $taxonomy, int ...$termIds): bool
    {
    }
    /**
     * @param int $objectId
     *
     * @return bool
     */
    public function acceptsProduct(int $objectId): bool
    {
    }
    /**
     * Handle a Product that will be excluded - term was added
     *
     * @param int $productId
     */
    public function excludeProduct(int $productId): void
    {
    }
    /**
     * Handle a Product that will be included - term was removed
     *
     * @param int $productId
     */
    public function includeProduct(int $productId): void
    {
    }
    /**
     * @param string $taxonomy
     * @param int ...$termIds
     *
     * @return bool
     */
    protected function hasTerm(string $taxonomy, int ...$termIds): bool
    {
    }
}
namespace Inpsyde\Zettle\ProductSettings\Metabox;

class ReadonlyMetaboxAction implements \MetaboxOrchestra\BoxAction
{
    /**
     * @inheritDoc
     */
    public function save(\MetaboxOrchestra\AdminNotices $notices): bool
    {
    }
}
// phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
// phpcs:disable Inpsyde.CodeQuality.VariablesName.SnakeCaseVar
class ZettleProductLibraryLink implements \MetaboxOrchestra\PostMetabox
{
    public const ID = 'zettle-product-library-link';
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Repository\Zettle\Product\ProductRepositoryInterface
     */
    private $repository;
    /**
     * @var \MetaboxOrchestra\BoxView
     */
    private $view;
    /**
     * @var \MetaboxOrchestra\BoxAction
     */
    private $action;
    /**
     * @var string
     */
    private $title;
    public function __construct(\Inpsyde\Zettle\PhpSdk\Repository\Zettle\Product\ProductRepositoryInterface $repository, \Inpsyde\Zettle\ProductSettings\Metabox\ZettleProductLibraryLinkView $view, \MetaboxOrchestra\BoxAction $action, string $title)
    {
    }
    /**
     * @inheritDoc
     */
    public function create_info(string $show_or_save, \MetaboxOrchestra\Entity $entity): \MetaboxOrchestra\BoxInfo
    {
    }
    /**
     * @inheritDoc
     */
    public function accept_post(\WP_Post $post, string $save_or_show): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function view_for_post(\WP_Post $post): \MetaboxOrchestra\BoxView
    {
    }
    /**
     * @inheritDoc
     */
    public function action_for_post(\WP_Post $post): \MetaboxOrchestra\BoxAction
    {
    }
}
class ZettleProductLibraryLinkView implements \MetaboxOrchestra\BoxView
{
    /**
     * @var string
     */
    private $baseLink;
    public function __construct(string $baseLink)
    {
    }
    /**
     * @inheritDoc
     */
    public function render(\MetaboxOrchestra\BoxInfo $info): string
    {
    }
    /**
     * @param string $productUuid
     * @return string
     */
    private function productLink(string $productUuid): string
    {
    }
}
namespace Inpsyde\Zettle\ProductSettings;

class ProductSettingsModule implements \Dhii\Modular\Module\ModuleInterface, \Inpsyde\Zettle\BootableProviderModuleInterface
{
    use \Inpsyde\Zettle\BootableProviderAwareTrait;
    /**
     * @inheritDoc
     */
    public function setup(): \Interop\Container\ServiceProviderInterface
    {
    }
    /**
     * @inheritDoc
     */
    public function run(\Psr\Container\ContainerInterface $container): void
    {
    }
    private function addVariationBarcodeHandlers(\Inpsyde\Zettle\ProductSettings\Barcode\BarcodeInputField $barcodeField, \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $wcProductRepository, \Inpsyde\Zettle\ProductSettings\Barcode\VariantBarcodeSaveHandler $saveHandler)
    {
    }
}
namespace Inpsyde\Zettle\ProductSettings\Provider;

class CustomProductTabProvider implements \Inpsyde\Zettle\Provider
{
    /**
     * @var \Inpsyde\Zettle\ProductSettings\Components\ProductSettingsTab
     */
    private $settingsTab;
    /**
     * CustomProductTabProvider constructor.
     *
     * @param \Inpsyde\Zettle\ProductSettings\Components\ProductSettingsTab $settingsTab
     */
    public function __construct(\Inpsyde\Zettle\ProductSettings\Components\ProductSettingsTab $settingsTab)
    {
    }
    /**
     * @inheritDoc
     */
    public function boot(\Psr\Container\ContainerInterface $container): bool
    {
    }
}
class ProductExcludeProvider implements \Inpsyde\Zettle\Provider
{
    /**
     * @var \Inpsyde\Zettle\ProductSettings\Handler\ProductExcludeHandler
     */
    private $productExcludeHandler;
    /**
     * ProductExcludeProvider constructor.
     *
     * @param \Inpsyde\Zettle\ProductSettings\Handler\ProductExcludeHandler $productExcludeHandler
     */
    public function __construct(\Inpsyde\Zettle\ProductSettings\Handler\ProductExcludeHandler $productExcludeHandler)
    {
    }
    /**
     * @inheritDoc
     */
    public function boot(\Psr\Container\ContainerInterface $container): bool
    {
    }
}
class SyncVisibilityTaxonomyProvider implements \Inpsyde\Zettle\Provider
{
    /**
     * @var \Inpsyde\Zettle\ProductSettings\Taxonomy\ZettleSyncVisibilityTaxonomy
     */
    private $syncVisibilityTaxonomy;
    public function __construct(\Inpsyde\Zettle\ProductSettings\Taxonomy\ZettleSyncVisibilityTaxonomy $syncVisibilityTaxonomy)
    {
    }
    /**
     * @inheritDoc
     */
    public function boot(\Psr\Container\ContainerInterface $container): bool
    {
    }
}
namespace Inpsyde\Zettle\ProductSettings\Taxonomy;

class ZettleSyncVisibilityTaxonomy
{
    /**
     * @var string
     */
    private $key;
    /**
     * @var string
     */
    private $attachedPostType;
    public function __construct(string $key, string $attachedPostType)
    {
    }
    /**
     * @return string
     */
    public function key(): string
    {
    }
    /**
     * @return string
     */
    public function attachedPostType(): string
    {
    }
    public function create()
    {
    }
}
namespace Inpsyde\Zettle\Queue;

class ZettleQueueModule implements \Dhii\Modular\Module\ModuleInterface
{
    /**
     * @inheritDoc
     */
    public function setup(): \Interop\Container\ServiceProviderInterface
    {
    }
    /**
     * @inheritDoc
     */
    public function run(\Psr\Container\ContainerInterface $container): void
    {
    }
}
namespace Inpsyde\Zettle\Settings\Exception;

class SettingNotFoundException extends \Exception implements \Psr\Container\NotFoundExceptionInterface
{
}
namespace Inpsyde\Zettle\Settings\Provider;

class SettingsPageProvider implements \Inpsyde\Zettle\Provider
{
    /**
     * @var callable
     */
    private $pageFactory;
    /**
     * SettingsPageProvider constructor.
     *
     * @param callable $pageFactory
     */
    public function __construct(callable $pageFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function boot(\Psr\Container\ContainerInterface $container): bool
    {
    }
}
namespace Inpsyde\Zettle\Settings;

class SettingsModule implements \Dhii\Modular\Module\ModuleInterface, \Inpsyde\Zettle\BootableProviderModuleInterface
{
    use \Inpsyde\Zettle\BootableProviderAwareTrait;
    /**
     * @inheritDoc
     */
    public function setup(): \Interop\Container\ServiceProviderInterface
    {
    }
    /**
     * @inheritDoc
     */
    public function run(\Psr\Container\ContainerInterface $container): void
    {
    }
}
namespace Inpsyde\Zettle\Settings\WC;

/**
 * Page displayed in a tab in WooCommerce --> Settings.
 *
 * Delegates rendering and saving to WC_Settings_API (ZettleIntegration).
 */
class SettingsPage extends \WC_Settings_Page
{
    /**
     * @var \WC_Settings_API
     */
    private $settingsApi;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;
    /**
     * @var bool
     */
    private $isDebugMode;
    /**
     * @param \WC_Settings_API $settingsApi
     * @param string $id
     * @param string $label
     * @param \Psr\Log\LoggerInterface $logger
     * @param bool $isDebugMode
     */
    public function __construct(\WC_Settings_API $settingsApi, string $id, string $label, \Psr\Log\LoggerInterface $logger, bool $isDebugMode)
    {
    }
    /**
     * {@inheritDoc}
     *
     * @return array
     *
     * phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
     * phpcs:disable Inpsyde.CodeQuality.NoAccessors.NoGetter
     */
    public function get_settings()
    {
    }
    /**
     * {@inheritDoc}
     *
     * @return void
     *
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    public function output()
    {
    }
    /**
     * {@inheritDoc}
     *
     * @return void
     *
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
     */
    public function save()
    {
    }
}
class ZettleIntegration extends \WC_Settings_API
{
    /**
     * @var ZettleIntegrationTemplate
     */
    private $header;
    /**
     * @var string
     */
    private $currentState;
    /**
     * @var \Inpsyde\Zettle\Settings\FieldRenderer\FieldRendererInterface[]
     */
    private $renderers;
    /**
     * @var string[]
     */
    private $readonlyFieldTypes = ['title', 'zettle-onboarding'];
    /**
     * @var \Dhii\Collection\MutableContainerInterface
     */
    private $container;
    public function __construct(string $id, \Inpsyde\Zettle\Settings\WC\ZettleIntegrationTemplate $header, string $currentState, array $formFields, callable $isIntegrationPage, \Dhii\Collection\MutableContainerInterface $container, \Inpsyde\Zettle\Settings\FieldRenderer\FieldRendererInterface ...$renderers)
    {
    }
    /**
     * @return string
     * phpcs:disable Inpsyde.CodeQuality.NoAccessors.NoGetter
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
     * phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
     */
    public function get_option_key()
    {
    }
    /**
     * @param string $key
     * @param mixed|null $emptyValue
     *
     * @return mixed|string
     *
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     */
    public function get_option($key, $emptyValue = null)
    {
    }
    /**
     * @return bool|void
     * phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
     * phpcs:disable Inpsyde.CodeQuality.NestingLevel.High
     */
    public function process_admin_options()
    {
    }
    /**
     * Output the gateway settings screen.
     * @psalm-suppress MissingReturnType
     */
    public function admin_options()
    {
    }
    /**
     * Mostly copied from the parent method, but allows any field type to be overridden by
     * one of the FieldRenderers
     *
     * @param array $formFields
     * @param bool $echo
     *
     * phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
     * phpcs:disable Inpsyde.CodeQuality.NestingLevel.High
     *
     * @return string
     */
    public function generate_settings_html($formFields = [], $echo = true)
    {
    }
    /** Checks if the form field is visible and can be edited by user.
     *
     * @param array $formField WC form fields config.
     *
     * @return bool
     */
    private function isEditableField(array $formField): bool
    {
    }
    /** Checks if the form fields contain any fields that are visible and can be edited by user.
     *
     * @param array $formFields WC form fields config.
     *
     * @return bool
     */
    private function hasEditableFields(array $formFields): bool
    {
    }
    /**
     * Update a single option.
     *
     * @param string $key Option key.
     * @param mixed $value Value to set.
     *
     * @return bool was anything saved?
     * @since 3.4.0
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     * phpcs:disable Inpsyde.CodeQuality.ReturnTypeDeclaration.NoReturnType
     * phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
     */
    public function update_option($key, $value = '')
    {
    }
}
interface ZettleIntegrationTemplate
{
    /**
     * @return string
     */
    public function render(): string;
}
class ZettleIntegrationHeader implements \Inpsyde\Zettle\Settings\WC\ZettleIntegrationTemplate
{
    use \Inpsyde\Zettle\Onboarding\Settings\View\ButtonRendererTrait;
    /**
     * @var callable
     */
    private $accountLinkData;
    /**
     * @var array
     */
    private $shopLinkData;
    /**
     * @var callable
     */
    private $linkData;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DAL\Provider\Organization\OrganizationProvider
     */
    private $organizationProvider;
    /**
     * @var array
     */
    private $disconnectAccountData;
    /**
     * @var \Countable
     */
    private $productCounter;
    /**
     * @var int|null
     */
    private $firstImportTimestamp;
    /**
     * @var callable(int):string
     */
    private $timestampFormatter;
    /**
     * @var bool
     */
    private $priceSyncEnabled;
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $description;
    /**
     * @var string
     */
    private $currentState;
    /**
     * @var bool
     */
    private $authCheck;
    public function __construct(callable $accountLinkData, array $shopLinkData, callable $linkData, \Inpsyde\Zettle\PhpSdk\DAL\Provider\Organization\OrganizationProvider $organizationProvider, array $disconnectAccountData, \Countable $productCounter, ?int $firstImportTimestamp, callable $timestampFormatter, bool $priceSyncEnabled, string $title, string $description, string $currentState, callable $authCheck)
    {
    }
    /**
     * @inheritDoc
     */
    public function render(): string
    {
    }
    /**
     * @return string
     */
    protected function renderIcon(): string
    {
    }
    /**
     * @return string
     */
    protected function renderDetails(): string
    {
    }
    // phpcs:ignore Inpsyde.CodeQuality.FunctionLength.TooLong
    protected function renderMeta(): string
    {
    }
    /**
     * @param string $url
     * @param string $label
     * @param bool $withIcon
     * @param string $class
     * @param string $labelClass
     * @param string $target
     * @param bool $popup
     * @return string
     */
    private function renderLink(string $url, string $label, bool $withIcon = false, string $class = 'link', string $labelClass = 'link', string $target = '_blank', bool $popup = false): string
    {
    }
    /**
     * @param string $label
     * @param string $name
     * @param string $value
     * @param bool $withIcon
     * @param string $class
     * @param string $labelClass
     * @param string $type
     * @param array<string, string> $otherAttributes
     * @return string
     */
    private function renderButton(string $label, string $name, string $value, bool $withIcon = false, string $class = 'btn btn-primary', string $labelClass = 'btn', string $type = 'submit', array $otherAttributes = []): string
    {
    }
    /**
     * @param string $label
     * @param string $class
     * @param bool $withIcon
     *
     * @return string
     */
    private function renderLabel(string $label, string $class, bool $withIcon = false): string
    {
    }
    /**
     * @return string
     */
    private function renderIconExternalLink(): string
    {
    }
    /**
     * @param array<array{action: string, label: string, params?: array}> $buttons
     * Definitions of the dialog buttons.
     * 'action' - one of ButtonAction constants.
     * 'label' - button text.
     * 'params' - see ButtonRendererTrait.
     */
    private function renderModal(string $id, string $title, string $content, array $buttons): string
    {
    }
    private function email(): ?string
    {
    }
}
namespace Inpsyde\Zettle\Sync\Cli;

class ExcludeCommand
{
    /**
     * @var \Inpsyde\Queue\Queue\Job\Job
     */
    private $deleteProductJob;
    /**
     * @var \Inpsyde\Queue\Queue\Job\Job
     */
    private $unlinkProductJob;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;
    /**
     * ExcludeCommand constructor.
     *
     * @param \Inpsyde\Queue\Queue\Job\Job $deleteProductJob
     * @param \Inpsyde\Queue\Queue\Job\Job $unlinkProductJob
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(\Inpsyde\Queue\Queue\Job\Job $deleteProductJob, \Inpsyde\Queue\Queue\Job\Job $unlinkProductJob, \Psr\Log\LoggerInterface $logger)
    {
    }
    /**
     * Exclude a product locally and remotely at the Zettle Backoffice
     *
     * ## OPTIONS
     *
     * <id>
     * : The WC_Product ID
     *
     * ## EXAMPLES
     *
     *     wp zettle exclude product
     *
     * @when after_wp_load
     */
    public function product(array $args, array $assocArgs)
    {
    }
}
class ExportCommand
{
    /**
     * @var \Inpsyde\Queue\Processor\QueueProcessor
     */
    private $processor;
    /**
     * @var callable
     */
    private $createJobRecord;
    public function __construct(\Inpsyde\Queue\Processor\QueueProcessor $processor, callable $createJobRecord)
    {
    }
    /**
     * Deletes all Zettle products and clears WooCommerce of all connections
     *
     * ## EXAMPLES
     *
     *     wp zettle export products
     *
     * @when after_wp_load
     */
    public function products(array $args, array $assocArgs)
    {
    }
}
class ResetCommand
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\API\Products\Products
     */
    private $productsClient;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\DB\Table
     */
    private $idMapTable;
    /**
     * @var \Inpsyde\Queue\Db\Table
     */
    private $queueTable;
    /**
     * @var \Inpsyde\Queue\Queue\Job\Job
     */
    private $wipeRemoteJob;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;
    public function __construct(\Inpsyde\Queue\Queue\Job\Job $wipeRemoteJob, \Psr\Log\LoggerInterface $logger, \Inpsyde\Zettle\PhpSdk\DB\Table $idMapTable, \Inpsyde\Queue\Db\Table $queueTable)
    {
    }
    /**
     * Deletes all Zettle products and clears WooCommerce of all connections
     *
     * [--noconfirm]
     * : Whether or not to ask for confirmation
     *
     * ## EXAMPLES
     *
     *     wp zettle reset products
     *
     * @when after_wp_load
     * @throws \Inpsyde\Queue\Exception\QueueRuntimeException
     */
    public function products(array $args, array $assocArgs)
    {
    }
}
class SyncCommand
{
    /**
     * @var \Inpsyde\Queue\Processor\QueueProcessor
     */
    private $processor;
    /**
     * @var callable
     */
    private $createJobRecord;
    public function __construct(\Inpsyde\Queue\Processor\QueueProcessor $processor, callable $createJobRecord)
    {
    }
    /**
     * Sync a single product
     *
     * ## OPTIONS
     *
     * <id>
     * : The WC_Product ID
     *
     * ## EXAMPLES
     *
     *     wp zettle sync product
     *
     * @when after_wp_load
     */
    public function product(array $args, array $assocArgs)
    {
    }
}
class UnlinkCommand
{
    /**
     * @var \Inpsyde\Queue\Queue\Job\Job
     */
    private $unlinkProductJob;
    /**
     * @var \Inpsyde\Queue\Queue\Job\Job
     */
    private $unlinkVariantJob;
    /**
     * @var \Inpsyde\Queue\Queue\Job\Job
     */
    private $unlinkImagesJob;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;
    /**
     * UnlinkCommand constructor.
     *
     * @param \Inpsyde\Queue\Queue\Job\Job $unlinkProductJob
     * @param \Inpsyde\Queue\Queue\Job\Job $unlinkVariantJob
     * @param \Inpsyde\Queue\Queue\Job\Job $unlinkImagesJob
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(\Inpsyde\Queue\Queue\Job\Job $unlinkProductJob, \Inpsyde\Queue\Queue\Job\Job $unlinkVariantJob, \Inpsyde\Queue\Queue\Job\Job $unlinkImagesJob, \Psr\Log\LoggerInterface $logger)
    {
    }
    /**
     * Sync a single product
     *
     * ## OPTIONS
     *
     * <id>
     * : The WC_Product ID
     *
     * ## EXAMPLES
     *
     *     wp zettle unlink product
     *
     * @when after_wp_load
     */
    public function product(array $args, array $assocArgs)
    {
    }
    /**
     * Unlink a single variation
     *
     * ## OPTIONS
     *
     * <id>
     * : The WC_Product_Variation ID
     *
     * ## EXAMPLES
     *
     *     wp zettle unlink variant
     *
     * @when after_wp_load
     */
    public function variant(array $args, array $assocArgs)
    {
    }
    /**
     * Unlink images from product or variation
     *
     * ## OPTIONS
     *
     * <id>
     * : The WC_Product or WC_Product_Variation ID
     *
     * ## EXAMPLES
     *
     *     wp zettle unlink images
     *
     * @when after_wp_load
     */
    public function images(array $args, array $assocArgs)
    {
    }
    /**
     * Experimental: Unlink images from attachmentId and type
     *
     * ## OPTIONS
     *
     * <id>
     * : The Attachment ID
     *
     * <type>
     * : The mapped entity (product or variant)
     *
     * ## EXAMPLES
     *
     *     wp zettle unlink image
     *
     * @when after_wp_load
     */
    public function image(array $args, array $assocArgs)
    {
    }
}
namespace Inpsyde\Zettle\Sync\Job;

class DeleteProductJob implements \Inpsyde\Queue\Queue\Job\Job
{
    use \Inpsyde\Queue\ExceptionLoggingTrait;
    const TYPE = 'delete-product';
    /**
     * @var \Inpsyde\Zettle\PhpSdk\API\Products\Products
     */
    private $productsClient;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Map\RemoteIdProvider
     */
    private $remoteIdProvider;
    /**
     * @var callable
     */
    private $createJobRecord;
    /**
     * DeleteProductJob constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\API\Products\Products $productsClient
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\Map\RemoteIdProvider $remoteIdProvider, \Inpsyde\Zettle\PhpSdk\API\Products\Products $productsClient, callable $createJobRecord)
    {
    }
    /**
     * @inheritDoc
     */
    public function execute(\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Inpsyde\Queue\Queue\Job\JobRepository $repository, \Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function isUnique(): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function type(): string
    {
    }
}
/**
 * Class EnqueueProductSyncJob
 *
 * Fetches a list of all relevant products and inserts a sync job for them
 *
 * @package Inpsyde\Zettle\Sync\Job
 */
class EnqueueProductSyncJob implements \Inpsyde\Queue\Queue\Job\Job
{
    const TYPE = 'enqueue-products-to-sync';
    /**
     * @var array
     */
    private $productTypeWhitelist;
    /**
     * @var callable
     */
    private $createJobRecord;
    /**
     * @var callable
     */
    private $productCanSynced;
    /**
     * EnqueueProductSyncJob constructor.
     *
     * @param array $productTypeWhitelist
     * @param callable $createJobRecord
     * @param callable $productCanSynced
     */
    public function __construct(array $productTypeWhitelist, callable $createJobRecord, callable $productCanSynced)
    {
    }
    /**
     * @inheritDoc
     */
    public function execute(\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Inpsyde\Queue\Queue\Job\JobRepository $repository, \Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function isUnique(): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function type(): string
    {
    }
}
namespace Inpsyde\Zettle\Sync;

trait VariableInventoryChecker
{
    /**
     * @param \WC_Product_Variable $product
     *
     * @return bool
     */
    public function hasStockManagingVariations(\WC_Product_Variable $product): bool
    {
    }
}
namespace Inpsyde\Zettle\Sync\Job;

/**
 * This Job is a central piece of infrastructure that synchronizes the current state of a WC_Product
 * over to Zettle. It fetches the WC_Product from the database and passes it into the Builder.
 * The result is then either updated or created via REST api
 * depending on whether or not the Product already exists.
 *
 * For newly created products, it will also dispatch a follow-up job to sync the product inventory
 * if needed
 */
class ExportProductJob implements \Inpsyde\Queue\Queue\Job\Job
{
    use \Inpsyde\Queue\ExceptionLoggingTrait;
    use \Inpsyde\Zettle\Sync\VariableInventoryChecker;
    const TYPE = 'sync-product';
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface
     */
    private $repository;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface
     */
    private $builder;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\API\Products\Products
     */
    private $productsClient;
    /**
     * We are using a custom QueueProcessor for executing follow-up jobs directly
     * instead of adding them to the repository that we get passed in execute()
     *
     * Doing that makes the number of sync-jobs completely predictable: 1 product -> 1 job
     * -which in turn helps us determine how far we've progressed in a larger sync process.
     *
     * This instance should therefore run on a separate JobRepository
     *
     * @var \Inpsyde\Queue\Processor\QueueProcessor
     */
    private $processor;
    /**
     * @var callable
     */
    private $createJobRecord;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Map\RemoteIdProvider
     */
    private $remoteIdProvider;
    /**
     * @var callable(int):bool
     */
    private $isSyncable;
    /**
     * @var callable
     */
    private $productStatus;
    /**
     * UpdateProductJob constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository
     * @param \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder
     * @param \Inpsyde\Zettle\PhpSdk\API\Products\Products $productsClient
     * @param \Inpsyde\Zettle\PhpSdk\Map\RemoteIdProvider $remoteIdProvider
     * @param \Inpsyde\Queue\Processor\QueueProcessor $processor
     * @param callable $createJobRecord
     * @param callable(int):bool $isSyncable
     * @param callable(int):bool $productStatus
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository, \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder, \Inpsyde\Zettle\PhpSdk\API\Products\Products $productsClient, \Inpsyde\Zettle\PhpSdk\Map\RemoteIdProvider $remoteIdProvider, \Inpsyde\Queue\Processor\QueueProcessor $processor, callable $createJobRecord, callable $isSyncable, callable $productStatus)
    {
    }
    /**
     * @inheritDoc
     *
     * phpcs:disable Inpsyde.CodeQuality.FunctionLength.TooLong
     */
    public function execute(\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Inpsyde\Queue\Queue\Job\JobRepository $repository, \Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductTransferInterface $product
     * @param int $localProductId
     * @param \Psr\Log\LoggerInterface $logger
     * @param callable|null $onCreate
     *
     * @throws \Inpsyde\Queue\Exception\QueueRuntimeException
     */
    private function syncProduct(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductTransferInterface $product, int $localProductId, \Psr\Log\LoggerInterface $logger, ?callable $onCreate = null): void
    {
    }
    /**
     * @inheritDoc
     */
    public function isUnique(): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function type(): string
    {
    }
    /**
     * Sends off an update request via the REST client. If this fails because
     * the product could not be found, it will attempt to create it instead
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductTransferInterface $product
     * @param int $localProductId
     * @param \Psr\Log\LoggerInterface $logger
     *
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    private function attemptUpdate(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductTransferInterface $product, int $localProductId, \Psr\Log\LoggerInterface $logger): void
    {
    }
    /**
     * When a product has been re/created at Zettle, we should ensure its stock is in sync as well
     * (which is a second step in iZ land).
     * Enqueues a SyncStockJob (which will automatically enable inventory tracking if needed)
     *
     * @param \WC_Product $product
     *
     * @see SyncStockJob
     *
     */
    private function afterCreate(\WC_Product $product): void
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\LazyProduct $product
     * @param \Psr\Log\LoggerInterface $logger
     * @param callable|null $onSuccess
     *
     * @throws \Inpsyde\Queue\Exception\QueueRuntimeException
     */
    private function attemptCreate(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\LazyProduct $product, \Psr\Log\LoggerInterface $logger, ?callable $onSuccess = null): void
    {
    }
    /**
     * This method is run when we had a validation error with the current state of the WC_Product.
     * It can no longer be synced to iZ, so any further changes will never arrive there.
     * Thus, deleting it remotely is our only real course of action to prevent getting data out of sync.
     *
     * @param int $productId
     * @param \Psr\Log\LoggerInterface $logger
     */
    private function removeProductIfExists(int $productId, \Psr\Log\LoggerInterface $logger): void
    {
    }
}
class ReExportProductJob implements \Inpsyde\Queue\Queue\Job\Job
{
    use \Inpsyde\Zettle\Sync\VariableInventoryChecker;
    public const TYPE = 're-export-product';
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Repository\Zettle\Product\ProductRepositoryInterface
     */
    private $repository;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface
     */
    private $wcRepository;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface|\Inpsyde\Zettle\PhpSdk\Map\MapRecordCreator
     */
    private $variantMap;
    /**
     * @var callable
     */
    private $createJobRecord;
    /**
     * ProductTypeChangeJob constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\Repository\Zettle\Product\ProductRepositoryInterface $repository
     * @param \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $wcRepository
     * @param \Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface $variantMap
     * @param callable $createJobRecord
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\Repository\Zettle\Product\ProductRepositoryInterface $repository, \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $wcRepository, \Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface $variantMap, callable $createJobRecord)
    {
    }
    /**
     * @inheritDoc
     */
    public function isUnique(): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function type(): string
    {
    }
    /**
     * @inheritDoc
     */
    public function execute(\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Inpsyde\Queue\Queue\Job\JobRepository $repository, \Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @param \WC_Product $product
     * @param \Inpsyde\Queue\Queue\Job\JobRepository $repository
     *
     * @return bool
     */
    public function removeProduct(\WC_Product $product, \Inpsyde\Queue\Queue\Job\JobRepository $repository): bool
    {
    }
    /**
     * @param \WC_Product $product
     * @param int[] $variationIds
     * @param \Inpsyde\Queue\Queue\Job\JobRepository $repository
     * @param \Psr\Log\LoggerInterface $logger
     *
     * @return bool
     */
    public function exportProduct(\WC_Product $product, array $variationIds, \Inpsyde\Queue\Queue\Job\JobRepository $repository, \Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @param int[] $variationIds
     *
     * @return bool
     */
    private function unmapVariationIds(array $variationIds): bool
    {
    }
    /**
     * @param \WC_Product $product
     *
     * @return bool
     */
    private function tracksInventory(\WC_Product $product): bool
    {
    }
}
/**
 * Class SetInventoryTrackingJob
 *
 * This job enables or disables inventory tracking for a remote product.
 * If enabled, it will attempt to set the WooCommerce stock
 *
 * @package Inpsyde\Zettle\Sync\Job
 */
class SetInventoryTrackingJob implements \Inpsyde\Queue\Queue\Job\Job
{
    use \Inpsyde\Queue\ExceptionLoggingTrait;
    public const TYPE = 'set-inventory-tracking';
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface
     */
    private $repository;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\API\Inventory\Inventory
     */
    private $inventoryClient;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface
     */
    private $builder;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Map\OneToManyMapInterface
     */
    private $variantMap;
    /**
     * SetInventoryTrackingJob constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository
     * @param \Inpsyde\Zettle\PhpSdk\API\Inventory\Inventory $inventoryClient
     * @param \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder
     * @param \Inpsyde\Zettle\PhpSdk\Map\OneToManyMapInterface $variantMap
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository, \Inpsyde\Zettle\PhpSdk\API\Inventory\Inventory $inventoryClient, \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder, \Inpsyde\Zettle\PhpSdk\Map\OneToManyMapInterface $variantMap)
    {
    }
    /**
     * @inheritDoc
     */
    public function execute(\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Inpsyde\Queue\Queue\Job\JobRepository $repository, \Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @param string $uuid
     * @param int $productId
     * @param \Psr\Log\LoggerInterface $logger
     *
     * @return bool
     */
    private function startTracking(string $uuid, int $productId, \Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @param string $uuid
     * @param int $productId
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface $product
     * @param \Psr\Log\LoggerInterface $logger
     *
     * @return bool
     */
    private function stopTracking(string $uuid, int $productId, \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface $product, \Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function isUnique(): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function type(): string
    {
    }
}
class SetStateJob implements \Inpsyde\Queue\Queue\Job\Job
{
    const TYPE = 'set-state';
    /**
     * @var callable
     */
    private $setState;
    public function __construct(callable $setState)
    {
    }
    /**
     * @inheritDoc
     * phpcs:disable NeutronStandard.Functions.DisallowCallUserFunc.CallUserFunc
     */
    public function execute(\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Inpsyde\Queue\Queue\Job\JobRepository $repository, \Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function isUnique(): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function type(): string
    {
    }
}
class SyncStockJob implements \Inpsyde\Queue\Queue\Job\Job
{
    use \Inpsyde\Queue\ExceptionLoggingTrait;
    public const TYPE = 'sync-product-stock';
    /**
     * @var \Inpsyde\Zettle\PhpSdk\API\Inventory\Inventory
     */
    private $inventoryClient;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface
     */
    private $builder;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Map\OneToManyMapInterface
     */
    private $map;
    /**
     * @var int
     */
    private $maxStockChange;
    /**
     * @var \Inpsyde\Queue\Processor\QueueProcessor
     */
    private $processor;
    /**
     * @var \Inpsyde\Queue\Queue\Job\Job
     */
    private $setInventoryTrackingJob;
    /**
     * @param int $maxStockChange iZ API does not allow transactions larger than 100.000
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\API\Inventory\Inventory $inventoryClient, \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder, \Inpsyde\Zettle\PhpSdk\Map\OneToManyMapInterface $map, \Inpsyde\Queue\Processor\QueueProcessor $processor, int $maxStockChange, \Inpsyde\Queue\Queue\Job\Job $setInventoryTrackingJob)
    {
    }
    /**
     * @inheritDoc
     *
     * phpcs:disable Inpsyde.CodeQuality.FunctionLength.TooLong
     */
    public function execute(\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Inpsyde\Queue\Queue\Job\JobRepository $repository, \Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * Dispatches job to enable inventory tracking for the given WC_Product
     * If we are dealing with a WC_Product_Variation, we will use the parent
     * because there is no variant-level inventory tracking at iZ
     *
     * @param \WC_Product $wcProduct
     * @param \Psr\Log\LoggerInterface $logger
     * @param \Inpsyde\Queue\Queue\Job\ContextInterface $context
     */
    private function dispatchSetInventoryTrackingJob(\WC_Product $wcProduct, \Psr\Log\LoggerInterface $logger, \Inpsyde\Queue\Queue\Job\ContextInterface $context): void
    {
    }
    /**
     * Filter the Stock Change to iterate in the Zettle API limitations
     *
     * @param int $stockChange
     *
     * @return int
     */
    private function cappedStockChange(int $stockChange): int
    {
    }
    /**
     * @param \WC_Product $wcProduct
     *
     * @return string
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\BuilderException
     */
    private function getProductUuid(\WC_Product $wcProduct): string
    {
    }
    /**
     * Grab the current Zettle stock from the Inventory API. Return 0
     * if we don't know about the remote product yet.
     *
     * @param \Inpsyde\Zettle\PhpSdk\DAL\Entity\Inventory\Inventory $inventory
     * @param string $variantUuid
     *
     * @return int
     */
    private function fetchRemoteStock(\Inpsyde\Zettle\PhpSdk\DAL\Entity\Inventory\Inventory $inventory, string $variantUuid): int
    {
    }
    private function syncVariant(string $productUuid, string $variantUuid, array $transaction, \Psr\Log\LoggerInterface $logger): bool
    {
    }
    private function isRecoverable(\Throwable $exception): bool
    {
    }
    private function frontendTransaction(int $change): array
    {
    }
    private function backendTransaction(int $change): array
    {
    }
    /**
     * @param \WC_Product $product
     * @param \Psr\Log\LoggerInterface $logger
     *
     * @return string[]
     *
     * phpcs:disable Inpsyde.CodeQuality.FunctionLength.TooLong
     */
    private function fetchVariantUuids(\WC_Product $product, \Psr\Log\LoggerInterface $logger): array
    {
    }
    /**
     * @inheritDoc
     */
    public function isUnique(): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function type(): string
    {
    }
}
/**
 * Class UnlinkImages
 *
 * Unlink images at the IdMap locally
 *
 * @package Inpsyde\Zettle\Sync\Job
 */
class UnlinkImages implements \Inpsyde\Queue\Queue\Job\Job
{
    public const TYPE = 'unlink-images';
    public const PRODUCT_TYPE = 'product';
    public const VARIANT_TYPE = 'variant';
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Map\MapRecordCreator|\Inpsyde\Zettle\PhpSdk\Map\OneToManyMapInterface
     */
    private $imageIdMap;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface
     */
    private $repository;
    /**
     * UnlinkProductJob constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\Map\OneToManyMapInterface $imageIdMap
     * @param \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\Map\OneToManyMapInterface $imageIdMap, \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository)
    {
    }
    /**
     * @inheritDoc
     */
    public function execute(\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Inpsyde\Queue\Queue\Job\JobRepository $repository, \Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @param int $productId
     * @param \Psr\Log\LoggerInterface $logger
     *
     * @return bool
     */
    protected function fromProductId(int $productId, \Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @param int $attachmentId
     * @param string $type
     * @param \Psr\Log\LoggerInterface $logger
     *
     * @return bool
     */
    protected function fromAttachmentId(int $attachmentId, string $type, \Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @param int $productId
     * @param \Psr\Log\LoggerInterface $logger
     */
    private function removeFromProductId(int $productId, \Psr\Log\LoggerInterface $logger): void
    {
    }
    /**
     * @param \WC_Product_Variation $variation
     * @param \Psr\Log\LoggerInterface $logger
     */
    private function removeFromVariation(\WC_Product_Variation $variation, \Psr\Log\LoggerInterface $logger): void
    {
    }
    /**
     * @param \WC_Product $product
     * @param \Psr\Log\LoggerInterface $logger
     */
    private function removeFromProduct(\WC_Product $product, \Psr\Log\LoggerInterface $logger): void
    {
    }
    /**
     * @param \WC_Product $product
     * @param \Psr\Log\LoggerInterface $logger
     */
    private function cleanupVariants(\WC_Product $product, \Psr\Log\LoggerInterface $logger): void
    {
    }
    /**
     * @param string $type
     * @param int $attachmentId
     * @param string $remoteId
     * @param \Psr\Log\LoggerInterface $logger
     */
    private function cleanupImage(string $type, int $attachmentId, string $remoteId, \Psr\Log\LoggerInterface $logger): void
    {
    }
    /**
     * @inheritDoc
     */
    public function isUnique(): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function type(): string
    {
    }
    private function variantIds(\WC_Product $product): array
    {
    }
}
class UnlinkProductJob implements \Inpsyde\Queue\Queue\Job\Job
{
    const TYPE = 'unlink-product';
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Map\MapRecordCreator|\Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface
     */
    private $productIdMap;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Map\MapRecordCreator|\Inpsyde\Zettle\PhpSdk\Map\OneToManyMapInterface
     */
    private $variantIdMap;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface
     */
    private $repository;
    /**
     * UnlinkProductJob constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface $productIdMap
     * @param \Inpsyde\Zettle\PhpSdk\Map\OneToManyMapInterface $variantIdMap
     * @param \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface $productIdMap, \Inpsyde\Zettle\PhpSdk\Map\OneToManyMapInterface $variantIdMap, \Inpsyde\Zettle\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository)
    {
    }
    public function isUnique(): bool
    {
    }
    public function type(): string
    {
    }
    /**
     * @param \Inpsyde\Queue\Queue\Job\ContextInterface $context
     * @param \Inpsyde\Queue\Queue\Job\JobRepository $repository
     * @param \Psr\Log\LoggerInterface $logger
     *
     * @return bool
     */
    public function execute(\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Inpsyde\Queue\Queue\Job\JobRepository $repository, \Psr\Log\LoggerInterface $logger): bool
    {
    }
    private function logSuccess(\Psr\Log\LoggerInterface $logger, string $id)
    {
    }
    /**
     * @param int $localId
     * @param \Psr\Log\LoggerInterface $logger
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\IdNotFoundException
     */
    private function removeFromLocalId(int $localId, \Psr\Log\LoggerInterface $logger): void
    {
    }
    /**
     * @param string $remoteId
     * @param \Psr\Log\LoggerInterface $logger
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\IdNotFoundException
     */
    private function removeFromRemoteId(string $remoteId, \Psr\Log\LoggerInterface $logger): void
    {
    }
    /**
     * @param int $localId
     * @param \Psr\Log\LoggerInterface $logger
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\IdNotFoundException
     */
    private function cleanupVariants(int $localId, \Psr\Log\LoggerInterface $logger): void
    {
    }
    private function variantIds(\WC_Product $product): array
    {
    }
}
class UnlinkVariantJob implements \Inpsyde\Queue\Queue\Job\Job
{
    const TYPE = 'unlink-variant';
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface|\Inpsyde\Zettle\PhpSdk\Map\MapRecordCreator
     */
    private $variantMap;
    /**
     * VariantRepository constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface|\Inpsyde\Zettle\PhpSdk\Map\MapRecordCreator $variantMap
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface $variantMap)
    {
    }
    /**
     * @inheritDoc
     */
    public function isUnique(): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function type(): string
    {
    }
    /**
     * @param \Inpsyde\Queue\Queue\Job\ContextInterface $context
     * @param \Inpsyde\Queue\Queue\Job\JobRepository $repository
     * @param \Psr\Log\LoggerInterface $logger
     *
     * @return bool
     */
    public function execute(\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Inpsyde\Queue\Queue\Job\JobRepository $repository, \Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @param int $variationId
     * @param \Psr\Log\LoggerInterface $logger
     *
     * @return bool
     */
    private function removeWithVariationId(int $variationId, \Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @param string $variantUuid
     * @param \Psr\Log\LoggerInterface $logger
     *
     * @return bool
     */
    private function removeWithVariantUuid(string $variantUuid, \Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @param int $variantId
     * @param string $uuid
     *
     * @return bool
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\IdNotFoundException
     */
    private function deleteVariantRecord(int $variantId, string $uuid): bool
    {
    }
}
class WipeRemoteProductsJob implements \Inpsyde\Queue\Queue\Job\Job
{
    use \Inpsyde\Queue\ExceptionLoggingTrait;
    const TYPE = 'wipe-remote-products';
    /**
     * @var \Inpsyde\Zettle\PhpSdk\API\Products\Products
     */
    private $productsClient;
    /**
     * WipeRemoteProductsJob constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\API\Products\Products $productsClient
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\API\Products\Products $productsClient)
    {
    }
    /**
     * @param \Inpsyde\Queue\Queue\Job\ContextInterface $context
     * @param \Inpsyde\Queue\Queue\Job\JobRepository $repository
     * @param \Psr\Log\LoggerInterface $logger
     *
     * @return bool
     */
    public function execute(\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Inpsyde\Queue\Queue\Job\JobRepository $repository, \Psr\Log\LoggerInterface $logger): bool
    {
    }
    public function isUnique(): bool
    {
    }
    public function type(): string
    {
    }
}
namespace Inpsyde\Zettle\Sync\Listener;

/**
 * Enqueues the UpdateProductJob whenever there are any product changes.
 *
 * @see ProductEventListenerRegistry::onChange()
 */
class AllPropsListener
{
    /**
     * @var callable
     */
    private $createJob;
    /**
     * @var callable(int):bool
     */
    private $isSyncable;
    /**
     * AllPropsPropertyListener constructor.
     *
     * @param callable $createJob
     * @param callable(int):bool $isSyncable
     */
    public function __construct(callable $createJob, callable $isSyncable)
    {
    }
    public function __invoke(\WC_Product $new, \WC_Product $old): void
    {
    }
    /**
     * Usually, ExportProductJobs will not be added twice with the same args.
     * If a product got trashed and restored in quick succession,
     * it's possible for the needed re-sync job to be ignored because
     * a previous one has not been processed yet.
     * For these edge-cases, we simply add a little salt to the $args array
     *
     * @param array $args
     * @param \WC_Product $new
     * @param \WC_Product $old
     *
     * @return array
     */
    private function addSaltOnRePublish(array $args, \WC_Product $new, \WC_Product $old): array
    {
    }
}
/**
 * Deletes a product from Zettle if it was depublished in WooCommerce
 *
 * @see ProductEventListenerRegistry::onDelete()
 * @see ProductEventListenerRegistry::onDraft()
 * @see ProductEventListenerRegistry::onTrash()
 */
class DePublishListener
{
    use \Inpsyde\Zettle\Sync\VariableInventoryChecker;
    /**
     * @var callable
     */
    private $createJob;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface
     */
    private $productMap;
    public function __construct(\Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface $productMap, callable $createJob)
    {
    }
    public function __invoke(\WC_Product $product): void
    {
    }
    /**
     * Checks the ID-Map for a remote ID
     *
     * @param \WC_Product $product
     *
     * @return bool
     */
    protected function hasBeenSynced(\WC_Product $product): bool
    {
    }
    /**
     * Checks if the product is supposed to have inventory tracking on iZ
     *
     * @param \WC_Product $product
     *
     * @return bool
     */
    private function productTracksInventory(\WC_Product $product): bool
    {
    }
}
/**
 * Detects a Variable Product without Variations and deletes the Product on Update
 *
 * @see ProductEventListenerRegistry::onChange()
 */
class DeleteVariableWithoutVariationsListener
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface|\Inpsyde\Zettle\PhpSdk\Map\MapRecordCreator
     */
    private $productMap;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface|\Inpsyde\Zettle\PhpSdk\Map\MapRecordCreator
     */
    private $variantMap;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\API\Products\Products
     */
    private $productsClient;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;
    /**
     * DeleteVariableProductWithoutVariationsListener constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface $productMap
     * @param \Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface $variantMap
     * @param \Inpsyde\Zettle\PhpSdk\API\Products\Products $productsClient
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface $productMap, \Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface $variantMap, \Inpsyde\Zettle\PhpSdk\API\Products\Products $productsClient, \Psr\Log\LoggerInterface $logger)
    {
    }
    public function __invoke(\WC_Product_Variable $new, \WC_Product_Variable $old): void
    {
    }
    /**
     * @param \WC_Product_Variable $product
     *
     * @return bool
     */
    protected function productExistsRemotely(\WC_Product_Variable $product): bool
    {
    }
    /**
     * @param string $uuid
     *
     * @param int $productId
     *
     * @return bool
     */
    protected function dissolveProductMapping(string $uuid, int $productId): bool
    {
    }
    /**
     * @param string[] $uuids
     *
     * @return bool
     */
    protected function dissolveVariantsMapping(array $uuids): bool
    {
    }
    /**
     * @param int $productId
     *
     * @return string|null
     */
    private function uuidFromId(int $productId): ?string
    {
    }
    /**
     * @param string $uuid
     *
     * @return int|null
     */
    private function variantIdFromUuid(string $uuid): ?int
    {
    }
    /**
     * @param string $uuid
     * @param int $variantId
     *
     * @return bool
     */
    private function deleteVariant(string $uuid, int $variantId): bool
    {
    }
    /**
     * @param string $uuid
     *
     * @return \Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface|null
     */
    private function fetchProductWithUuid(string $uuid): ?\Inpsyde\Zettle\PhpSdk\DAL\Entity\Product\ProductInterface
    {
    }
    /**
     * Fetch Variations from Zettle Api
     *
     * @param string $uuid
     *
     * @return string[] Variant UUIDs
     */
    private function fetchVariantsFromZettle(string $uuid): array
    {
    }
}
/**
 * Detects if a product has somehow become invalid.
 * Then it will enqueue the necessary jobs to remove it from Zettle
 * @see ProductEventListenerRegistry::onChange()
 */
class NotSyncableListener
{
    /**
     * @var DePublishListener
     */
    private $depublishListener;
    /**
     * @var callable(int):bool
     */
    private $isSyncable;
    /**
     * @param callable(int):bool $isSyncable A function accepting a WC product ID
     * and returning whether it can be synced (valid).
     */
    public function __construct(\Inpsyde\Zettle\Sync\Listener\DePublishListener $depublishListener, callable $isSyncable)
    {
    }
    public function __invoke(\WC_Product $new, \WC_Product $old): void
    {
    }
}
/**
 * This Listener handles an edge-case when a new WC_Product_Variation is added
 * to a variable product with parent-level inventory tracking.
 * The variation could be synced without a stock quantity because the parent never
 * received a stock quantity change event and the new variation will not trigger one either:
 * Because it does not have its own inventory
 *
 * @see ProductEventListenerRegistry::onChange()
 */
class ParentStockVariationListener
{
    /**
     * @var callable
     */
    private $createJob;
    /**
     * @var callable(int):bool
     */
    private $isSyncable;
    public function __construct(callable $createJob, callable $isSyncable)
    {
    }
    public function __invoke(\WC_Product_Variation $new): void
    {
    }
    /**
     * Update the Stock for the ParentProduct
     *
     * @param \WC_Product_Variable $parentProduct
     */
    protected function ensureStockParentProduct(\WC_Product_Variable $parentProduct): void
    {
    }
    /**
     * Determine if the Variation manage stock by themself or from the parent
     *
     * @param \WC_Product_Variation $variation
     *
     * @return bool
     */
    private function isManagingStockByParent(\WC_Product_Variation $variation): bool
    {
    }
}
/**
 * Runs whenever a simple product has changed its 'managing_stock' property
 * @see ProductEventListenerRegistry::onPropertyChange() with 'managing_stock'
 */
class SimpleManageStockListener
{
    /**
     * @var callable
     */
    private $createJob;
    /**
     * @var callable(int):bool
     */
    private $isSyncable;
    public function __construct(callable $createJob, callable $isSyncable)
    {
    }
    public function __invoke(\WC_Product_Simple $new): void
    {
    }
}
/**
 * @see ProductEventListenerRegistry::onTypeChange()
 */
class SimpleToVariableTypeChangeListener
{
    /**
     * @var callable
     */
    private $createJob;
    /**
     * @var callable(int):bool
     */
    private $isSyncable;
    public function __construct(callable $createJob, callable $isSyncable)
    {
    }
    public function __invoke(\WC_Product_Variable $new, \WC_Product_Simple $old): void
    {
    }
}
/**
 * @see ProductEventListenerRegistry::onPropertyChange() with 'stock_quantity'
 */
class StockQuantityListener
{
    /**
     * @var callable
     */
    private $createJob;
    /**
     * @var callable(int):bool
     */
    private $isSyncable;
    public function __construct(callable $createJob, callable $isSyncable)
    {
    }
    public function __invoke(\WC_Product $new, \WC_Product $old): void
    {
    }
    /**
     * @return bool
     */
    private function isFrontOffice(): bool
    {
    }
}
/**
 * Enabling an inactive variation requires a stock sync since the variant was deleted at iZ.
 * But since merely enabling a variation will not trigger stock change listeners,
 * we explicitly force a stock sync here
 * @see ProductEventListenerRegistry::onPublish()
 */
class StockSyncOnVariationPublishListener
{
    /**
     * @var callable
     */
    private $createJob;
    /**
     * @var callable
     */
    private $isSyncable;
    /**
     * VariationPublishListener constructor.
     *
     * @param callable $createJob
     * @param callable $isSyncable
     */
    public function __construct(callable $createJob, callable $isSyncable)
    {
    }
    /**
     * @param \WC_Product_Variation $new
     * @param \WC_Product $old
     */
    public function __invoke(\WC_Product_Variation $new, \WC_Product $old): void
    {
    }
}
/**
 * @see ProductEventListenerRegistry::onPropertyChange() with 'managing_stock'
 */
class VariableManageStockListener
{
    use \Inpsyde\Zettle\Sync\VariableInventoryChecker;
    /**
     * @var callable
     */
    private $createJob;
    /**
     * @var callable(int):bool
     */
    private $isSyncable;
    public function __construct(callable $createJob, callable $isSyncable)
    {
    }
    public function __invoke(\WC_Product_Variable $new): void
    {
    }
}
/**
 * @see ProductEventListenerRegistry::onTypeChange()
 */
class VariableToSimpleTypeChangeListener
{
    /**
     * @var callable
     */
    private $createJob;
    /**
     * @var callable(int):bool
     */
    private $isSyncable;
    public function __construct(callable $createJob, callable $isSyncable)
    {
    }
    /**
     * The method signature determines the type change we are listening to
     * @param \WC_Product_Simple $new
     * @param \WC_Product_Variable $old
     */
    public function __invoke(\WC_Product_Simple $new, \WC_Product_Variable $old): void
    {
    }
}
/**
 * @see ProductEventListenerRegistry::onDelete()
 */
class VariationDeleteListener
{
    /**
     * @var callable
     */
    private $createJob;
    /**
     * @var callable(int):bool
     */
    private $isSyncable;
    public function __construct(callable $createJob, callable $isSyncable)
    {
    }
    /**
     * @param \WC_Product_Variation $product
     */
    public function __invoke(\WC_Product_Variation $product): void
    {
    }
}
/**
 * @see ProductEventListenerRegistry::onPropertyChange() with 'managing_stock'
 */
class VariationManageStockListener
{
    /**
     * @var VariableManageStockListener
     */
    private $variableListener;
    public function __construct(\Inpsyde\Zettle\Sync\Listener\VariableManageStockListener $variableListener)
    {
    }
    /**
     * @param \WC_Product_Variation $new
     * @param \WC_Product $old
     */
    public function __invoke(\WC_Product_Variation $new, \WC_Product $old): void
    {
    }
}
namespace Inpsyde\Zettle\Sync;

interface PriceSyncMode
{
    public const ENABLED = 'gross';
    public const DISABLED = 'zero';
}
namespace Inpsyde\Zettle\Sync\Status;

class StatusCodeMatcher implements \ArrayAccess
{
    /**
     * @var array<string, string>
     */
    private $statusMap;
    public function __construct(array $statusMap)
    {
    }
    /**
     * Match the given status codes and return the messages
     *
     * @param string[] $statusCodes
     *
     * @return array<string, string>
     */
    public function match(array $statusCodes): array
    {
    }
    /**
     * @inheritDoc
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
    }
    /**
     * @inheritDoc
     */
    public function offsetSet($offset, $value): void
    {
    }
    /**
     * @inheritDoc
     */
    public function offsetExists($offset): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function offsetUnset($offset): void
    {
    }
}
interface SyncStatusCodes
{
    public const NO_VALID_PRODUCT_ID = 'no-valid-product-id';
    public const SYNCED = 'synced';
    public const NOT_SYNCED = 'not-synced';
    public const SYNCABLE = 'syncable';
    public const NOT_SYNCABLE = 'not-syncable';
    public const PRODUCT_NOT_FOUND = 'product-not-found';
    public const UNSUPPORTED_PRODUCT_TYPE = 'unsupported-product-type';
    public const EXCLUDED = 'excluded';
    public const UNPUBLISHED = 'unpublished';
    public const UNPURCHASABLE = 'unpurchasable';
    public const INVISIBLE = 'invisible';
    public const UNDEFINED = 'undefined';
}
namespace Inpsyde\Zettle\Sync;

class SyncModule implements \Dhii\Modular\Module\ModuleInterface
{
    /**
     * @inheritDoc
     */
    public function setup(): \Interop\Container\ServiceProviderInterface
    {
    }
    /**
     * @inheritDoc
     */
    public function run(\Psr\Container\ContainerInterface $container): void
    {
    }
}
namespace Inpsyde\Zettle\Sync\Validator;

/**
 * Validates a product based on defined rules whether this is valid or not.
 *
 * @see ProductValidator::validate()
 *      Returns an empty array if the product is valid, otherwise you got an array
 *      with the conflicts, that doesn't got synced.
 * @see ProductValidator::validateWithLocalDBCheck()
 *      Returns the status synced or not, with the conflicts.
 */
class ProductValidator
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface
     */
    private $productMap;
    /**
     * @var \Inpsyde\Zettle\ProductSettings\Components\TermManager
     */
    private $termManager;
    /**
     * @var string[]
     */
    private $allowedProductTypes;
    /**
     * @var bool
     */
    private $isBuildingAllowed;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface
     */
    private $builder;
    /**
     * @var \Inpsyde\Debug\ExceptionHandler
     */
    private $exceptionHandler;
    /**
     * @param bool $isBuildingAllowed Whether it can try to build the product using $builder
     * to fully validate it.
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\Map\OneToOneMapInterface $productMap, \Inpsyde\Zettle\ProductSettings\Components\TermManager $termManager, array $allowedProductTypes, bool $isBuildingAllowed, \Inpsyde\Zettle\PhpSdk\Builder\BuilderInterface $builder, \Inpsyde\Debug\ExceptionHandler $exceptionHandler)
    {
    }
    /**
     * Return status codes array without the following status codes:
     * [synced, not-synced, syncable, not-syncable]
     *
     * @param int $productId
     *
     * @return string[]
     */
    public function validate(int $productId): array
    {
    }
    /**
     * @param int $productId
     *
     * @return string[]
     */
    public function validateWithLocalDBCheck(int $productId): array
    {
    }
    /**
     * @param \WC_Product $product
     *
     * @return string[]
     */
    protected function validateProduct(\WC_Product $product): array
    {
    }
}
namespace Inpsyde\Zettle\Webhooks;

class Bootstrap
{
    /**
     * @var callable
     */
    private $createJob;
    /**
     * @var callable
     */
    private $webhookDeletion;
    public function __construct(callable $createJob, callable $webhookDeletion)
    {
    }
    public function activate()
    {
    }
    public function deactivate()
    {
    }
}
namespace Inpsyde\Zettle\Webhooks\Cli;

class WebhookCommand
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\API\Webhooks\Subscriptions
     */
    private $subscriptions;
    /**
     * @var callable
     */
    private $webhookStorage;
    /**
     * @var \Inpsyde\Zettle\Webhooks\WebhookRegistration
     */
    private $webhookRegistration;
    public function __construct(\Inpsyde\Zettle\PhpSdk\API\Webhooks\Subscriptions $subscriptions, \Inpsyde\Zettle\Webhooks\WebhookStorageInterface $webhookStorage, \Inpsyde\Zettle\Webhooks\WebhookRegistration $webhookRegistration)
    {
    }
    /**
     * Registers the webhook(s) needed by the Zettle WooCommerce integration
     *
     * ## EXAMPLES
     *
     *     wp zettle webhook register
     *
     * @when after_wp_load
     */
    public function register()
    {
    }
    /**
     * Lists all webhooks registered in the configured merchant account
     *
     * ## EXAMPLES
     *
     *     wp zettle webhook list
     *
     * @when after_wp_load
     *
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    public function list()
    {
    }
    /**
     * Deletes a webhook from Zettle
     *
     * ## OPTIONS
     *
     * <uuid>
     * : The webhook UUID
     *
     * ## EXAMPLES
     *
     *     wp zettle webhook delete
     *
     * @when after_wp_load
     */
    public function delete(array $args, array $assocArgs)
    {
    }
}
namespace Inpsyde\Zettle\Webhooks;

interface EventName
{
    const INVENTORY_BALANCE_CHANGED = 'InventoryBalanceChanged';
}
namespace Inpsyde\Zettle\Webhooks\Handler;

interface WebhookHandler
{
    /**
     * @param \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Payload $payload
     *
     * @return bool
     */
    public function accepts(\Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Payload $payload): bool;
    /**
     * @param \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Payload $payload
     *
     * @return mixed
     */
    public function handle(\Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Payload $payload);
}
class InventoryBalanceChangedHandler implements \Inpsyde\Zettle\Webhooks\Handler\WebhookHandler
{
    /**
     * @var \Inpsyde\Zettle\Webhooks\Job\InventoryBalanceChangedJob
     */
    private $inventoryBalanceChanged;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\Map\OneToManyMapInterface
     */
    private $variantIdMap;
    /**
     * @var string
     */
    private $integrationUuid;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;
    public function __construct(\Inpsyde\Zettle\Webhooks\Job\InventoryBalanceChangedJob $inventoryBalanceChanged, \Psr\Log\LoggerInterface $logger, \Inpsyde\Zettle\PhpSdk\Map\OneToManyMapInterface $variantIdMap, string $integrationUuid)
    {
    }
    /**
     * @inheritDoc
     */
    public function accepts(\Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Payload $payload): bool
    {
    }
    /**
     * @inheritDoc
     *
     * @throws \Inpsyde\Queue\Exception\QueueRuntimeException
     * phpcs:disable Inpsyde.CodeQuality.FunctionLength.TooLong
     */
    public function handle(\Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Payload $payload)
    {
    }
}
class InventoryTrackingStartedHandler implements \Inpsyde\Zettle\Webhooks\Handler\WebhookHandler
{
    /**
     * @inheritDoc
     */
    public function accepts(\Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Payload $payload): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function handle(\Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Payload $payload)
    {
    }
}
class InventoryTrackingStoppedHandler implements \Inpsyde\Zettle\Webhooks\Handler\WebhookHandler
{
    /**
     * @inheritDoc
     */
    public function accepts(\Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Payload $payload): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function handle(\Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Payload $payload)
    {
    }
}
class LogHandler implements \Inpsyde\Zettle\Webhooks\Handler\WebhookHandler
{
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;
    public function __construct(\Psr\Log\LoggerInterface $logger)
    {
    }
    /**
     * @inheritDoc
     */
    public function accepts(\Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Payload $payload): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function handle(\Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Payload $payload)
    {
    }
}
class ProductDeletedHandler implements \Inpsyde\Zettle\Webhooks\Handler\WebhookHandler
{
    /**
     * @var \Inpsyde\Zettle\Sync\Job\UnlinkProductJob
     */
    private $unlinkProductJob;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;
    public function __construct(\Inpsyde\Zettle\Sync\Job\UnlinkProductJob $unlinkProductJob, \Psr\Log\LoggerInterface $logger)
    {
    }
    /**
     * @inheritDoc
     */
    public function accepts(\Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Payload $payload): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function handle(\Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Payload $payload)
    {
    }
}
namespace Inpsyde\Zettle\Webhooks\Job;

class InventoryBalanceChangedJob implements \Inpsyde\Queue\Queue\Job\Job
{
    const TYPE = 'webhook-inventory-balance-changed';
    /**
     * @var \Inpsyde\WcEvents\Toggle
     */
    private $toggle;
    /**
     * @var callable
     */
    private $createJobRecord;
    /**
     * InventoryBalanceChangedJob constructor.
     *
     * @param \Inpsyde\WcEvents\Toggle $toggle Needed to tell WcEvents that we want to update products in silence
     * @param callable $createJobRecord
     */
    public function __construct(\Inpsyde\WcEvents\Toggle $toggle, callable $createJobRecord)
    {
    }
    /**
     * @inheritDoc
     */
    public function execute(\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Inpsyde\Queue\Queue\Job\JobRepository $repository, \Psr\Log\LoggerInterface $logger): bool
    {
    }
    public function isUnique(): bool
    {
    }
    public function type(): string
    {
    }
}
class WebhookRegistrationJob implements \Inpsyde\Queue\Queue\Job\Job
{
    const TYPE = 'webhook-registration';
    /**
     * @var callable
     */
    private $webhookRegistration;
    /**
     * @var callable
     */
    private $canRegisterWebhooks;
    public function __construct(callable $webhookRegistration, callable $canRegisterWebhooks)
    {
    }
    /**
     * @inheritDoc
     */
    public function execute(\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Inpsyde\Queue\Queue\Job\JobRepository $repository, \Psr\Log\LoggerInterface $logger): bool
    {
    }
    public function isUnique(): bool
    {
    }
    public function type(): string
    {
    }
}
namespace Inpsyde\Zettle\Webhooks\Rest;

interface Endpoint
{
    /**
     * Return supported Endpoint CRUD Methods
     *
     * @return string[]
     */
    public function methods(): array;
    /**
     * Delegate Webhook Handlers
     *
     * @param \WP_REST_Request $request
     *
     * @return array<string, int>
     */
    public function callback(\WP_REST_Request $request): array;
}
interface Verifier
{
    /**
     * @param \WP_REST_Request $request
     *
     * @return bool
     */
    public function verify(\WP_REST_Request $request): bool;
}
/**
 * Class SignatureVerifier
 * Verifies the signature of an Zettle Webhook
 *
 * @link  https://github.com/iZettle/api-documentation/blob/master/pusher.adoc#webhook-verification
 * @package Inpsyde\Zettle\Webhooks\Rest
 */
class SignatureVerifier implements \Inpsyde\Zettle\Webhooks\Rest\Verifier
{
    /**
     * @var string
     */
    private $signingKey;
    public function __construct(string $signingKey)
    {
    }
    /**
     * @inheritDoc
     */
    public function verify(\WP_REST_Request $request): bool
    {
    }
    /**
     * @param \WP_REST_Request $request
     *
     * @return bool
     */
    private function isTestMessage(\WP_REST_Request $request): bool
    {
    }
    /**
     * @param string $timestamp
     * @param string $payload
     *
     * @return string
     */
    private function sign(string $timestamp, string $payload): string
    {
    }
}
class WebhookListenerEndpoint implements \Inpsyde\Zettle\Webhooks\Rest\Endpoint
{
    use \Inpsyde\Queue\ExceptionLoggingTrait;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\PayloadFactory
     */
    private $payloadFactory;
    /**
     * @var \Inpsyde\Zettle\Webhooks\Handler\WebhookHandler[]
     */
    private $handlers;
    /**
     * @var bool
     */
    private static $shutDownCalled = false;
    public function __construct(\Psr\Log\LoggerInterface $logger, \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\PayloadFactory $payloadFactory, \Inpsyde\Zettle\Webhooks\Handler\WebhookHandler ...$handlers)
    {
    }
    /**
     * @inheritDoc
     */
    public function methods(): array
    {
    }
    /**
     * @inheritDoc
     *
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    public function callback(\WP_REST_Request $request): array
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Payload $payload
     */
    public function registerShutdownHook(\Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Payload $payload): void
    {
    }
    /**
     * @param \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Payload $payload
     * @param \Inpsyde\Zettle\Webhooks\Handler\WebhookHandler ...$handlers
     */
    private function handle(\Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Payload $payload): void
    {
    }
}
namespace Inpsyde\Zettle\Webhooks;

/**
 * Unsubscribes all our webhooks.
 */
class WebhookDeletion
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Webhook
     */
    private $local;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\API\Webhooks\Subscriptions
     */
    private $subscriptions;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;
    /**
     * @var callable
     */
    private $canManageWebhooks;
    public function __construct(\Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Webhook $local, \Inpsyde\Zettle\PhpSdk\API\Webhooks\Subscriptions $subscriptions, \Psr\Log\LoggerInterface $logger, callable $canManageWebhooks)
    {
    }
    /**
     * Execute Deletion of registered Webhooks, only for this destination
     *
     * @return void
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\WebhookException|\Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     */
    public function execute(): void
    {
    }
}
class WebhookModule implements \Dhii\Modular\Module\ModuleInterface
{
    /**
     * @inheritDoc
     */
    public function setup(): \Interop\Container\ServiceProviderInterface
    {
    }
    /**
     * @inheritDoc
     */
    public function run(\Psr\Container\ContainerInterface $container): void
    {
    }
    private function registerCliCommand(\Psr\Container\ContainerInterface $container)
    {
    }
    /**
     * Register Listener Webhook Endpoint
     *
     * @param \Psr\Container\ContainerInterface $container
     */
    private function registerRestRoute(\Psr\Container\ContainerInterface $container)
    {
    }
}
/**
 * Subscribes the given webhook to zettle.
 */
class WebhookRegistration
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Webhook
     */
    private $local;
    /**
     * @var \Inpsyde\Zettle\PhpSdk\API\Webhooks\Subscriptions
     */
    private $subscriptions;
    /**
     * @var callable
     */
    private $webhookDeletion;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;
    public function __construct(\Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Webhook $local, \Inpsyde\Zettle\PhpSdk\API\Webhooks\Subscriptions $subscriptions, \Inpsyde\Zettle\Webhooks\WebhookDeletion $webhookDeletion, \Psr\Log\LoggerInterface $logger)
    {
    }
    /**
     * Execute Registration of Webhooks, also Delete outdated Webhooks and create new ones
     *
     * @return \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Webhook
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\ZettleRestException
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\WebhookException
     */
    public function execute(): \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Webhook
    {
    }
}
interface WebhookStorageInterface
{
    /**
     * Persist the Webhook instance
     *
     * @param \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Webhook $webhook
     *
     * @return bool
     */
    public function persist(\Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Webhook $webhook): bool;
    /**
     * Fetch the Webhook instance from the persistence layer
     *
     * @return \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Webhook
     *
     * @throws \Inpsyde\Zettle\PhpSdk\Exception\WebhookException
     */
    public function fetch(): \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Webhook;
    /**
     *
     * @return bool
     */
    public function clear(): bool;
}
class WebhookStorage implements \Inpsyde\Zettle\Webhooks\WebhookStorageInterface
{
    /**
     * @var \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\WebhookFactory
     */
    private $webhookFactory;
    /**
     * @var \Dhii\Collection\MutableContainerInterface
     */
    private $optionContainer;
    /**
     * @var string
     */
    private $optionKey;
    /**
     * @var array
     */
    private $defaultConfig;
    /**
     * WpOptionWebhookStorage constructor.
     *
     * @param \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\WebhookFactory $webhookFactory
     * @param \Dhii\Collection\MutableContainerInterface $optionContainer
     * @param string $optionKey
     * @param array $defaultConfig
     */
    public function __construct(\Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\WebhookFactory $webhookFactory, \Dhii\Collection\MutableContainerInterface $optionContainer, string $optionKey, array $defaultConfig)
    {
    }
    /**
     * @inheritDoc
     */
    public function persist(\Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Webhook $webhook): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function fetch(): \Inpsyde\Zettle\PhpSdk\API\Webhooks\Entity\Webhook
    {
    }
    /**
     * @return bool
     */
    public function clear(): bool
    {
    }
}
namespace Inpsyde\Zettle\Container;

class ArrayContainer implements \Psr\Container\ContainerInterface, \Dhii\Collection\MutableContainerInterface, \Dhii\Collection\ClearableContainerInterface
{
    /**
     * @var array
     */
    private $options;
    public function __construct(array $options)
    {
    }
    /**
     * @inheritDoc
     */
    public function get($id)
    {
    }
    /**
     * @inheritDoc
     */
    public function has($id)
    {
    }
    /**
     * @inheritDoc
     */
    public function set($key, $value): void
    {
    }
    public function unset(string $key): void
    {
    }
    public function clear(): void
    {
    }
}
class WpOptionContainer implements \Psr\Container\ContainerInterface, \Dhii\Collection\MutableContainerInterface, \Dhii\Collection\ClearableContainerInterface
{
    /**
     * @var array
     */
    private $options;
    /**
     * @var string
     */
    private $optionKey;
    public function __construct(string $optionKey)
    {
    }
    public function clear(): void
    {
    }
    public function get($id)
    {
    }
    public function has($id)
    {
    }
    public function set(string $key, $value): void
    {
    }
    public function unset(string $key): void
    {
    }
}
namespace Inpsyde\Zettle\Http;

interface PageReloaderInterface
{
    /**
     * Reload the current URL.
     */
    public function reload(): void;
}
class PageReloader implements \Inpsyde\Zettle\Http\PageReloaderInterface
{
    /**
     * @inheritDoc
     */
    public function reload(): void
    {
    }
}
namespace Inpsyde\Zettle;

class PluginModule implements \Dhii\Modular\Module\ModuleInterface
{
    /**
     * @inheritDoc
     */
    public function setup(): \Interop\Container\ServiceProviderInterface
    {
    }
    /**
     * @inheritDoc
     */
    public function run(\Psr\Container\ContainerInterface $container): void
    {
    }
    /**
     * @param \Psr\Container\ContainerInterface $container
     *
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    public function registerAssets(\Psr\Container\ContainerInterface $container): void
    {
    }
    /**
     * @param \Psr\Container\ContainerInterface $container
     *
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    public function registerMetaboxOrchestration(\Psr\Container\ContainerInterface $container): void
    {
    }
}
/**
 * @method string name()
 * @method string pluginUri()
 * @method string version()
 * @method string description()
 * @method string author()
 * @method string authorUri()
 * @method string textDomain()
 * @method string domainPath()
 * @method string network()
 * @method string requiresWp()
 * @method string requiresPhp()
 */
class PluginProperties
{
    private const HEADER_PROPERTIES = ['name' => 'Name', 'pluginUri' => 'PluginURI', 'version' => 'Version', 'description' => 'Description', 'author' => 'Author', 'authorUri' => 'AuthorURI', 'textDomain' => 'TextDomain', 'domainPath' => 'DomainPath', 'network' => 'Network', 'requiresWp' => 'RequiresWP', 'requiresPhp' => 'RequiresPHP'];
    /**
     * @var string
     */
    private $basePath;
    /**
     * @var string
     */
    private $baseUrl;
    /**
     * @var string
     */
    private $basename;
    /**
     * @var array
     */
    private $data;
    /**
     * @var bool
     */
    private $debug;
    /**
     * @var string
     */
    private $shortName;
    /**
     * @var int|null
     */
    private $lastUpdateTimestamp;
    /**
     * @param string $pluginFile
     * @param string $shortName
     */
    public function __construct(string $pluginFile, string $shortName)
    {
    }
    /**
     * @param string $name
     * @param array $arguments
     *
     * @return string
     */
    public function __call(string $name, array $arguments): string
    {
    }
    /**
     * @return string
     */
    public function basePath(): string
    {
    }
    /**
     * @return string
     */
    public function baseUrl(): string
    {
    }
    /**
     * @return string
     */
    public function basename(): string
    {
    }
    /**
     * @return bool
     */
    public function isDebug(): bool
    {
    }
    /**
     * @return void
     */
    public function forceDebug(): void
    {
    }
    /**
     * @return void
     */
    public function forceNoDebug(): void
    {
    }
    /**
     * @return string
     */
    public function shortName(): string
    {
    }
    public function lastUpdateTimestamp(): ?int
    {
    }
}
namespace Inpsyde\Zettle\Validation;

/**
 * Checks that PHP extensions (functions) are available.
 */
class RequiredExtensionsValidator implements \Dhii\Validation\ValidatorInterface
{
    /**
     * @var array<string, string>
     */
    protected $extensions;
    /**
     * @param array<string, string> $extensions Keys - functions like {@see mb_strtolower()}',
     * values - human-friendly names.
     */
    public function __construct(array $extensions)
    {
    }
    /**
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     */
    public function validate($value): void
    {
    }
    protected function getErrorMessageTemplate(array $missingExtensions): string
    {
    }
}
/**
 * Checks that plugins are active.
 */
class RequiredPluginsValidator implements \Dhii\Validation\ValidatorInterface
{
    /**
     * @var array<string, string>
     */
    protected $plugins;
    /**
     * @param array<string, string> $plugins Keys - paths like 'woocommerce/woocommerce.php',
     * values - human-friendly names.
     */
    public function __construct(array $plugins)
    {
    }
    /**
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     */
    public function validate($value): void
    {
    }
    protected function getErrorMessageTemplate(array $missingPlugins): string
    {
    }
}