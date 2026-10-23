<?php
/**
 * Generated stub declarations for zettle-pos-integration 2.0.1.
 * @see https://github.com/woocommerce/php-stubs
 */

namespace Syde\Vendor\Zettle\Inpsyde\Debug;

interface ExceptionHandler
{
    public function handle(\Throwable $exception): void;
}
class CompositeExceptionHandler implements \Syde\Vendor\Zettle\Inpsyde\Debug\ExceptionHandler
{
    /**
     * @var ExceptionHandler[]
     */
    private array $exceptionHandlers;
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\Debug\ExceptionHandler ...$exceptionHandlers)
    {
    }
    public function handle(\Throwable $exception): void
    {
    }
}
class DebugProxyFactory
{
    private \Syde\Vendor\Zettle\Inpsyde\Debug\ExceptionHandler $handler;
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\Debug\ExceptionHandler $handler)
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
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    public function forInstanceMethods(object $subject, string ...$methods): object
    {
    }
    private function renderConstructor(string $subjectFqcn): string
    {
    }
    private function renderDebugMethodBody(string $name): string
    {
    }
    private function renderDecoratorMethodBody(string $name): string
    {
    }
    /**
     * @param \ReflectionClass<object> $reflectionClass
     */
    private function renderClassName(\ReflectionClass $reflectionClass, string $suffix, bool $short = \false): string
    {
    }
    /**
     * @param \ReflectionClass<object> $reflectionClass
     */
    private function renderNamespace(\ReflectionClass $reflectionClass): string
    {
    }
    /**
     * @param array<int, string> $requestedMethods
     *
     * @return array<int, string>
     */
    private function determineProxyMethods(object $subject, array $requestedMethods): array
    {
    }
}
interface ExceptionFormatter
{
    public function format(\Throwable $exception): string;
}
class FallbackFormatter implements \Syde\Vendor\Zettle\Inpsyde\Debug\ExceptionFormatter
{
    private bool $isDebug;
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
class InpsydeDebugModule implements \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ServiceModule
{
    use \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ModuleClassNameIdTrait;
    /**
     * @inheritDoc
     */
    public function services(): array
    {
    }
}
class LogExceptionHandler implements \Syde\Vendor\Zettle\Inpsyde\Debug\ExceptionHandler
{
    private \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger;
    private \Syde\Vendor\Zettle\Inpsyde\Debug\ExceptionFormatter $formatter;
    /**
     * @var string[]
     */
    private array $levels;
    public function __construct(\Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger, \Syde\Vendor\Zettle\Inpsyde\Debug\ExceptionFormatter $formatter, array $levels)
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
    private \ReflectionMethod $method;
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
class TypeDelegatingFormatter implements \Syde\Vendor\Zettle\Inpsyde\Debug\ExceptionFormatter
{
    private \Syde\Vendor\Zettle\Inpsyde\Debug\ExceptionFormatter $fallback;
    private array $formatters;
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\Debug\ExceptionFormatter $fallback, array $formatters)
    {
    }
    public function format(\Throwable $exception): string
    {
    }
    private function findFormatterByType(\Throwable $exception): ?\Syde\Vendor\Zettle\Inpsyde\Debug\ExceptionFormatter
    {
    }
}
namespace Syde\Vendor\Zettle\Inpsyde\Http;

class HttpClientFactory
{
    protected \Syde\Vendor\Zettle\Psr\Http\Client\ClientInterface $innerClient;
    public function __construct(\Syde\Vendor\Zettle\Psr\Http\Client\ClientInterface $innerClient)
    {
    }
    public function withPlugins(\Syde\Vendor\Zettle\Http\Client\Common\Plugin ...$plugins): \Syde\Vendor\Zettle\Psr\Http\Client\ClientInterface
    {
    }
}
class HttpClientModule implements \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ServiceModule
{
    use \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ModuleClassNameIdTrait;
    /**
     * @inheritDoc
     */
    public function services(): array
    {
    }
}
namespace Syde\Vendor\Zettle\Inpsyde\Queue;

class Bootstrap
{
    /**
     * @var \Syde\Vendor\Zettle\Inpsyde\Queue\Db\Table[]
     */
    private array $tables;
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\Queue\Db\Table ...$tables)
    {
    }
    public function activate(): void
    {
    }
    /**
     * phpcs:disable WordPress.DB.PreparedSQL.InterpolatedNotPrepared
     */
    public function deactivate(): void
    {
    }
}
namespace Syde\Vendor\Zettle\Inpsyde\Queue\Cli;

class QueueCommand
{
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor $processor;
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor $processor)
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
    public function process(array $args, array $assocArgs): void
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
    public function live(array $args, array $assocArgs): void
    {
    }
}
namespace Syde\Vendor\Zettle\Inpsyde\Queue\Db;

/**
 * Interface Table
 */
interface Table
{
    public const MAX_INDEX_LENGTH = 191;
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
class QueueTable implements \Syde\Vendor\Zettle\Inpsyde\Queue\Db\Table
{
    private string $namespace;
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
namespace Syde\Vendor\Zettle\Inpsyde\Queue\Exception;

interface QueueException extends \Throwable
{
}
class InvalidJobException extends \Exception implements \Syde\Vendor\Zettle\Inpsyde\Queue\Exception\QueueException
{
}
class QueueLockedException extends \Exception implements \Syde\Vendor\Zettle\Inpsyde\Queue\Exception\QueueException
{
}
class QueueRuntimeException extends \Exception implements \Syde\Vendor\Zettle\Inpsyde\Queue\Exception\QueueException
{
}
namespace Syde\Vendor\Zettle\Inpsyde\Queue;

trait ExceptionLoggingTrait
{
    /**
     * Produces an exception trace and passes that to the Logger.
     * if WP_DEBUG is active, the full trace is used, otherwise a shorter on will be produced
     *
     * @param \Throwable $exception
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     * @param string $logLevel
     */
    protected function logException(\Throwable $exception, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger, string $logLevel = \Syde\Vendor\Zettle\Psr\Log\LogLevel::WARNING): void
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
namespace Syde\Vendor\Zettle\Inpsyde\Queue\Log;

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
class ArrayLogger implements \Syde\Vendor\Zettle\Psr\Log\LoggerInterface
{
    use \Syde\Vendor\Zettle\Psr\Log\LoggerTrait;
    private array $storage = [];
    private ?\Syde\Vendor\Zettle\Psr\Log\LoggerInterface $childLogger = null;
    public function __construct(?\Syde\Vendor\Zettle\Psr\Log\LoggerInterface $childLogger = null)
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
     */
    public function logs(?string $logLevel = null): array
    {
    }
}
class WpCliLogger implements \Syde\Vendor\Zettle\Psr\Log\LoggerInterface
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
namespace Syde\Vendor\Zettle\Inpsyde\Queue\Logger;

interface LoggerProviderInterface extends \Syde\Vendor\Zettle\Psr\Log\LoggerAwareInterface
{
    /**
     * Get a logger instance on the object.
     *
     * @return \Syde\Vendor\Zettle\Psr\Log\LoggerInterface
     */
    public function logger(): \Syde\Vendor\Zettle\Psr\Log\LoggerInterface;
}
namespace Syde\Vendor\Zettle\Inpsyde\Queue;

class NetworkState
{
    private int $siteId;
    /**
     * @var int[]
     */
    private array $stack;
    private function __construct()
    {
    }
    /**
     * Returns a new instance for the global site ID and switched stack.
     */
    public static function create(): \Syde\Vendor\Zettle\Inpsyde\Queue\NetworkState
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
namespace Syde\Vendor\Zettle\Inpsyde\Queue\Processor;

interface QueueProcessor
{
    /**
     * Return the JobRepository
     *
     * @return \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository
     */
    public function repository(): \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository;
    /**
     * Return the amount of processed Jobs
     * @throws \Syde\Vendor\Zettle\Inpsyde\Queue\Exception\QueueLockedException
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
class BasicQueueProcessor implements \Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor, \Syde\Vendor\Zettle\Inpsyde\Queue\Logger\LoggerProviderInterface
{
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $jobRepository;
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\QueueWalker $walker;
    private \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger;
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecordFactoryInterface $recordFactory;
    /**
     * @var callable
     */
    private $exceptionHandler;
    private int $maxRetriesCount;
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $jobRepository, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecordFactoryInterface $recordFactory, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\QueueWalker $walker, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger, int $maxRetriesCount, ?callable $exceptionHandler = null)
    {
    }
    /**
     * @inheritDoc
     */
    public function setLogger(\Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): void
    {
    }
    /**
     * @inheritDoc
     */
    public function logger(): \Syde\Vendor\Zettle\Psr\Log\LoggerInterface
    {
    }
    /**
     * @inheritDoc
     */
    public function repository(): \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository
    {
    }
    /**
     * Lock the queue, walk over all available jobs, unlock again
     *
     * @return int
     * @throws \Syde\Vendor\Zettle\Inpsyde\Queue\Exception\QueueLockedException
     */
    public function process(): int
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecord $jobRecord
     *
     * @return bool
     * @throws \Throwable
     */
    public function processSingleJob(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecord $jobRecord): bool
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecord $record
     *
     * @return \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecord
     * @throws \Syde\Vendor\Zettle\Inpsyde\Queue\Exception\InvalidJobException
     */
    private function createRetry(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecord $record): \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecord
    {
    }
    private function maybeRetry(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecord $record): bool
    {
    }
}
trait DecoratingLoggingProviderTrait
{
    abstract protected function inner(): \Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor;
    /**
     * @inheritDoc
     */
    public function setLogger(\Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): void
    {
    }
    /**
     * @inheritDoc
     */
    public function logger(): \Syde\Vendor\Zettle\Psr\Log\LoggerInterface
    {
    }
}
class LockingQueueProcessor implements \Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor
{
    use \Syde\Vendor\Zettle\Inpsyde\Queue\Processor\DecoratingLoggingProviderTrait;
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor $inner;
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Locker $locker;
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor $inner, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Locker $locker)
    {
    }
    public function repository(): \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository
    {
    }
    public function process(): int
    {
    }
    protected function inner(): \Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor
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
class NetworkQueueProcessor implements \Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor, \Syde\Vendor\Zettle\Inpsyde\Queue\Logger\LoggerProviderInterface
{
    use \Syde\Vendor\Zettle\Inpsyde\Queue\Processor\DecoratingLoggingProviderTrait;
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor $inner;
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
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor $inner, callable $networkStateFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function repository(): \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository
    {
    }
    /**
     * Lock the queue, walk over all available jobs, unlock again
     *
     * @return int
     * @throws \Syde\Vendor\Zettle\Inpsyde\Queue\Exception\QueueException
     */
    public function process(): int
    {
    }
    protected function inner(): \Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor
    {
    }
}
/**
 * Streamlines the creation of QueueProcessor instances with a fluent API
 */
class ProcessorBuilder
{
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository;
    private ?\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Stopper $stopper = null;
    private array $types = [];
    private \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger;
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecordFactoryInterface $jobRecordFactory;
    private ?\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Locker $locker = null;
    private bool $isMultisite = \false;
    /**
     * @var callable|null
     */
    private $exceptionHandler = null;
    private int $maxRetriesCount = 0;
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecordFactoryInterface $jobRecordFactory)
    {
    }
    public function withStopper(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Stopper $stopper): self
    {
    }
    /**
     * Adds a Locker to the Builder
     * This will cause usage of the LockingQueueProcessor decorator during build()
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Locker $locker
     *
     * @return $this
     */
    public function withLocker(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Locker $locker): self
    {
    }
    /**
     * Uses a specific JobRepository. By default, EphemeralJobRepository is used
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository
     *
     * @return $this
     */
    public function withRepository(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository): self
    {
    }
    public function withLogger(\Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): self
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
    public function withNetworkSupport(bool $state = \true): self
    {
    }
    public function withExceptionHandler(callable $handler): self
    {
    }
    public function withMaxRetriesCount(int $maxRetriesCount): self
    {
    }
    public function build(): \Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor
    {
    }
    private function createWalker(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobIterator $jobIterator): \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\QueueWalker
    {
    }
}
namespace Syde\Vendor\Zettle\Inpsyde\Queue\Queue;

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
class EphemeralLocker implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Locker
{
    private bool $isLocked = \false;
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
class FileBasedLocker implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Locker
{
    private int $timeout;
    private string $file;
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
class ItemsCountStopper implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Stopper
{
    private int $processedItems = 0;
    private int $maxItems = 0;
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
namespace Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job;

interface JobRecord
{
    public function job(): \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job;
    public function context(): \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface;
}
class BasicJobRecord implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecord
{
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job $job;
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface $context;
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job $job, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface $context)
    {
    }
    public function job(): \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job
    {
    }
    public function context(): \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface
    {
    }
}
interface JobRecordFactoryInterface
{
    /**
     * @param string $type
     * @param ContextInterface $context
     * @throws \Syde\Vendor\Zettle\Inpsyde\Queue\Exception\InvalidJobException
     * @return JobRecord
     */
    public function fromData(string $type, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface $context): \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecord;
}
class ContainerAwareJobRecordFactory implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecordFactoryInterface
{
    private \Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container;
    public function __construct(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container)
    {
    }
    /**
     * @inheritDoc
     */
    public function fromData(string $type, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface $context): \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecord
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
     */
    public function args(): \stdClass;
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
     * @return static
     */
    public function withIncrementedRetryCount(): self;
}
class Context implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface
{
    private \stdClass $args;
    private \DateTime $created;
    private int $siteId;
    private int $id;
    private int $retryCount;
    public function __construct(\stdClass $args, \DateTime $created, int $siteId, int $retryCount = 0, int $id = 0)
    {
    }
    public function id(): int
    {
    }
    public function forSite(): int
    {
    }
    public function args(): \stdClass
    {
    }
    public function created(): \DateTime
    {
    }
    public function retryCount(): int
    {
    }
    public static function fromArray(array $data, ?int $siteId = null, int $retryCount = 0, ?\DateTime $created = null, int $id = 0): \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface
    {
    }
    public function withIncrementedRetryCount(): \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface
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
    public function add(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecord ...$jobRecords): bool;
    /**
     * Deletes a QueueJob from the repository
     *
     * @param JobRecord $jobRecord
     *
     * @return bool
     */
    public function delete(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecord $jobRecord): bool;
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
class EphemeralJobRepository implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository
{
    /**
     * @var JobRecord[]
     */
    private array $repository = [];
    /**
     * @inheritDoc
     */
    public function add(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecord ...$jobRecords): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function delete(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecord $jobRecord): bool
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
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     *
     * @return bool
     *
     * @throws \Syde\Vendor\Zettle\Inpsyde\Queue\Exception\QueueRuntimeException
     */
    public function execute(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): bool;
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
class JobContainer implements \Syde\Vendor\Zettle\Psr\Container\ContainerInterface
{
    private \Syde\Vendor\Zettle\Psr\Container\ContainerInterface $parent;
    private string $prefix;
    public function __construct(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $parent, string $prefix)
    {
    }
    /**
     * @inheritDoc
     */
    public function get(string $id)
    {
    }
    /**
     * @inheritDoc
     */
    public function has(string $id): bool
    {
    }
}
/**
 * Class QueueJobIterator
 *
 * @package Inpsyde\Queue\Queue
 *
 * @implements \Iterator<int, JobRecord>
 */
class JobIterator implements \Iterator
{
    /**
     * Used to fetch a batch of new jobs once we're done with the current one
     */
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repo;
    private array $types;
    /**
     * Current batch of jobs to iterate over
     */
    private array $jobs = [];
    private ?\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecord $current = null;
    private int $idx = 0;
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
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repo, array $types = [], ?callable $sortCallback = null)
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
     * @return bool The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid(): bool
    {
    }
    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return JobRecord
     * @since 5.0.0
     */
    public function current(): \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecord
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
class NullJob implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job
{
    /**
     * @return bool
     */
    public function execute(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): bool
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
class WpDbJobRepository implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository
{
    private \wpdb $database;
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Db\Table $queueTable;
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecordFactoryInterface $jobRecordFactory;
    private \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger;
    /**
     * NetworkQueueJobRepository constructor.
     *
     * @param \wpdb $database
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Db\Table $queueTable
     * @param JobRecordFactoryInterface $queueFactory
     */
    public function __construct(\wpdb $database, \Syde\Vendor\Zettle\Inpsyde\Queue\Db\Table $queueTable, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecordFactoryInterface $queueFactory, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger)
    {
    }
    /**
     * @inheritDoc
     */
    public function add(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecord ...$jobRecords): bool
    {
    }
    /**
     * Checks the hashes of all JobRecords and filters out existing ones if they are supposed to be unique
     *
     * @param JobRecord ...$jobRecords
     *
     * @return array
     */
    private function filterExistingUniqueJobs(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecord ...$jobRecords): array
    {
    }
    /**
     * Returns a hash of a JobRecord object by serializing its data and type.
     *
     * @param JobRecord $jobRecord
     *
     * @return string
     */
    private function jobHash(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecord $jobRecord): string
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
    public function delete(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecord $jobRecord): bool
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
     * @throws \Syde\Vendor\Zettle\Inpsyde\Queue\Exception\InvalidJobException
     * @throws \Exception
     */
    private function castJobRecord(\stdClass $row): \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRecord
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
namespace Syde\Vendor\Zettle\Inpsyde\Queue\Queue;

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
namespace Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Runner;

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
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor $queueProcessor
     */
    public function initialize(\Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor $queueProcessor): void;
}
/**
 * Class DelegatingRunner
 *
 * Initializes any number of child runners
 *
 * @package Inpsyde\Queue\Queue\Runner
 */
class AggregateRunner implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Runner\Runner
{
    /**
     * @var Runner[]
     */
    private array $runners;
    /**
     * AggregateRunner constructor.
     *
     * @param Runner ...$runners
     */
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Runner\Runner ...$runners)
    {
    }
    /**
     * Initializes all child runners
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor $queueProcessor
     */
    public function initialize(\Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor $queueProcessor): void
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
class AsyncRequestRunner implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Runner\Runner
{
    public const DEFAULT_TIMEOUT = 0.01;
    public const DEFAULT_IS_BLOCKING = \false;
    /**
     * @var string Path (not the full URL!) to our REST endpoint
     */
    private string $restPath;
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
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor $queueProcessor
     *
     * phpcs:disable Syde.Functions.FunctionLength.TooLong
     */
    public function initialize(\Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor $queueProcessor): void
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
class WpCronRunner implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Runner\Runner
{
    private string $namespace;
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
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor $queueProcessor
     */
    public function initialize(\Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor $queueProcessor): void
    {
    }
}
/**
 * A Runner that initializes a WpShutdownRunner during heartbeat requests
 */
class WpHeartbeatRunner implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Runner\Runner
{
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Runner\WpShutdownRunner $shutdownRunner;
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Runner\WpShutdownRunner $shutdownRunner)
    {
    }
    public function initialize(\Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor $queueProcessor): void
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
class WpShutdownRunner implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Runner\Runner
{
    private bool $called = \false;
    /**
     * Hook the QueueProcessor into the shutdown action.
     * Ensures that the Runner is only being onvoked once even if the hook is called multiple times.
     *
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor $queueProcessor
     */
    public function initialize(\Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor $queueProcessor): void
    {
    }
}
namespace Syde\Vendor\Zettle\Inpsyde\Queue\Queue;

/**
 * Class TimeoutQueueWalker
 *
 * Walks the Queue until a specified timeout is hit
 *
 * @package Inpsyde\Queue\Queue
 */
class StoppableQueueWalker implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\QueueWalker
{
    private \Iterator $iterator;
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Stopper $stopper;
    /**
     * TimeoutQueueWalker constructor.
     *
     * @param \Iterator $iterator
     * @param Stopper $stopper
     */
    public function __construct(\Iterator $iterator, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Stopper $stopper)
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
class TimeStopper implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Stopper
{
    private ?float $startedAt = null;
    private float $stopAfter;
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
class UnstoppableQueueWalker implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\QueueWalker
{
    private \Iterator $iterator;
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
namespace Syde\Vendor\Zettle\Inpsyde\Queue;

class QueueLibrary
{
    private \Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container;
    private \Syde\Vendor\Zettle\Inpsyde\Queue\QueueModule $module;
    /**
     * QueueLibrary constructor.
     *
     * @param array $factories
     * @param array $extensions
     */
    public function __construct(array $factories = [], array $extensions = [])
    {
    }
    public function initialize(): void
    {
    }
    public function container(): \Syde\Vendor\Zettle\Psr\Container\ContainerInterface
    {
    }
}
class QueueModule implements \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ServiceModule, \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ExecutableModule
{
    use \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ModuleClassNameIdTrait;
    public function services(): array
    {
    }
    /**
     * phpcs:disable Syde.Functions.FunctionLength.TooLong
     */
    public function run(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): bool
    {
    }
}
namespace Syde\Vendor\Zettle\Inpsyde\Queue\Rest\V1;

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
class ProcessEndpoint implements \Syde\Vendor\Zettle\Inpsyde\Queue\Rest\V1\EndpointInterface
{
    use \Syde\Vendor\Zettle\Inpsyde\Queue\ExceptionLoggingTrait;
    public const METHODS = \WP_REST_Server::READABLE;
    public const VERSION = 'v1';
    public const ROUTE = '/process';
    public const DEFAULT_EXECUTION_TIME = 10;
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Processor\ProcessorBuilder $builder;
    private \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger;
    /**
     * @var callable
     */
    private $metaCallback;
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Locker $locker;
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository;
    private bool $isMultisite;
    private int $maxRetriesCount;
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\Queue\Processor\ProcessorBuilder $processorBuilder, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Locker $locker, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger, callable $metaCallback, bool $isMultisite, int $maxRetriesCount)
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
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     *
     * @return array
     */
    private function getLogs(\Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): array
    {
    }
}
namespace Syde\Vendor\Zettle\Inpsyde\StateMachine\Event;

class AggregateProvider implements \Syde\Vendor\Zettle\Psr\EventDispatcher\ListenerProviderInterface
{
    protected array $providers = [];
    public function getListenersForEvent(object $event): iterable
    {
    }
    /**
     * Enqueues a listener provider to this set.
     *
     * @param \Syde\Vendor\Zettle\Psr\EventDispatcher\ListenerProviderInterface $provider
     *   The provider to add.
     *
     * @return AggregateProvider
     *   The called object.
     */
    public function addProvider(\Syde\Vendor\Zettle\Psr\EventDispatcher\ListenerProviderInterface $provider): self
    {
    }
}
class EventDispatcher implements \Syde\Vendor\Zettle\Psr\EventDispatcher\EventDispatcherInterface
{
    /**
     * @var \Syde\Vendor\Zettle\Psr\EventDispatcher\ListenerProviderInterface[]
     */
    private array $listenerProviders;
    public function __construct(\Syde\Vendor\Zettle\Psr\EventDispatcher\ListenerProviderInterface ...$listenerProviders)
    {
    }
    public function dispatch(object $event): object
    {
    }
}
interface Transitioning
{
    public function fromState(): string;
    public function transition(): \Syde\Vendor\Zettle\Inpsyde\StateMachine\Transition\TransitionInterface;
}
interface PostTransition extends \Syde\Vendor\Zettle\Inpsyde\StateMachine\Event\Transitioning
{
}
trait TransitionEventTrait
{
    private string $fromState;
    private \Syde\Vendor\Zettle\Inpsyde\StateMachine\Transition\TransitionInterface $transition;
    public function __construct(string $fromState, \Syde\Vendor\Zettle\Inpsyde\StateMachine\Transition\TransitionInterface $transition)
    {
    }
    public function fromState(): string
    {
    }
    public function transition(): \Syde\Vendor\Zettle\Inpsyde\StateMachine\Transition\TransitionInterface
    {
    }
}
class GenericPostTransition implements \Syde\Vendor\Zettle\Inpsyde\StateMachine\Event\PostTransition
{
    use \Syde\Vendor\Zettle\Inpsyde\StateMachine\Event\TransitionEventTrait;
}
interface PreTransition extends \Syde\Vendor\Zettle\Inpsyde\StateMachine\Event\Transitioning
{
}
class GenericPreTransition implements \Syde\Vendor\Zettle\Inpsyde\StateMachine\Event\PreTransition
{
    use \Syde\Vendor\Zettle\Inpsyde\StateMachine\Event\TransitionEventTrait;
}
interface StateChange extends \Syde\Vendor\Zettle\Psr\EventDispatcher\StoppableEventInterface
{
    public function prepare(\Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface $stateMachine): void;
    public function currentState(): string;
    public function transitionTo(string $state): bool;
    public function targetState(): string;
}
class GenericStateChange implements \Syde\Vendor\Zettle\Inpsyde\StateMachine\Event\StateChange
{
    protected string $sourceState;
    protected string $newState;
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
    public function prepare(\Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface $machine): void
    {
    }
}
class GenericTransitionEvent
{
    public const PRE_TRANSITION = 'pre-transition';
    public const POST_TRANSITION = 'post-transition';
    protected \Syde\Vendor\Zettle\Inpsyde\StateMachine\Transition\TransitionInterface $transition;
    protected \Syde\Vendor\Zettle\Inpsyde\StateMachine\State\StateInterface $fromState;
    protected \Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface $stateMachine;
    private \Syde\Vendor\Zettle\Inpsyde\StateMachine\State\StateInterface $toState;
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\StateMachine\Transition\TransitionInterface $transition, \Syde\Vendor\Zettle\Inpsyde\StateMachine\State\StateInterface $fromState, \Syde\Vendor\Zettle\Inpsyde\StateMachine\State\StateInterface $toState, \Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface $stateMachine)
    {
    }
    public function transition(): \Syde\Vendor\Zettle\Inpsyde\StateMachine\Transition\TransitionInterface
    {
    }
    public function fromState(): \Syde\Vendor\Zettle\Inpsyde\StateMachine\State\StateInterface
    {
    }
    public function stateMachine(): \Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface
    {
    }
    public function toState(): \Syde\Vendor\Zettle\Inpsyde\StateMachine\State\StateInterface
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
     */
    protected function getParameterType(callable $callable): string
    {
    }
    /**
     * Determines if a callable represents a function.
     *
     * Or at least a reasonable approximation, since a function name may not be defined yet.
     *
     * @param callable $callable
     * @return bool True if the callable represents a function, false otherwise.
     */
    protected function isFunctionCallable(callable $callable): bool
    {
    }
    /**
     * Determines if a callable represents a closure/anonymous function.
     *
     * @param callable $callable
     * @return bool True if the callable represents a closure object, false otherwise.
     */
    protected function isClosureCallable(callable $callable): bool
    {
    }
    /**
     * Determines if a callable represents a method on an object.
     *
     * @param callable $callable
     * @return bool True if the callable represents a method object, false otherwise.
     * @phpstan-assert-if-true array{object, string} $callable
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
     * @return bool True if the callable represents a static method, false otherwise.
     *
     * phpcs:disable SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint
     */
    protected function isClassCallable(callable $callable): bool
    {
    }
    /**
     * Determines if a callable is a class that has __invoke() method
     *
     * @param callable $callable
     * @return bool True if the callable represents an invokable object, false otherwise.
     */
    private function isInvokable(callable $callable): bool
    {
    }
}
class ListenerProvider implements \Syde\Vendor\Zettle\Psr\EventDispatcher\ListenerProviderInterface
{
    use \Syde\Vendor\Zettle\Inpsyde\StateMachine\Event\ParameterDeriverTrait;
    /** @var array<callable> */
    private array $listeners;
    public function __construct(callable ...$listeners)
    {
    }
    public function addListener(callable $listener): void
    {
    }
    public function getListenersForEvent(object $event): iterable
    {
    }
}
class StateAwareListenerProvider implements \Syde\Vendor\Zettle\Psr\EventDispatcher\ListenerProviderInterface
{
    /**
     * @var ListenerProvider[]
     */
    private array $listeners = [];
    public function listen(string $state, callable $listener): void
    {
    }
    /**
     * phpcs:disable Syde.Functions.ReturnTypeDeclaration
     */
    public function getListenersForEvent(object $event): iterable
    {
    }
}
class TransitionAwareListenerProvider implements \Syde\Vendor\Zettle\Psr\EventDispatcher\ListenerProviderInterface
{
    /**
     * @var ListenerProvider[]
     */
    private array $listeners = [];
    public function listen(string $state, callable $listener): void
    {
    }
    /**
     * phpcs:disable Syde.Functions.ReturnTypeDeclaration
     */
    public function getListenersForEvent(object $event): iterable
    {
    }
}
class WebRequest extends \Syde\Vendor\Zettle\Inpsyde\StateMachine\Event\GenericStateChange
{
    private array $data;
    final public function __construct(array $data)
    {
    }
    public static function fromGlobals(): self
    {
    }
    public function data(): array
    {
    }
}
namespace Syde\Vendor\Zettle\Inpsyde\StateMachine\Exceptions;

class DenyTransitionException extends \Exception
{
}
namespace Syde\Vendor\Zettle\Inpsyde\StateMachine\Guard;

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
class ContainerAwareGuard implements \Syde\Vendor\Zettle\Inpsyde\StateMachine\Guard\GuardInterface
{
    private string $namespace;
    private \Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container;
    public function __construct(string $namespace, \Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container)
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
class Guard implements \Syde\Vendor\Zettle\Inpsyde\StateMachine\Guard\GuardInterface
{
    private string $transitionName;
    /**
     * @var callable[]
     */
    private array $callables;
    private ?string $fromState = null;
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
namespace Syde\Vendor\Zettle\Inpsyde\StateMachine\Initializer;

interface InitializerInterface
{
    public function initialize(\Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface $stateMachine, \Syde\Vendor\Zettle\Inpsyde\StateMachine\State\StateInterface ...$states): \Syde\Vendor\Zettle\Inpsyde\StateMachine\State\StateInterface;
}
// phpcs:disable Generic.PHP.DiscourageGoto
/**
 * Class ContainerInitializer
 *
 * Queries a Container for the current state.
 * Falls back to its child initializer on failure
 *
 * @package Inpsyde\StateMachine\Initializer
 */
class ContainerInitializer implements \Syde\Vendor\Zettle\Inpsyde\StateMachine\Initializer\InitializerInterface
{
    private string $namespace;
    private \Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container;
    private \Syde\Vendor\Zettle\Inpsyde\StateMachine\Initializer\InitializerInterface $childInitializer;
    public function __construct(string $namespace, \Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container, \Syde\Vendor\Zettle\Inpsyde\StateMachine\Initializer\InitializerInterface $childInitializer)
    {
    }
    public function initialize(\Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface $stateMachine, \Syde\Vendor\Zettle\Inpsyde\StateMachine\State\StateInterface ...$states): \Syde\Vendor\Zettle\Inpsyde\StateMachine\State\StateInterface
    {
    }
}
/**
 * Class StateQueryInitializer
 * Initializes a state machine based on the information provided the the State objects themselves
 *
 * @package Inpsyde\StateMachine\Initializer
 */
class StateQueryInitializer implements \Syde\Vendor\Zettle\Inpsyde\StateMachine\Initializer\InitializerInterface
{
    public function initialize(\Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface $stateMachine, \Syde\Vendor\Zettle\Inpsyde\StateMachine\State\StateInterface ...$states): \Syde\Vendor\Zettle\Inpsyde\StateMachine\State\StateInterface
    {
    }
}
namespace Syde\Vendor\Zettle\Inpsyde\StateMachine\Loader;

interface LoaderInterface
{
    public function load(\Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface $stateMachine): \Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface;
}
class ContainerLoader implements \Syde\Vendor\Zettle\Inpsyde\StateMachine\Loader\LoaderInterface
{
    private string $namespace;
    private \Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container;
    private \Syde\Vendor\Zettle\Inpsyde\StateMachine\Initializer\InitializerInterface $initializer;
    public function __construct(string $namespace, \Syde\Vendor\Zettle\Inpsyde\StateMachine\Initializer\InitializerInterface $initializer, \Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container)
    {
    }
    public function load(\Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface $stateMachine): \Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface
    {
    }
    private function loadStates(\Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface $stateMachine): void
    {
    }
    private function loadTransitions(\Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface $stateMachine): void
    {
    }
    private function loadGuards(\Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface $stateMachine): void
    {
    }
}
namespace Syde\Vendor\Zettle\Inpsyde\StateMachine\State;

interface StateInterface
{
    public const TYPE_INITIAL = 'State.Type.Initial';
    public const TYPE_NORMAL = 'State.Type.Normal';
    public const TYPE_FINAL = 'State.Type.Final';
    public function name(): string;
    public function isInitial(): bool;
    public function isFinal(): bool;
    /**
     * Return the available transitions
     *
     * @return \Syde\Vendor\Zettle\Inpsyde\StateMachine\Transition\TransitionInterface[]
     */
    public function transitions(): array;
    public function addTransition(\Syde\Vendor\Zettle\Inpsyde\StateMachine\Transition\TransitionInterface $transition): bool;
    public function can(\Syde\Vendor\Zettle\Inpsyde\StateMachine\Transition\TransitionInterface|string $transition): bool;
}
class State implements \Syde\Vendor\Zettle\Inpsyde\StateMachine\State\StateInterface
{
    protected string $name;
    protected string $type;
    /**
     * @var \Syde\Vendor\Zettle\Inpsyde\StateMachine\Transition\TransitionInterface[]
     */
    protected array $transitions;
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
     * @return bool
     */
    public function isInitial(): bool
    {
    }
    /**
     * @return bool
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
    public function addTransition(\Syde\Vendor\Zettle\Inpsyde\StateMachine\Transition\TransitionInterface $transition): bool
    {
    }
    public function can(\Syde\Vendor\Zettle\Inpsyde\StateMachine\Transition\TransitionInterface|string $transition): bool
    {
    }
}
namespace Syde\Vendor\Zettle\Inpsyde\StateMachine;

interface StateMachineInterface
{
    public function initialize(string $initialStateName): void;
    public function handle(object $event): void;
    public function addTransition(\Syde\Vendor\Zettle\Inpsyde\StateMachine\Transition\TransitionInterface $transition): \Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface;
    public function addState(\Syde\Vendor\Zettle\Inpsyde\StateMachine\State\StateInterface $state): \Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface;
    public function addGuard(\Syde\Vendor\Zettle\Inpsyde\StateMachine\Guard\GuardInterface $state): \Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface;
    /**
     * @throws \Syde\Vendor\Zettle\Inpsyde\StateMachine\Exceptions\DenyTransitionException
     */
    public function apply(string|\Syde\Vendor\Zettle\Inpsyde\StateMachine\Transition\TransitionInterface $transition): \Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface;
    /**
     * @param string|\Syde\Vendor\Zettle\Inpsyde\StateMachine\Transition\TransitionInterface $transition
     *
     * @return bool
     * phpcs:disable Syde.Functions.ReturnTypeDeclaration
     */
    public function can($transition): bool;
    public function currentState(): \Syde\Vendor\Zettle\Inpsyde\StateMachine\State\StateInterface;
    /**
     * @return \Syde\Vendor\Zettle\Inpsyde\StateMachine\Transition\TransitionInterface[]
     */
    public function availableTransitions(): array;
    public function initialState(): ?\Syde\Vendor\Zettle\Inpsyde\StateMachine\State\StateInterface;
}
// phpcs:disable WordPress.Security.EscapeOutput.ExceptionNotEscaped
class StateMachine implements \Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface
{
    /**
     * trigger when change state
     *
     * @var callable|null
     */
    protected $stateHandler;
    protected \Syde\Vendor\Zettle\Psr\EventDispatcher\EventDispatcherInterface $dispatcher;
    protected \Syde\Vendor\Zettle\Inpsyde\StateMachine\State\StateInterface $currentState;
    /**
     * @var \Syde\Vendor\Zettle\Inpsyde\StateMachine\State\StateInterface[]
     */
    protected array $states = [];
    protected array $transitions = [];
    /**
     * @var \Syde\Vendor\Zettle\Inpsyde\StateMachine\Guard\GuardInterface[]
     */
    private array $guards = [];
    private \Syde\Vendor\Zettle\Psr\EventDispatcher\EventDispatcherInterface $eventDispatcher;
    public function __construct(\Syde\Vendor\Zettle\Psr\EventDispatcher\EventDispatcherInterface $eventDispatcher, ?callable $updateStateHandler = null)
    {
    }
    public function initialize(string $initialStateName): void
    {
    }
    public function addTransition(\Syde\Vendor\Zettle\Inpsyde\StateMachine\Transition\TransitionInterface $transition): \Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface
    {
    }
    public function addState(\Syde\Vendor\Zettle\Inpsyde\StateMachine\State\StateInterface $state): \Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface
    {
    }
    /**
     * @throws \Syde\Vendor\Zettle\Inpsyde\StateMachine\Exceptions\DenyTransitionException
     */
    public function apply(string|\Syde\Vendor\Zettle\Inpsyde\StateMachine\Transition\TransitionInterface $transition): \Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface
    {
    }
    /**
     * @param string $transition
     *
     * @return \Syde\Vendor\Zettle\Inpsyde\StateMachine\Transition\TransitionInterface
     */
    private function transition(string $transition): \Syde\Vendor\Zettle\Inpsyde\StateMachine\Transition\TransitionInterface
    {
    }
    /**
     * @param string|\Syde\Vendor\Zettle\Inpsyde\StateMachine\Transition\TransitionInterface $transition
     *
     * @return bool
     * phpcs:disable Syde.Functions.ReturnTypeDeclaration
     */
    public function can($transition): bool
    {
    }
    /**
     * @return \Syde\Vendor\Zettle\Inpsyde\StateMachine\State\StateInterface
     */
    public function currentState(): \Syde\Vendor\Zettle\Inpsyde\StateMachine\State\StateInterface
    {
    }
    protected function setCurrentState(string|\Syde\Vendor\Zettle\Inpsyde\StateMachine\State\StateInterface $state): \Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface
    {
    }
    /**
     * @return \Syde\Vendor\Zettle\Inpsyde\StateMachine\Transition\TransitionInterface[]
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
     * @throws \UnexpectedValueException
     */
    private function getState(string|\Syde\Vendor\Zettle\Inpsyde\StateMachine\State\StateInterface $state): \Syde\Vendor\Zettle\Inpsyde\StateMachine\State\StateInterface
    {
    }
    public function initialState(): ?\Syde\Vendor\Zettle\Inpsyde\StateMachine\State\StateInterface
    {
    }
    public function addGuard(\Syde\Vendor\Zettle\Inpsyde\StateMachine\Guard\GuardInterface $guard): \Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface
    {
    }
    public function handle(object $event): void
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
    private \Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container;
    private \Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineModule $module;
    /**
     * StateMachineLibrary constructor.
     *
     * @param array $factories Overrides for dafault factories
     * @param array $extensions Extensions for default factories
     */
    public function __construct(array $factories = [], array $extensions = [])
    {
    }
    public function initialize(): void
    {
    }
    public function container(): \Syde\Vendor\Zettle\Psr\Container\ContainerInterface
    {
    }
}
class StateMachineModule implements \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ServiceModule, \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ExecutableModule
{
    use \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ModuleClassNameIdTrait;
    public function services(): array
    {
    }
    public function run(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): bool
    {
    }
}
namespace Syde\Vendor\Zettle\Inpsyde\StateMachine\Transition;

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
class Transition implements \Syde\Vendor\Zettle\Inpsyde\StateMachine\Transition\TransitionInterface
{
    protected array $from;
    protected string $to;
    protected string $name;
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
namespace Syde\Vendor\Zettle\Inpsyde\WcEvents;

/**
 * Similar in intention to Toggle, but this class allows preventing dispatch on a per-event basis.
 * Has a method to add deciders from outside
 */
class DispatchDecider
{
    /** @var array<callable(\Syde\Vendor\Zettle\Inpsyde\WcEvents\Event\ProductChangeEvent):bool> */
    private array $deciders;
    /**
     * DispatchDecider constructor.
     * TODO Discuss if there should be a discrete DeciderInterface instead of callable
     *
     * @param callable(\Syde\Vendor\Zettle\Inpsyde\WcEvents\Event\ProductChangeEvent):bool ...$deciders
     */
    public function __construct(callable ...$deciders)
    {
    }
    /**
     * Calls all deciders and returns true if all deciders returned true
     *
     * @param \Syde\Vendor\Zettle\Inpsyde\WcEvents\Event\ProductChangeEvent $event
     *
     * @return bool
     */
    public function isEventDispatchable(\Syde\Vendor\Zettle\Inpsyde\WcEvents\Event\ProductChangeEvent $event): bool
    {
    }
    /**
     * Adds a new decider. Deciders are a callable that accepts a ProductChangeEvent
     * as its only parameter and returns boolean
     * @param callable(\Syde\Vendor\Zettle\Inpsyde\WcEvents\Event\ProductChangeEvent):bool $decider
     */
    public function addDecider(callable $decider): void
    {
    }
}
namespace Syde\Vendor\Zettle\Inpsyde\WcEvents\Event;

/**
 * This looks like PSR-14, but currently isn't
 * TODO actually implement PSR-14 here
 */
class EventDispatcher
{
    private \Syde\Vendor\Zettle\Inpsyde\WcEvents\Event\ProductEventListenerRegistry $listenerProvider;
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\WcEvents\Event\ProductEventListenerRegistry $listenerProvider)
    {
    }
    /**
     * Retrieves listeners for the current event from the $listenerProvider
     * and calls them.
     *
     * @param ProductChangeEvent $event
     */
    public function dispatch(\Syde\Vendor\Zettle\Inpsyde\WcEvents\Event\ProductChangeEvent $event): void
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
class GenericProductChangeEvent implements \Syde\Vendor\Zettle\Inpsyde\WcEvents\Event\ProductChangeEvent
{
    private \WC_Product $new;
    private \WC_Product $old;
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
    private array $listeners = [];
    private \Syde\Vendor\Zettle\Inpsyde\WcEvents\ParameterDeriver $parameterDeriver;
    /**
     * ProductEventListenerRegistry constructor.
     *
     * @param \Syde\Vendor\Zettle\Inpsyde\WcEvents\ParameterDeriver $parameterDeriver
     */
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\WcEvents\ParameterDeriver $parameterDeriver)
    {
    }
    /**
     * Inspects the event and returns appropriate listeners.
     *
     * @param ProductChangeEvent $event
     *
     * @return array
     */
    public function getListenersForEvent(\Syde\Vendor\Zettle\Inpsyde\WcEvents\Event\ProductChangeEvent $event): array
    {
    }
    /**
     * Registers a list of listeners that fire whenever any change happens to a product.
     *
     * @param callable(\WC_Product, \WC_Product): void ...$callables
     */
    public function onChange(callable ...$callables): void
    {
    }
    /**
     * Inspects the change event and fires listeners only if the specified property has changed
     *
     * @param string $property
     * @param callable(\WC_Product, \WC_Product): void ...$callables
     */
    public function onPropertyChange(string $property, callable ...$callables): void
    {
    }
    /**
     * Inspects the change event and fires listeners only if a product has been
     * transitioned to the specified status.
     *
     * @param string $status
     * @param callable(\WC_Product, \WC_Product): void ...$callables
     */
    public function onStatusChange(string $status, callable ...$callables): void
    {
    }
    /**
     * Sugar for onStatusChange
     *
     * @param callable(\WC_Product, \WC_Product): void ...$callables
     *
     * @see ProductEventListenerRegistry::onStatusChange()
     */
    public function onPublish(callable ...$callables): void
    {
    }
    /**
     * Sugar for onStatusChange
     *
     * @param callable(\WC_Product, \WC_Product): void ...$callables
     *
     * @see ProductEventListenerRegistry::onStatusChange()
     */
    public function onTrash(callable ...$callables): void
    {
    }
    /**
     * Sugar for onStatusChange
     *
     * @param callable(\WC_Product, \WC_Product): void ...$callables
     *
     * @see ProductEventListenerRegistry::onStatusChange()
     */
    public function onDraft(callable ...$callables): void
    {
    }
    /**
     * Sugar for onStatusChange
     *
     * @param callable(\WC_Product, \WC_Product): void ...$callables
     *
     * @see ProductEventListenerRegistry::onStatusChange()
     */
    public function onPending(callable ...$callables): void
    {
    }
    /**
     * Sugar for onStatusChange
     *
     * @param callable(\WC_Product, \WC_Product): void ...$callables
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
     * @param callable(\WC_Product, \WC_Product): void ...$callables
     */
    public function onCatalogVisibilityChange(string $visibility, callable ...$callables): void
    {
    }
    /**
     * Sugar for onCatalogVisibilityChange
     *
     * @param callable(\WC_Product, \WC_Product): void ...$callables
     *
     * @see ProductEventListenerRegistry::onStatusChange()
     */
    public function onHide(callable ...$callables): void
    {
    }
    /**
     * Sugar for onCatalogVisibilityChange
     *
     * @param callable(\WC_Product, \WC_Product): void ...$callables
     *
     * @see ProductEventListenerRegistry::onStatusChange()
     */
    public function onBecomeVisible(callable ...$callables): void
    {
    }
    /**
     * Sugar for onCatalogVisibilityChange
     *
     * @param callable(\WC_Product, \WC_Product): void ...$callables
     *
     * @see ProductEventListenerRegistry::onStatusChange()
     */
    public function onBecomeSearchOnly(callable ...$callables): void
    {
    }
    /**
     * Sugar for onCatalogVisibilityChange
     *
     * @param callable(\WC_Product, \WC_Product): void ...$callables
     *
     * @see ProductEventListenerRegistry::onStatusChange()
     */
    public function onBecomeCatalogOnly(callable ...$callables): void
    {
    }
    /**
     * @param callable(\WC_Product, \WC_Product): void ...$callables
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    public function onDelete(callable ...$callables): void
    {
    }
    /**
     * Inspects the change event and fires listeners only if a product has been
     * turned into a different type of product.
     *
     * @param callable(\WC_Product, \WC_Product): void ...$callables
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
     * @param callable(\WC_Product, \WC_Product): void $callable
     *
     * @return callable(\WC_Product, \WC_Product): void
     */
    private function createStatusGuard(string $status, callable $callable): callable
    {
    }
    /**
     * Fires the $listener only if catalog_visibility changed to the specified value.
     * Similar to createStatusGuard
     *
     * @param string $visibility
     * @param callable(\WC_Product, \WC_Product): void $callable
     *
     * @return callable(\WC_Product, \WC_Product): void
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
namespace Syde\Vendor\Zettle\Inpsyde\WcEvents\Hooks;

/**
 * Hooks into WP&WC to detect any product changes.
 * Fires a ProductChangeEvent whenever a change was detected
 */
class ProductHooks
{
    /**
     * @var array<int, array<string, callable[]>>
     */
    private array $snapshots = [];
    private \Syde\Vendor\Zettle\Inpsyde\WcEvents\Event\EventDispatcher $dispatcher;
    private \Syde\Vendor\Zettle\Inpsyde\WcEvents\Toggle $toggle;
    private \Syde\Vendor\Zettle\Inpsyde\WcEvents\DispatchDecider $decider;
    /**
     * ProductHooks constructor.
     *
     * @param \Syde\Vendor\Zettle\Inpsyde\WcEvents\Event\EventDispatcher $dispatcher
     */
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\WcEvents\Event\EventDispatcher $dispatcher, \Syde\Vendor\Zettle\Inpsyde\WcEvents\Toggle $toggle, \Syde\Vendor\Zettle\Inpsyde\WcEvents\DispatchDecider $decider)
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
    private function registerAfterHooks(callable $callable): void
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
     * @param callable(\WC_Product): void $callable
     *
     * @param int $argPosition
     * The position of the WC_Product instance|id in the 'outer' callback signature
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
namespace Syde\Vendor\Zettle\Inpsyde\WcEvents;

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
     * phpcs:disable SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    public function parameterType(callable $callable, int $param): string
    {
    }
    /**
     * Determines if a callable represents a function.
     *
     * Or at least a reasonable approximation, since a function name may not be defined yet.
     *
     * @param callable $callable
     *
     * @return bool True if the callable represents a function, false otherwise.
     */
    protected function isFunctionCallable(callable $callable): bool
    {
    }
    /**
     * Determines if a callable represents a closure/anonymous function.
     *
     * @param callable $callable
     *
     * @return bool True if the callable represents a closure object, false otherwise.
     */
    protected function isClosureCallable(callable $callable): bool
    {
    }
    /**
     * Determines if a callable represents a method on an object.
     *
     * @param callable $callable
     *
     * @return bool True if the callable represents a method object, false otherwise.
     * @phpstan-assert-if-true array{object, string} $callable
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
     * @return bool True if the callable represents a static method, false otherwise.
     */
    protected function isClassCallable(callable $callable): bool
    {
    }
    /**
     * Determines if a callable is a class that has __invoke() method
     *
     * @param callable $callable
     *
     * @return bool True if the callable represents an invokable object, false otherwise.
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
    private bool $state = \true;
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
    private \Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container;
    private \Syde\Vendor\Zettle\Inpsyde\WcEvents\WcEventsModule $module;
    /**
     * WcEventsLibrary constructor.
     *
     * @param array $factories
     * @param array $extensions
     */
    public function __construct(array $factories = [], array $extensions = [])
    {
    }
    public function initialize(): void
    {
    }
    public function container(): \Syde\Vendor\Zettle\Psr\Container\ContainerInterface
    {
    }
}
/**
 * Contains service definitions and bootstrapping logic of this module
 */
class WcEventsModule implements \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ServiceModule, \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ExtendingModule, \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ExecutableModule
{
    use \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ModuleClassNameIdTrait;
    public function services(): array
    {
    }
    public function extensions(): array
    {
    }
    public function run(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): bool
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Assets;

class AssetsModule implements \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ServiceModule, \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ExtendingModule
{
    use \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ModuleClassNameIdTrait;
    /**
     * @inheritDoc
     */
    public function services(): array
    {
    }
    /**
     * @inheritDoc
     */
    public function extensions(): array
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth;

class AuthModule implements \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ServiceModule, \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ExtendingModule, \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ExecutableModule
{
    use \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ModuleClassNameIdTrait;
    /**
     * @inheritDoc
     */
    public function services(): array
    {
    }
    /**
     * @inheritDoc
     */
    public function extensions(): array
    {
    }
    /**
     * @inheritDoc
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     * phpcs:disable Syde.Functions.FunctionLength.TooLong
     */
    public function run(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): bool
    {
    }
}
class AuthenticatedClientFactory
{
    private \Syde\Vendor\Zettle\Inpsyde\Http\HttpClientFactory $clientFactory;
    private \Syde\Vendor\Zettle\Psr\Http\Message\UriFactoryInterface $uriFactory;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Jwt\ParserInterface $jwtParser;
    private \Syde\Vendor\Zettle\Psr\Http\Message\StreamFactoryInterface $streamFactory;
    private array $partnerAffiliationHeader;
    private string $clientId;
    /**
     * @param \Syde\Vendor\Zettle\Inpsyde\Http\HttpClientFactory $clientFactory
     * @param \Syde\Vendor\Zettle\Psr\Http\Message\UriFactoryInterface $uriFactory
     * @param \Syde\Vendor\Zettle\Psr\Http\Message\StreamFactoryInterface $streamFactory
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Jwt\ParserInterface $jwtParser
     * @param array $partnerAffiliationHeader
     * @param string $clientId client_id of the app, see IZET-331
     */
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\Http\HttpClientFactory $clientFactory, \Syde\Vendor\Zettle\Psr\Http\Message\UriFactoryInterface $uriFactory, \Syde\Vendor\Zettle\Psr\Http\Message\StreamFactoryInterface $streamFactory, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Jwt\ParserInterface $jwtParser, array $partnerAffiliationHeader, string $clientId)
    {
    }
    /**
     * Create a client that is configured to authenticate with a given api token.
     * Useful for creating a temporary client to validate new credentials
     *
     * @param string $token
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\AuthSuccessHandler|null $successHandler
     *
     * @return \Syde\Vendor\Zettle\Psr\Http\Client\ClientInterface
     */
    public function withApiToken(string $token, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\AuthSuccessHandler $successHandler = null): \Syde\Vendor\Zettle\Psr\Http\Client\ClientInterface
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Psr\Http\Message\RequestInterface $request
     *
     * @return bool
     */
    protected function shouldAuthenticate(\Syde\Vendor\Zettle\Psr\Http\Message\RequestInterface $request): bool
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\AuthSuccessHandler|null $successHandler
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\AuthSuccessHandler
     */
    private function ensureSuccessHandler(?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\AuthSuccessHandler $successHandler = null): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\AuthSuccessHandler
    {
    }
}
class CredentialsContainer implements \Syde\Vendor\Zettle\Psr\Container\ContainerInterface
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Jwt\ParserInterface $tokenDecoder;
    private array $data;
    private ?\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $inner = null;
    /**
     * CredentialsContainer constructor.
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Jwt\ParserInterface $tokenDecoder
     * @param array $data
     * @param \Syde\Vendor\Zettle\Psr\Container\ContainerInterface|null $inner
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Jwt\ParserInterface $tokenDecoder, array $data, ?\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $inner = null)
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
    public function get(string $id)
    {
    }
    /**
     * Check if id (key) exists
     *
     * @param string $id
     *
     * @return bool
     */
    public function has(string $id): bool
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Exception;

class AuthenticationException extends \Exception implements \Syde\Vendor\Zettle\Psr\Http\Client\ClientExceptionInterface
{
}
class InvalidTokenException extends \Exception implements \Syde\Vendor\Zettle\Psr\Http\Client\ClientExceptionInterface
{
}
class InvalidTokenPropertyException extends \Exception implements \Syde\Vendor\Zettle\Psr\Container\NotFoundExceptionInterface
{
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\HTTPlug;

/**
 * This is a little helper to help test error scenarios
 *
 * @see https://en.wikipedia.org/wiki/Chaos_engineering#Chaos_Monkey
 *
 * Class ChaosMonkeyPlugin
 * @package Syde\PayPal\PointOfSale\Auth\HTTPlug
 */
class ChaosMonkeyPlugin implements \Syde\Vendor\Zettle\Http\Client\Common\Plugin
{
    /**
     * @var int[]
     */
    private array $statusProbability = [];
    private \Syde\Vendor\Zettle\Psr\Http\Message\ResponseFactoryInterface $responseFactory;
    public function __construct(\Syde\Vendor\Zettle\Psr\Http\Message\ResponseFactoryInterface $responseFactory, array $config = [])
    {
    }
    /**
     * @inheritDoc
     */
    public function handleRequest(\Syde\Vendor\Zettle\Psr\Http\Message\RequestInterface $request, callable $next, callable $first): \Syde\Vendor\Zettle\Http\Promise\Promise
    {
    }
    private function determineError(): int|false
    {
    }
}
/**
 * phpcs:disable Syde.Functions.ReturnTypeDeclaration.NoReturnType
 */
class ZettleAuthPlugin implements \Syde\Vendor\Zettle\Http\Client\Common\Plugin
{
    public const OAUTH_URL = 'https://oauth.izettle.com/token';
    private \Syde\Vendor\Zettle\Http\Message\Authentication $auth;
    /**
     * Flag attempted refreshes for each request.
     */
    private array $chainStorage = [];
    /**
     * @var callable
     */
    private $shouldAuthenticate;
    private \Syde\Vendor\Zettle\Psr\Http\Message\UriFactoryInterface $uriFactory;
    private \Syde\Vendor\Zettle\Psr\Http\Message\StreamFactoryInterface $streamFactory;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Grant\GrantType $authGrantType;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Grant\GrantType $refreshGrantType;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\AuthSuccessHandler $authSuccessHandler;
    public function __construct(\Syde\Vendor\Zettle\Http\Message\Authentication $auth, callable $shouldAuthenticate, \Syde\Vendor\Zettle\Psr\Http\Message\UriFactoryInterface $uriFactory, \Syde\Vendor\Zettle\Psr\Http\Message\StreamFactoryInterface $streamFactory, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Grant\GrantType $authGrantType, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Grant\GrantType $refreshGrantType, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\AuthSuccessHandler $authSuccessHandler)
    {
    }
    /**
     * @inheritDoc
     */
    public function handleRequest(\Syde\Vendor\Zettle\Psr\Http\Message\RequestInterface $request, callable $next, callable $first): \Syde\Vendor\Zettle\Http\Promise\Promise
    {
    }
    private function handleAuthRequest(callable $first, \Syde\Vendor\Zettle\Psr\Http\Message\RequestInterface $request, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Grant\GrantType $grant): \Syde\Vendor\Zettle\Http\Promise\Promise
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Jwt;

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
    public function parse(string $jwt): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Jwt\TokenInterface;
}
/**
 * A basic JWT parser.
 */
class Parser implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Jwt\ParserInterface
{
    /**
     * @inheritDoc
     */
    public function parse(string $jwt): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Jwt\TokenInterface
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
    public function createParser(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Jwt\ParserInterface;
}
class ParserFactory implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Jwt\ParserFactoryInterface
{
    public function __construct()
    {
    }
    /**
     * @inheritDoc
     */
    public function createParser(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Jwt\ParserInterface
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
     * @return array<string, mixed>
     */
    public function getHeaders(): array;
    /**
     * Retrieves the token claims.
     *
     * @return array<string, mixed>
     */
    public function getClaims(): array;
}
class Token implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Jwt\TokenInterface
{
    /** @var array<string, mixed> */
    protected array $headers;
    /** @var array<string, mixed> */
    protected array $claims;
    protected string $signature;
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth;

interface AuthSuccessHandler
{
    public function handle(\Syde\Vendor\Zettle\Psr\Http\Message\ResponseInterface $response): void;
}
interface TokenPersistorInterface
{
    public function persist(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Token\TokenInterface $token): bool;
    public function clear(): bool;
}
interface TokenProviderInterface
{
    /**
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Exception\InvalidTokenException
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Token\TokenInterface
     */
    public function fetch(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Token\TokenInterface;
}
/**
 * Stores Zettle access tokens in a child container.
 * We kind of expect the child container to offer some persistence...
 */
class ContainerTokenStorage implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\TokenPersistorInterface, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\TokenProviderInterface
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Container\WritableContainerInterface $container;
    private string $key;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Token\TokenFactoryInterface $tokenFactory;
    /**
     * SiteOptionTokenStorage constructor.
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Container\WritableContainerInterface $container
     * @param string $key
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Token\TokenFactoryInterface $tokenFactory
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Container\WritableContainerInterface $container, string $key, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Token\TokenFactoryInterface $tokenFactory)
    {
    }
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Token\TokenInterface
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Exception\InvalidTokenException
     */
    public function fetch(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Token\TokenInterface
    {
    }
    public function persist(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Token\TokenInterface $token): bool
    {
    }
    public function clear(): bool
    {
    }
}
class CredentialValidator
{
    public const ENDPOINT = 'https://oauth.izettle.com/users/me';
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\AuthenticatedClientFactory $clientFactory;
    private \Syde\Vendor\Zettle\Psr\Http\Message\RequestFactoryInterface $requestFactory;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\AuthenticatedClientFactory $clientFactory, \Syde\Vendor\Zettle\Psr\Http\Message\RequestFactoryInterface $requestFactory)
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
 * @package Syde\PayPal\PointOfSale\Auth\OAuth
 */
class EphemeralTokenStorage implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\TokenProviderInterface, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\TokenPersistorInterface
{
    private ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Token\TokenInterface $token = null;
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Token\TokenInterface $token
     *
     * @return bool
     */
    public function persist(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Token\TokenInterface $token): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function fetch(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Token\TokenInterface
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Grant;

interface GrantType
{
    /**
     * @return string
     */
    public function type(): string;
    /**
     * @return array
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Exception\InvalidTokenException
     */
    public function payload(): array;
}
class JwtGrant implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Grant\GrantType
{
    public const KEY = 'urn:ietf:params:oauth:grant-type:jwt-bearer';
    private \Syde\Vendor\Zettle\Psr\Container\ContainerInterface $credentials;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Jwt\ParserInterface $tokenDecoder;
    private string $clientId;
    /**
     * @param \Syde\Vendor\Zettle\Psr\Container\ContainerInterface $credentials
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Jwt\ParserInterface $tokenDecoder
     * @param string $clientId client_id of the app, see IZET-331
     */
    public function __construct(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $credentials, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Jwt\ParserInterface $tokenDecoder, string $clientId)
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Token;

interface TokenInterface
{
    public function access(): string;
    public function expires(): int;
    public function refresh(): string;
    public function toArray(): array;
}
class Token implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Token\TokenInterface
{
    private string $accessToken;
    private int $expiresIn;
    private string $refreshToken;
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
    public function fromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Token\TokenInterface;
}
class TokenFactory implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Token\TokenFactoryInterface
{
    /**
     * @param array $data
     *
     * @return TokenInterface
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Exception\InvalidTokenException
     */
    public function fromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Token\TokenInterface
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth;

/**
 * Class TokenContainer
 *
 * Wraps a Token class so that its data is accessible via the Container interface
 *
 * @package Syde\PayPal\PointOfSale\Auth\OAuth
 */
class TokenDataContainer implements \Syde\Vendor\Zettle\Psr\Container\ContainerInterface
{
    private array $accessors;
    /**
     * TokenContainer constructor.
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Token\TokenInterface $token
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Token\TokenInterface $token)
    {
    }
    /**
     * @inheritDoc
     * phpcs:disable Syde.Functions.ReturnTypeDeclaration.NoReturnType
     * phpcs:disable SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint
     */
    public function get(string $key)
    {
    }
    /**
     * @inheritDoc
     * phpcs:disable Syde.Functions.ReturnTypeDeclaration.NoReturnType
     * phpcs:disable SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint
     */
    public function has(string $key): bool
    {
    }
}
class TokenPersistingAuthSuccessHandler implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\AuthSuccessHandler
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\TokenPersistorInterface $tokenPersistor;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Token\TokenFactoryInterface $tokenFactory;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\TokenPersistorInterface $tokenPersistor, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\Token\TokenFactoryInterface $tokenFactory)
    {
    }
    public function handle(\Syde\Vendor\Zettle\Psr\Http\Message\ResponseInterface $response): void
    {
    }
}
class ZettleOAuthHeader implements \Syde\Vendor\Zettle\Http\Message\Authentication
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\TokenProviderInterface $tokenStorage;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\TokenProviderInterface $tokenStorage)
    {
    }
    /**
     * @inheritDoc
     */
    public function authenticate(\Syde\Vendor\Zettle\Psr\Http\Message\RequestInterface $request): \Syde\Vendor\Zettle\Psr\Http\Message\RequestInterface
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Rest\V1;

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
class ValidationEndpoint implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Rest\V1\EndpointInterface
{
    public const ERROR_WRITE_ONLY_PASSWORD_NOT_FILLED = 'write_only_password_not_filled';
    protected \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Validator\ValidatorInterface $validator;
    /**
     * @var callable(string):bool
     */
    protected $writeOnlyPasswordChecker;
    /**
     * @param callable(string):bool $writeOnlyPasswordChecker @see WriteOnlyPasswordFieldChecker
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Validator\ValidatorInterface $validator, callable $writeOnlyPasswordChecker)
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Validator;

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
class Validator implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Validator\ValidatorInterface
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Jwt\ParserInterface $parser;
    /**
     * Validator constructor.
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Jwt\ParserInterface $parser
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\Jwt\ParserInterface $parser)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function validate(string $jwt): bool
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Logging\Logger;

class CompoundLogger implements \Syde\Vendor\Zettle\Psr\Log\LoggerInterface
{
    use \Syde\Vendor\Zettle\Psr\Log\LoggerTrait;
    /**
     * @var \Syde\Vendor\Zettle\Psr\Log\LoggerInterface[]
     */
    private array $loggers;
    public function __construct(\Syde\Vendor\Zettle\Psr\Log\LoggerInterface ...$loggers)
    {
    }
    /**
     *  phpcs:disable SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint
     *
     * @inheritDoc
     */
    public function log($level, $message, array $context = [])
    {
    }
    public function addLogger(\Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): self
    {
    }
}
/**
 * Wraps log events in a 'do_action' call that Wonolog understands.
 *
 * @link https://github.com/inpsyde/Wonolog
 */
class WonoLogger implements \Syde\Vendor\Zettle\Psr\Log\LoggerInterface
{
    use \Syde\Vendor\Zettle\Psr\Log\LoggerTrait;
    /**
     * @var string the Monolog channel to use
     */
    private string $channel;
    public function __construct(string $channel)
    {
    }
    /**
     * Used for translating PSR-3 LogLevels to the integer-based levels of Monolog.
     * There are constants for this in Monolog, but so far this would be the
     * only reason to actually depend on Monolog, so we just copied the values here
     */
    private const LEVELS = [\Syde\Vendor\Zettle\Psr\Log\LogLevel::EMERGENCY => 600, \Syde\Vendor\Zettle\Psr\Log\LogLevel::ALERT => 550, \Syde\Vendor\Zettle\Psr\Log\LogLevel::CRITICAL => 500, \Syde\Vendor\Zettle\Psr\Log\LogLevel::ERROR => 400, \Syde\Vendor\Zettle\Psr\Log\LogLevel::WARNING => 300, \Syde\Vendor\Zettle\Psr\Log\LogLevel::NOTICE => 250, \Syde\Vendor\Zettle\Psr\Log\LogLevel::INFO => 200, \Syde\Vendor\Zettle\Psr\Log\LogLevel::DEBUG => 100];
    /**
     * @param mixed $level
     * @param string $message
     * @param array $context
     * phpcs:disable SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint
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
 * @package Syde\PayPal\PointOfSale\Logging\Logger
 */
class WooCommerceLogger implements \Syde\Vendor\Zettle\Psr\Log\LoggerInterface
{
    use \Syde\Vendor\Zettle\Psr\Log\LoggerTrait;
    protected const LOG_LEVELS = [\Syde\Vendor\Zettle\Psr\Log\LogLevel::EMERGENCY, \Syde\Vendor\Zettle\Psr\Log\LogLevel::ALERT, \Syde\Vendor\Zettle\Psr\Log\LogLevel::CRITICAL, \Syde\Vendor\Zettle\Psr\Log\LogLevel::ERROR, \Syde\Vendor\Zettle\Psr\Log\LogLevel::WARNING, \Syde\Vendor\Zettle\Psr\Log\LogLevel::NOTICE, \Syde\Vendor\Zettle\Psr\Log\LogLevel::INFO, \Syde\Vendor\Zettle\Psr\Log\LogLevel::DEBUG];
    private \WC_Logger_Interface $wcLogger;
    public function __construct(\WC_Logger_Interface $wcLogger)
    {
    }
    /**
     * phpcs:disable SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Logging;

class ZettleLoggingModule implements \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ServiceModule
{
    use \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ModuleClassNameIdTrait;
    /**
     * @inheritDoc
     */
    public function services(): array
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Notices\Notice;

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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Notices\Notice\Admin;

class CompleteOnboardingNotice implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Notices\Notice\NoticeInterface
{
    /**
     * @var callable
     */
    private $isPluginsPageCallback;
    private string $settingsUrl;
    public function __construct(callable $isPluginsPageCallback, string $settingsUrl)
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
class GlobalConnectionFailedNotice implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Notices\Notice\NoticeInterface
{
    /**
     * @var callable
     */
    private $isIntegrationPageCallback;
    private bool $authFailed;
    private string $settingsUrl;
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
class IntegrationConnectionFailedNotice implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Notices\Notice\NoticeInterface
{
    /**
     * @var callable
     */
    private $isIntegrationPageCallback;
    /**
     * @var callable
     */
    private $authCheckCallback;
    private bool $isSavingSettings;
    private string $apiCreationLink;
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Notices\Notice;

class NoticeDelegator
{
    /**
     * @var NoticeInterface[]
     */
    private array $notices;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Notices\Notice\NoticeInterface ...$notices)
    {
    }
    public function delegate(string $currentState): void
    {
    }
    private function renderAdminNotice(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Notices\Notice\NoticeInterface $notice): void
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Notices;

class NoticesModule implements \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ServiceModule, \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ExecutableModule
{
    use \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ModuleClassNameIdTrait;
    /**
     * @inheritDoc
     */
    public function services(): array
    {
    }
    /**
     * @inheritDoc
     */
    public function run(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): bool
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Cli;

class ResetOnboardingCommand
{
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job $resetOnboardingJob;
    private bool $isMultisite;
    private int $currentSiteId;
    private \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger;
    /**
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job $resetOnboardingJob
     * @param bool $isMultisite
     * @param int $currentSiteId
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     */
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job $resetOnboardingJob, bool $isMultisite, int $currentSiteId, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger)
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
    public function complete(array $args, array $assocArgs): void
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
    public function site(array $args, array $assocArgs): void
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Comparison;

class StoreComparison
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\DataProvider\Store\StoreDataProvider $remoteStoreData;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\DataProvider\Store\StoreDataProvider $localStoreData;
    /**
     * VatCurrencyComparison constructor.
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\DataProvider\Store\StoreDataProvider $remoteStoreData
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\DataProvider\Store\StoreDataProvider $localStoreData
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\DataProvider\Store\StoreDataProvider $remoteStoreData, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\DataProvider\Store\StoreDataProvider $localStoreData)
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
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\DataProvider\Store\StoreDataProvider
     */
    public function remote(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\DataProvider\Store\StoreDataProvider
    {
    }
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\DataProvider\Store\StoreDataProvider
     */
    public function local(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\DataProvider\Store\StoreDataProvider
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Counter;

class ProductSyncJobsCounter
{
    /**
     * @var callable
     */
    private $productCollectorLocal;
    /**
     * @var string wipe or merge from sync collision strategy settings field
     */
    private string $syncCollisionStrategy;
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\DataProvider\Store;

interface StoreDataProvider
{
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat
     * @throws \Exception
     */
    public function vat(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat;
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
class WooCommerceStoreDataProvider implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\DataProvider\Store\StoreDataProvider
{
    private array $location;
    private array $standardTaxRates;
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
    public function vat(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat
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
class ZettleStoreDataProvider implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\DataProvider\Store\StoreDataProvider
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Provider\Organization\OrganizationProvider $provider;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Provider\Organization\OrganizationProvider $provider)
    {
    }
    /**
     * @inheritDoc
     */
    public function vat(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat
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
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    private function organization(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    public function taxRates(): array
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Event;

class AuthCheck extends \Syde\Vendor\Zettle\Inpsyde\StateMachine\Event\GenericStateChange
{
}
class AuthFailed extends \Syde\Vendor\Zettle\Inpsyde\StateMachine\Event\GenericStateChange
{
}
class BackButtonPressed extends \Syde\Vendor\Zettle\Inpsyde\StateMachine\Event\WebRequest
{
}
class CancelButtonPressed extends \Syde\Vendor\Zettle\Inpsyde\StateMachine\Event\WebRequest
{
}
class DeleteButtonPressed extends \Syde\Vendor\Zettle\Inpsyde\StateMachine\Event\WebRequest
{
}
class ProceedButtonPressed extends \Syde\Vendor\Zettle\Inpsyde\StateMachine\Event\WebRequest
{
}
class UnhandledError extends \Syde\Vendor\Zettle\Inpsyde\StateMachine\Event\GenericStateChange
{
    private \Throwable $exception;
    public function __construct(\Throwable $exception)
    {
    }
    public function getException(): \Throwable
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Job;

class ResetOnboardingJob implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job
{
    public const TYPE = 'reset-onboarding';
    private \wpdb $database;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Container\ClearableContainerInterface $optionContainer;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Container\ClearableContainerInterface $setupInfoContainer;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\TokenPersistorInterface $tokenStorage;
    private array $tables;
    /**
     * @var string[]
     */
    private array $transients;
    /**
     * @var string[]
     */
    private array $options;
    /**
     * @var callable
     */
    private $deleteWebhooks;
    public function __construct(\wpdb $database, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Container\ClearableContainerInterface $optionContainer, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Container\ClearableContainerInterface $setupInfoContainer, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Auth\OAuth\TokenPersistorInterface $tokenStorage, array $tables, array $transients, array $options, callable $deleteWebhooks)
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
    public function execute(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     *
     * @param string $prefix
     * @return bool
     */
    private function resetOnboarding(\Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger, string $prefix): bool
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Listener;

class UnhandledErrorListener
{
    private \Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface $stateMachine;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Http\PageReloaderInterface $pageReloader;
    private bool $isDebugMode;
    /**
     * @param \Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface $stateMachine
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Http\PageReloaderInterface $pageReloader
     * @param bool $isDebugMode
     */
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface $stateMachine, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Http\PageReloaderInterface $pageReloader, bool $isDebugMode)
    {
    }
    /**
     * @param \Throwable $error
     * @throws \Syde\Vendor\Zettle\Inpsyde\StateMachine\Exceptions\DenyTransitionException
     * @throws \Throwable if in debug mode
     */
    public function __invoke(\Throwable $error): void
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding;

class OnboardingModule implements \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ServiceModule, \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ExtendingModule, \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ExecutableModule
{
    use \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ModuleClassNameIdTrait;
    public function services(): array
    {
    }
    public function extensions(): array
    {
    }
    /**
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    public function run(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): bool
    {
    }
}
interface OnboardingState
{
    public const WELCOME = 'welcome';
    public const API_CREDENTIALS = 'api-credentials';
    public const INVALID_CREDENTIALS = 'invalid-credentials';
    public const SYNC_PARAM_PRODUCTS = 'sync-param-products';
    public const SYNC_PARAM_VAT = 'sync-parameters-vat';
    public const SYNC_PROGRESS = 'sync-progress';
    public const SYNC_FINISHED = 'sync-finished';
    public const ONBOARDING_COMPLETED = 'onboarding-completed';
    public const UNHANDLED_ERROR = 'unhandled-error';
}
interface OnboardingTransition
{
    public const TO_WELCOME = 'to-welcome';
    public const TO_API_CREDENTIALS = 'to-api-credentials';
    public const TO_APP_CREDENTIALS = 'to-app-credentials';
    public const TO_USER_CREDENTIALS = 'to-user-credentials';
    public const TO_INVALID_CREDENTIALS = 'to-invalid-credentials';
    public const TO_SYNC_PARAM_PRODUCTS = 'to-sync-param-products';
    public const TO_SYNC_PARAM_VAT = 'to-sync-param-vat';
    public const TO_SYNC_PROGRESS = 'to-sync-progress';
    public const TO_SYNC_FINISHED = 'to-sync-finished';
    public const TO_ONBOARDING_COMPLETED = 'to-onboarding-completed';
    public const TO_UNHANDLED_ERROR = 'to-unhandled-error';
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale;

/**
 * Interface for bootable Provider
 */
interface Provider
{
    /**
     * @param \Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container
     *
     * @return bool
     */
    public function boot(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): bool;
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Provider;

class ErrorListenerProvider implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Provider
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Listener\UnhandledErrorListener $unhandledErrorListener;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Listener\UnhandledErrorListener $unhandledErrorListener)
    {
    }
    /**
     * @inheritDoc
     */
    public function boot(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): bool
    {
    }
}
class OnboardingRenderProvider implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Provider
{
    private \Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface $stateMachine;
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface $stateMachine)
    {
    }
    /**
     * @inheritDoc
     */
    public function boot(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): bool
    {
    }
}
class ResetCommandProvider implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Provider
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Cli\ResetOnboardingCommand $resetOnboardingCommand;
    /**
     * CliCommandProvider constructor.
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Cli\ResetOnboardingCommand $resetOnboardingCommand
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Cli\ResetOnboardingCommand $resetOnboardingCommand)
    {
    }
    /**
     * @inheritDoc
     */
    public function boot(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): bool
    {
    }
}
class StateMachineProvider implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Provider
{
    private \Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface $stateMachine;
    /**
     * StateMachineProvider constructor.
     *
     * @param \Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface $stateMachine
     */
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\StateMachine\StateMachineInterface $stateMachine)
    {
    }
    /**
     * @inheritDoc
     */
    public function boot(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): bool
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding;

class RequestDataFilter
{
    private array $requestData;
    public function __construct(array $requestData)
    {
    }
    public function guard(mixed ...$things): bool
    {
    }
    private function guardField(mixed $thing): bool
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Rest;

interface EndpointInterface
{
    public function methods(): string;
    public function version(): string;
    public function route(): string;
    public function permissionCallback(): bool;
    public function args(): array;
    public function handleRequest(\WP_REST_Request $request): \WP_REST_Response;
}
class DisconnectEndpoint implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Rest\EndpointInterface
{
    protected \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job $onboardingResetJob;
    protected \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger;
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job $onboardingResetJob, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger)
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings;

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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Settings\FieldRenderer;

interface FieldRendererInterface
{
    public function accepts(string $fieldId, array $fieldConfig, \WC_Settings_API $settingsApi): bool;
    public function render(string $fieldId, array $fieldConfig, \WC_Settings_API $settingsApi): string;
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\FieldRenderer;

class HiddenFieldRenderer implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Settings\FieldRenderer\FieldRendererInterface
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
 * @package Syde\PayPal\PointOfSale\Onboarding\Settings
 */
class OnboardingFieldRenderer implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Settings\FieldRenderer\FieldRendererInterface
{
    private string $currentState;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View\OnboardingView $view;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\OnboardingStepper $stepper;
    public function __construct(string $currentState, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View\OnboardingView $view, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\OnboardingStepper $stepper)
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
     * phpcs:disable Syde.Functions.FunctionLength.TooLong
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
class RemovedFieldRenderer implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Settings\FieldRenderer\FieldRendererInterface
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
class WriteOnlyPasswordFieldRenderer implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Settings\FieldRenderer\FieldRendererInterface
{
    public const DEFAULT_PLACEHOLDER = '**********';
    protected string $placeholder;
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\Filter;

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
class GenericSettingsValueFilter implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\Filter\SettingsValueFilter
{
    protected string $key;
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
class OnboardingProcessFilter implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\Filter\SettingsFilter
{
    /** @var array<string> */
    private array $knownStates = [\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\OnboardingState::WELCOME, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\OnboardingState::API_CREDENTIALS, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\OnboardingState::INVALID_CREDENTIALS, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\OnboardingState::SYNC_PARAM_PRODUCTS, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\OnboardingState::SYNC_PARAM_VAT, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\OnboardingState::SYNC_PROGRESS, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\OnboardingState::SYNC_FINISHED, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\OnboardingState::ONBOARDING_COMPLETED, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\OnboardingState::UNHANDLED_ERROR];
    /** @var array<string, array<string>> */
    private array $disabled = [\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\OnboardingState::API_CREDENTIALS => ['api_key'], \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\OnboardingState::INVALID_CREDENTIALS => [], \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\OnboardingState::SYNC_PARAM_PRODUCTS => ['sync_collision_strategy'], \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\OnboardingState::SYNC_PARAM_VAT => ['sync_price_strategy']];
    /**
     * Needed for IZET-273 fix (old settings were re-submitted)
     * @var string[]
     */
    private array $settingsResetStates = [\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\OnboardingState::WELCOME];
    /** @var array<string> */
    private array $authFieldKeys = ['authentication', 'api_key'];
    private string $currentState;
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
    private function getWhitelist(): array
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings;

class OnboardingStepper
{
    private array $states;
    private string $currentStep;
    private array $exclude;
    private string $stepLabel;
    private string $stepsTemplate;
    private array $steppableMap;
    private int $currentPosition;
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View;

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
     * @param array{kind?: string, disabled?: bool, hidden?: bool, type?: string, value?: string, attributes?: array<string, string>} $params
     *     The array with additional parameters.
     *     'kind' - button type/CSS class from ButtonKind, if omitted - using default based on the action.
     *     'disabled' - true/false, whether to add `disabled` attribute (default false).
     *     'hidden' - true/false, whether to make it hidden (default false).
     *     'type' - HTML button type (default submit).
     *     'value' - HTML button value (default "Save changes").
     *     'attributes' - additional HTML attributes, such as data-*.
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
class SettingsFieldView implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View\OnboardingView
{
    use \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View\ButtonRendererTrait;
    protected \WC_Settings_API $settingsApi;
    protected string $title;
    protected string $content;
    protected array $fields;
    protected string $notice;
    protected array $allowedFieldTags;
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
class ApiCredentialsView extends \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View\SettingsFieldView implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View\OnboardingView
{
    private array $apiKeyCreationLink;
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
class ContainerAwareView implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View\OnboardingView
{
    private \Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container;
    private ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View\OnboardingView $view = null;
    public function __construct(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container)
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
     * phpcs:disable Syde.Functions.FunctionLength.TooLong
     * phpcs:disable Generic.Metrics.CyclomaticComplexity.TooHigh
     */
    private function view(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View\OnboardingView
    {
    }
}
class OnboardingCompletedView implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View\OnboardingView
{
    use \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View\ButtonRendererTrait;
    private array $zettleProductsLink;
    private array $settingsLink;
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
class ProductSyncParamView implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View\OnboardingView
{
    use \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View\ButtonRendererTrait;
    /**
     * @var callable
     */
    private $zettleProductsCountQuery;
    private ?int $zettleProductsCount = null;
    /**
     * @var callable
     */
    private $totalWcProductsCountQuery;
    private ?int $totalWcProductsCount = null;
    /**
     * @var callable
     */
    private $supportedWcProductsCountQuery;
    private ?int $supportedWcProductsCount = null;
    private array $documentationLink;
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
class SimpleView implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View\OnboardingView
{
    use \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View\ButtonRendererTrait;
    private string $title;
    private string $content;
    private string $proceedButtonHtml = '';
    private string $backButtonHtml = '';
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
    public function withProceedButton(?string $label = null): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View\SimpleView
    {
    }
    /**
     * @param string|null $label The button text, or null to use default text.
     * @return SimpleView
     */
    public function withBackButton(?string $label = null): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View\SimpleView
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
class SyncFinishedView implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View\OnboardingView
{
    use \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View\ButtonRendererTrait;
    private array $zettleProductsLink;
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
class SyncProgressView implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View\OnboardingView
{
    use \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View\ButtonRendererTrait;
    /**
     * @var callable
     */
    private $totalWcProductsCountQuery;
    private ?int $totalWcProductsCount = null;
    /**
     * @var callable
     */
    private $supportedWcProductsCountQuery;
    private ?int $supportedWcProductsCount = null;
    private string $pluginTitle;
    /**
     * SyncProgressView constructor.
     *
     * @param callable $supportedWcProductsCountQuery
     * @param callable $totalWcProductsCountQuery
     */
    public function __construct(callable $supportedWcProductsCountQuery, callable $totalWcProductsCountQuery, string $pluginTitle)
    {
    }
    /**
     * @return string
     * phpcs:disable Syde.Functions.FunctionLength.TooLong
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
class SyncVatParamView implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View\OnboardingView
{
    use \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View\ButtonRendererTrait;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Comparison\StoreComparison $storeComparison;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\DataProvider\Store\StoreDataProvider $remoteStoreData;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\DataProvider\Store\StoreDataProvider $localStoreData;
    /**
     * @var \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Tax\TaxRate[]|null
     */
    private ?array $defaultTaxRates = null;
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Tax\TaxRate[]|null $defaultTaxRates
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Comparison\StoreComparison $storeComparison, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\DataProvider\Store\StoreDataProvider $remoteStoreData, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\DataProvider\Store\StoreDataProvider $localStoreData, ?array $defaultTaxRates)
    {
    }
    /**
     * @inheritDoc
     *
     * phpcs:disable SlevomatCodingStandard.Complexity.Cognitive.ComplexityTooHigh
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
class UnhandledErrorView implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View\OnboardingView
{
    use \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View\ButtonRendererTrait;
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
class WelcomeView implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View\OnboardingView
{
    protected array $zettleLink;
    protected string $imgResourcesUrl;
    public function __construct(array $zettleLink, string $imgResourcesUrl)
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings;

/**
 * Checks whether the value from WriteOnlyPasswordFieldRenderer is filled (not empty and does not contain placeholder).
 */
class WriteOnlyPasswordFieldChecker
{
    protected string $placeholderChar;
    protected int $maxPlaceholderLength;
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding;

interface SyncCollisionStrategy
{
    public const WIPE = 'wipe';
    public const MERGE = 'merge';
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Image;

class Images
{
    private \Syde\Vendor\Zettle\Psr\Http\Message\UriInterface $uri;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\RestClientInterface $restClient;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Image\ImageFormatRetrieverInterface $imageFormatRetriever;
    private \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger;
    public function __construct(\Syde\Vendor\Zettle\Psr\Http\Message\UriInterface $uri, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\RestClientInterface $restClient, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Image\ImageFormatRetrieverInterface $imageFormatRetriever, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger)
    {
    }
    /**
     * @param string $imageUrl
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageInterface
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException|\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\BuilderException
     * @throws \UnexpectedValueException Invalid URL given.
     */
    public function create(string $imageUrl): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageInterface
    {
    }
    /**
     * @param array $imageUrls
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageCollection
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException|\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\BuilderException
     * @throws \UnexpectedValueException Invalid URL given.
     */
    public function bulkCreate(array $imageUrls): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageCollection
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Inventory;

class Inventory
{
    private \Syde\Vendor\Zettle\Psr\Http\Message\UriInterface $uri;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\RestClientInterface $restClient;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Inventory\Locations $locationsClient;
    /**
     * @var \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Location\Location[]
     */
    private array $locations = [];
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder;
    private string $integrationUuid;
    public function __construct(\Syde\Vendor\Zettle\Psr\Http\Message\UriInterface $uri, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\RestClientInterface $restClient, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Inventory\Locations $locationsClient, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder, string $integrationUuid)
    {
    }
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Location\Location[]
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    private function locations(): array
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Inventory\Transaction ...$transactions
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    public function performTransactions(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Inventory\Transaction ...$transactions): void
    {
    }
    /**
     * @param string $productUuid
     * @param string $variantUuid
     * @param int $change
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
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
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    public function moveStock(string $productUuid, string $variantUuid, string $from, string $to, int $change): void
    {
    }
    /**
     * @param string $productUuid
     * @param string $variantUuid
     * @param int $change
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    public function supply(string $productUuid, string $variantUuid, int $change): void
    {
    }
    /**
     * @param string $productUuid
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    public function startTracking(string $productUuid): void
    {
    }
    /**
     * @param string $productUuid
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    public function stopTracking(string $productUuid): void
    {
    }
    /**
     * @param string $productUuid
     * @param bool $enable
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    private function setTracking(string $productUuid, bool $enable): void
    {
    }
    /**
     * @param string $productUuid
     * @param string $locationType
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Inventory\Inventory
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    public function productInventory(string $productUuid, string $locationType): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Inventory\Inventory
    {
    }
}
class Locations
{
    private \Syde\Vendor\Zettle\Psr\Http\Message\UriInterface $uri;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\RestClientInterface $restClient;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder;
    public function __construct(\Syde\Vendor\Zettle\Psr\Http\Message\UriInterface $uri, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\RestClientInterface $restClient, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder)
    {
    }
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Location\Location[]
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    public function all(): array
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Listener;

/**
 * Interface ApiRestListener
 *
 * Used to scope API Rest Client Listener that will be enqueued after a request to the API
 *
 * @package Syde\PayPal\PointOfSale\PhpSdk\API\Listener
 */
interface ApiRestListener
{
    public const CREATE = 'create';
    public const READ = 'read';
    public const UPDATE = 'update';
    public const DELETE = 'delete';
    public function accepts(string $operation, mixed $payload, bool $success): bool;
    public function execute(mixed $payload): bool;
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Listener\Products;

/**
 * Class OnSuccessDeleteProductsListener
 *
 * If we have a successfully response from Zettle with the Product API Client
 * and a Delete operation this will be executed
 *
 * We just unlink the Product locally and also unlink the Product Images with the unlink images job
 *
 * @package Syde\PayPal\PointOfSale\PhpSdk\API\Listener\Products
 */
class OnSuccessDeleteProductsListener implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Listener\ApiRestListener
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\Zettle\Product\ProductRepositoryInterface $repository;
    /**
     * @var callable
     */
    private $createJob;
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $jobRepository;
    protected \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger;
    /**
     * DeleteProductListener constructor.
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\Zettle\Product\ProductRepositoryInterface $repository
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $jobRepository
     * @param callable $createJob
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\Zettle\Product\ProductRepositoryInterface $repository, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $jobRepository, callable $createJob, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger)
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\OAuth;

class Organizations
{
    private \Syde\Vendor\Zettle\Psr\Http\Message\UriInterface $uri;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\RestClientInterface $restClient;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder;
    /**
     * Organizations constructor.
     *
     * @param \Syde\Vendor\Zettle\Psr\Http\Message\UriInterface $uri
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\RestClientInterface $restClient
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder
     */
    public function __construct(\Syde\Vendor\Zettle\Psr\Http\Message\UriInterface $uri, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\RestClientInterface $restClient, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder)
    {
    }
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    public function account(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
}
class Users
{
    private \Syde\Vendor\Zettle\Psr\Http\Message\UriInterface $uri;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\RestClientInterface $restClient;
    public function __construct(\Syde\Vendor\Zettle\Psr\Http\Message\UriInterface $uri, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\RestClientInterface $restClient)
    {
    }
    /**
     * @return array
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    public function me(): array
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Products;

/**
 * Class Products
 *
 * Provides abstractions for the 'products' resource of the Zettle Api
 *
 * @see https://products.izettle.com/swagger#/products
 *
 * @package Syde\PayPal\PointOfSale\PhpSdk\API\Products
 */
class Products
{
    private \Syde\Vendor\Zettle\Psr\Http\Message\UriInterface $uri;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\RestClientInterface $restClient;
    /**
     * @var callable[]
     */
    private array $listeners;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Serializer\SerializerInterface $serializer;
    /**
     * Products constructor.
     *
     * @param \Syde\Vendor\Zettle\Psr\Http\Message\UriInterface $uri
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\RestClientInterface $restClient
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Serializer\SerializerInterface $serializer
     * @param callable ...$listeners
     */
    public function __construct(\Syde\Vendor\Zettle\Psr\Http\Message\UriInterface $uri, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\RestClientInterface $restClient, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Serializer\SerializerInterface $serializer, callable ...$listeners)
    {
    }
    /**
     * @param bool $withListeners
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductCollection
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    public function list(bool $withListeners = \true): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductCollection
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface $product
     * @param bool $withListeners
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\Product
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    public function create(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface $product, bool $withListeners = \true): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface
    {
    }
    /**
     * @param string $uuid
     * @param bool $withListeners
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    public function read(string $uuid, bool $withListeners = \true): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface
    {
    }
    /**
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    public function update(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\WritableProductInterface $product, bool $withListeners = \true): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface
    {
    }
    /**
     * @param string $uuid
     * @param bool $withListeners
     *
     * @return bool
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    public function delete(string $uuid, bool $withListeners = \true): bool
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface[] $products
     * @param bool $withListeners
     *
     * @return bool
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     *
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    public function deleteBulk(array $products, bool $withListeners = \true): bool
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Taxes;

class Taxes
{
    private \Syde\Vendor\Zettle\Psr\Http\Message\UriInterface $baseUri;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\RestClientInterface $restClient;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder;
    public function __construct(\Syde\Vendor\Zettle\Psr\Http\Message\UriInterface $baseUri, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\RestClientInterface $restClient, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder)
    {
    }
    public function all(): array
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity;

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
    public function fromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Payload;
}
interface Webhook
{
    public function uuid(): string;
    public function contactEmail(): string;
    public function destination(): \Syde\Vendor\Zettle\Psr\Http\Message\UriInterface;
    public function eventNames(): array;
    /**
     * @param array $eventNames
     */
    public function changeEventNames(array $eventNames): void;
}
interface RegisteredWebhook extends \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Webhook
{
    public function status(): string;
    public function signingKey(): string;
}
class ZettleWebhook implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Webhook
{
    public const TRANSPORT_NAME = 'WEBHOOK';
    private string $uuid;
    private array $eventNames;
    private \Syde\Vendor\Zettle\Psr\Http\Message\UriInterface $destination;
    private string $contactEmail;
    public function __construct(string $uuid, array $eventNames, \Syde\Vendor\Zettle\Psr\Http\Message\UriInterface $destination, string $contactEmail)
    {
    }
    public function uuid(): string
    {
    }
    public function contactEmail(): string
    {
    }
    public function destination(): \Syde\Vendor\Zettle\Psr\Http\Message\UriInterface
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
class RegisteredZettleWebhook extends \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\ZettleWebhook implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\RegisteredWebhook
{
    private string $status;
    private string $signingKey;
    public function __construct(string $uuid, array $eventNames, \Syde\Vendor\Zettle\Psr\Http\Message\UriInterface $destination, string $contactEmail, string $status, string $signingKey)
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
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\WebhookException
     */
    public function fromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Webhook;
}
interface WebhookStatus
{
    public const ACTIVE = 'ACTIVE';
}
class ZettlePayload implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Payload
{
    private string $eventName;
    private string $organizationUuid;
    private string $messageUuid;
    private array $payload;
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
class ZettlePayloadFactory implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\PayloadFactory
{
    public function fromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Payload
    {
    }
}
class ZettleWebhookFactory implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\WebhookFactory
{
    public function fromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Webhook
    {
    }
    private function createInstance(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Webhook
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks;

class Subscriptions
{
    private \Syde\Vendor\Zettle\Psr\Http\Message\UriInterface $uri;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\RestClientInterface $restClient;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\WebhookFactory $webhookFactory;
    public function __construct(\Syde\Vendor\Zettle\Psr\Http\Message\UriInterface $uri, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\RestClientInterface $restClient, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\WebhookFactory $webhookFactory)
    {
    }
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Webhook[]
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\WebhookException|\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    public function list(): array
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Webhook $webhook
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Webhook
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\WebhookException|\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    public function create(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Webhook $webhook): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Webhook
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Webhook $webhook
     *
     * @return void
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    public function update(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Webhook $webhook): void
    {
    }
    /**
     * @param string $uuid
     *
     * @return void
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    public function delete(string $uuid): void
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk;

class Bootstrap
{
    /** @var array<\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DB\Table> */
    private array $tables;
    /**
     * Bootstrap constructor.
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DB\Table ...$tables
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DB\Table ...$tables)
    {
    }
    public function activate(): void
    {
    }
    /**
     * @param \wpdb $wpdb
     */
    private function createTables(\wpdb $wpdb): void
    {
    }
    /**
     * phpcs:disable WordPress.DB.PreparedSQL.InterpolatedNotPrepared
     */
    public function deactivate(): void
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder;

interface BuilderInterface
{
    /**
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\BuilderException
     */
    public function build(string $className, mixed $payload, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder = null): mixed;
}
interface TypeSpecificBuilderInterface extends \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface
{
    public function accepts(mixed $payload): bool;
}
/**
 * Class ArrayBuilder
 * Decorates another Builder, but registers it only for arrays
 *
 * @package Syde\PayPal\PointOfSale\PhpSdk\Builder
 */
class ArrayBuilder implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\TypeSpecificBuilderInterface
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder)
    {
    }
    public function build(string $className, mixed $payload, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder = null): mixed
    {
    }
    public function accepts(mixed $payload): bool
    {
    }
}
trait AttributeFormatterTrait
{
    /**
     * @param \WC_Product_Attribute|string $attribute
     *
     * @return string
     * phpcs:disable SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint
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
class AttributeSetBuilder implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface
{
    use \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\AttributeFormatterTrait;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository)
    {
    }
    public function build(string $className, mixed $payload, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder = null): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\AttributeSet
    {
    }
    /**
     * @param \WC_Product_Variable $wcProduct
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\AttributeSet $attributeSet
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\AttributeSet
     */
    public function processVariable(\WC_Product_Variable $wcProduct, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\AttributeSet $attributeSet): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\AttributeSet
    {
    }
    /**
     * @param \WC_Product_Variation $variation Variation to generate Attributes from
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\AttributeSet $attributeSet Current AttributeSet Instance -
     *                                              No Reference Operator, because of type-hint
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\AttributeSet                         Return Updated AttributeSet
     *
     * phpcs:disable Syde.Functions.FunctionLength.TooLong
     * phpcs:disable Generic.Metrics.NestingLevel.MaxExceeded
     * phpcs:disable Generic.Metrics.CyclomaticComplexity.TooHigh
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    public function processVariation(\WC_Product_Variation $variation, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\AttributeSet $attributeSet): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\AttributeSet
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
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\AttributeSet $attributeSet
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\AttributeSet
     */
    public function processSimple(\WC_Product $product, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\AttributeSet $attributeSet): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\AttributeSet
    {
    }
}
class CallbackBuilder implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface
{
    /**
     * @var callable
     */
    private $callback;
    public function __construct(callable $callback)
    {
    }
    public function build(string $className, mixed $payload, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder = null): mixed
    {
    }
}
class ContainerAwareBuilder implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface
{
    private \Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container;
    public function __construct(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container)
    {
    }
    public function build(string $className, mixed $payload, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder = null): mixed
    {
    }
}
/**
 * Class FilterableBuilder
 * Decorates another Builder and runs its result through a Filter
 *
 * @package Syde\PayPal\PointOfSale\PhpSdk\Builder
 */
class FilterableBuilder implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Filter\FilterInterface $filter;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Filter\FilterInterface $filter)
    {
    }
    public function build(string $className, mixed $payload, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder = null): mixed
    {
    }
}
class ImageBuilder implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface
{
    public function build(string $className, mixed $payload, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder = null): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageInterface
    {
    }
    private function findLookupKey(array $payload): string
    {
    }
    /**
     * @param string $url
     *
     * @return string
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\Validator\Image\UnexpectedImageUrlException
     */
    private function lookupKeyFromZettleUrl(string $url): string
    {
    }
}
class PriceBuilder implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface
{
    private \Syde\Vendor\Zettle\Psr\Container\ContainerInterface $wooCommerceConfig;
    private string $taxationMode;
    public function __construct(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $wooCommerceConfig, string $taxationMode)
    {
    }
    public function build(string $className, mixed $payload, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder = null): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price\Price
    {
    }
}
class TypeDelegatingBuilder implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface
{
    /**
     * @var TypeSpecificBuilderInterface[]
     */
    private array $builders;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\TypeSpecificBuilderInterface ...$builders)
    {
    }
    /**
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\BuilderException
     */
    public function build(string $className, mixed $payload, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder = null): mixed
    {
    }
    private function inferType(mixed $payload): string
    {
    }
}
/**
 * Class ValidatableBuilder
 * Decorated another Builder and validates its result
 *
 * @package Syde\PayPal\PointOfSale\PhpSdk\Builder
 */
class ValidatableBuilder implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Validator\ValidatorInterface $validator;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Validator\ValidatorInterface $validator)
    {
    }
    public function build(string $className, mixed $payload, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder = null): mixed
    {
    }
}
class VariantBuilder implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface
{
    /**
     * @var callable
     */
    private $onException;
    private string $taxationType;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Barcode\Repository\BarcodeRetrieverInterface $barcodeRetriever;
    private bool $priceSyncEnabled;
    public function __construct(callable $onException, string $taxationType, bool $priceSyncEnabled, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Barcode\Repository\BarcodeRetrieverInterface $barcodeRetriever)
    {
    }
    /**
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\BuilderException
     */
    public function build(string $className, mixed $wcProduct, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder = null): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantInterface
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
class VariantOptionCollectionBuilder implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface
{
    public function build(string $className, mixed $payload, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder = null): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection
    {
    }
    private function setToCollection(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\AttributeSet $set, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection
    {
    }
}
class VariantOptionDefinitionsBuilder implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface
{
    public function build(string $className, mixed $payload, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder = null): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionDefinitions
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\AttributeSet $set
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionDefinitions
     */
    private function setToDefinitions(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\AttributeSet $set): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionDefinitions
    {
    }
}
/**
 * Class WooCommerceBuilder
 * Decorates another builder, but registers if only for WooCommerce types
 * @package Syde\PayPal\PointOfSale\PhpSdk\Builder
 */
class WooCommerceBuilder implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\TypeSpecificBuilderInterface
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder)
    {
    }
    public function build(string $className, mixed $payload, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder = null): mixed
    {
    }
    public function accepts(mixed $payload): bool
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Config;

class WooCommerceConfigContainer implements \Syde\Vendor\Zettle\Psr\Container\ContainerInterface
{
    /**
     * @param string $id
     *
     * @return mixed|void
     *
     * @throws \RuntimeException
     */
    public function get(string $id)
    {
    }
    /**
     * @param string $id
     *
     * @return bool
     */
    public function has(string $id): bool
    {
    }
    private function key(string $id): string
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder;

abstract class AbstractBuilder
{
    /**
     * @param string $key
     * @param array $data
     * @return mixed|null
     */
    // phpcs:disable Syde.Functions.ReturnTypeDeclaration.NoReturnType
    protected function getDataFromKey(string $key, array $data)
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Balance;

interface BalanceBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\Balance
     */
    public function buildFromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\Balance;
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\Balance $balance
     *
     * @return array
     */
    public function createDataArray(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\Balance $balance): array;
}
class BalanceBuilder implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Balance\BalanceBuilderInterface
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\BalanceFactory $balanceFactory;
    /**
     * BalanceBuilder constructor.
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\BalanceFactory $balanceFactory
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\BalanceFactory $balanceFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\Balance
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\Balance $balance): array
    {
    }
    /**
     * @param array $data
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\Balance
     */
    private function build(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\Balance
    {
    }
}
interface LocationBalanceBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalance
     */
    public function buildFromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalance;
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalance $locationBalance
     * @return array
     */
    public function createDataArray(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalance $locationBalance): array;
}
class LocationBalanceBuilder implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Balance\LocationBalanceBuilderInterface
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalanceFactory $locationBalanceFactory;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalanceFactory $locationBalanceFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalance
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalance $locationBalance): array
    {
    }
    /**
     * @param array $data
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalance
     */
    private function build(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalance
    {
    }
}
interface LocationBalanceCollectionBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection
     */
    public function buildFromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection;
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection $locationBalanceCollection
     *
     * @return array
     */
    public function createDataArray(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection $locationBalanceCollection): array;
}
class LocationBalanceCollectionBuilder implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Balance\LocationBalanceCollectionBuilderInterface
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalanceCollectionFactory $locationBalanceCollectionFactory;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Balance\LocationBalanceBuilderInterface $locationBalanceBuilder;
    /**
     * LocationBalanceCollectionBuilder constructor.
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalanceCollectionFactory $locationBalanceCollectionFactory
     * @param LocationBalanceBuilderInterface $locationBalanceBuilder
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalanceCollectionFactory $locationBalanceCollectionFactory, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Balance\LocationBalanceBuilderInterface $locationBalanceBuilder)
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection $locationBalanceCollection): array
    {
    }
}
interface ProductBalanceBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\ProductBalance
     */
    public function buildFromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\ProductBalance;
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\ProductBalance $productBalance
     *
     * @return array
     */
    public function createDataArray(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\ProductBalance $productBalance): array;
}
class ProductBalanceBuilder implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Balance\ProductBalanceBuilderInterface
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\ProductBalanceFactory $productBalanceFactory;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Balance\LocationBalanceCollectionBuilderInterface $locationBalanceCollectionBuilder;
    /**
     * ProductBalanceBuilder constructor.
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\ProductBalanceFactory $productBalanceFactory
     * @param LocationBalanceCollectionBuilderInterface $locationBalanceCollectionBuilder
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\ProductBalanceFactory $productBalanceFactory, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Balance\LocationBalanceCollectionBuilderInterface $locationBalanceCollectionBuilder)
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\ProductBalance
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\ProductBalance $productBalance): array
    {
    }
    /**
     * @param array $data
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\ProductBalance
     */
    private function build(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\ProductBalance
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder;

interface BuilderInterface
{
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Coordinates;

interface CoordinatesBuilderInterface extends \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\BuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Coordinates\Coordinates
     */
    public function buildFromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Coordinates\Coordinates;
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Coordinates\Coordinates $coordinates
     *
     * @return array
     */
    public function createDataArray(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Coordinates\Coordinates $coordinates): array;
}
final class CoordinatesBuilder implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Coordinates\CoordinatesBuilderInterface
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Coordinates\CoordinatesFactory $coordinatesFactory;
    /**
     * CoordinatesBuilder constructor.
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Coordinates\CoordinatesFactory $coordinatesFactory
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Coordinates\CoordinatesFactory $coordinatesFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Coordinates\Coordinates
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Coordinates\Coordinates $coordinates): array
    {
    }
    /**
     * @param array $data
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Coordinates\Coordinates
     */
    private function build(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Coordinates\Coordinates
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Finance;

interface AccountTransactionBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\AccountTransaction
     */
    public function buildFromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\AccountTransaction;
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\AccountTransaction $accountTransaction
     *
     * @return array
     */
    public function createDataArray(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\AccountTransaction $accountTransaction): array;
}
class AccountTransactionBuilder implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Finance\AccountTransactionBuilderInterface
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\AccountTransactionFactory $accountTransactionFactory;
    /**
     * AccountTransactionBuilder constructor.
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\AccountTransactionFactory $accountTransactionFactory
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\AccountTransactionFactory $accountTransactionFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\AccountTransaction
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\AccountTransaction $accountTransaction): array
    {
    }
    /**
     * @param array $data
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\AccountTransaction
     */
    private function build(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\AccountTransaction
    {
    }
}
interface BalanceInfoBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\BalanceInfo
     */
    public function buildFromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\BalanceInfo;
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\BalanceInfo $balanceInfo
     *
     * @return array
     */
    public function createDataArray(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\BalanceInfo $balanceInfo): array;
}
class BalanceInfoBuilder implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Finance\BalanceInfoBuilderInterface
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\BalanceInfoFactory $balanceInfoFactory;
    /**
     * BalanceInfoBuilder constructor.
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\BalanceInfoFactory $balanceInfoFactory
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\BalanceInfoFactory $balanceInfoFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\BalanceInfo
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\BalanceInfo $balanceInfo): array
    {
    }
    /**
     * @param array $data
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\BalanceInfo
     */
    private function build(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\BalanceInfo
    {
    }
}
interface PayoutInfoBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\PayoutInfo
     */
    public function buildFromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\PayoutInfo;
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\PayoutInfo $payoutInfo
     *
     * @return array
     */
    public function createDataArray(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\PayoutInfo $payoutInfo): array;
}
class PayoutInfoBuilder implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Finance\PayoutInfoBuilderInterface
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\PayoutInfoFactory $payoutInfoFactory;
    /**
     * PayoutInfoBuilder constructor.
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\PayoutInfoFactory $payoutInfoFactory
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\PayoutInfoFactory $payoutInfoFactory)
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\PayoutInfo
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\PayoutInfo $payoutInfo): array
    {
    }
    /**
     * @param array $data
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\PayoutInfo
     */
    private function build(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\PayoutInfo
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Purchase;

interface PurchaseBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\Purchase
     */
    public function buildFromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\Purchase;
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\Purchase $purchase
     * @return array
     */
    public function createDataArray(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\Purchase $purchase): array;
}
class PurchaseBuilder implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Purchase\PurchaseBuilderInterface
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseFactory $purchaseFactory;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\User\UserBuilderInterface $userBuilder;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Coordinates\CoordinatesBuilderInterface $coordinatesBuilder;
    /**
     * PurchaseBuilder constructor.
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseFactory $purchaseFactory
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\User\UserBuilderInterface $userBuilder
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Coordinates\CoordinatesBuilderInterface $coordinatesBuilder
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseFactory $purchaseFactory, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\User\UserBuilderInterface $userBuilder, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Coordinates\CoordinatesBuilderInterface $coordinatesBuilder)
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\Purchase
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\Purchase $purchase): array
    {
    }
    /**
     * @param array $data
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\Purchase
     *
     * @throws \Exception
     */
    private function build(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\Purchase
    {
    }
}
interface PurchaseCollectionBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseCollection
     */
    public function buildFromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseCollection;
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseCollection $purchaseCollection
     *
     * @return array
     */
    public function createDataArray(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseCollection $purchaseCollection): array;
}
class PurchaseCollectionBuilder implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Purchase\PurchaseCollectionBuilderInterface
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseCollectionFactory $purchaseCollectionFactory;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Purchase\PurchaseBuilderInterface $purchaseBuilder;
    /**
     * PurchaseCollectionBuilder constructor.
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseCollectionFactory $purchaseCollectionFactory
     * @param PurchaseBuilderInterface $purchaseBuilder
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseCollectionFactory $purchaseCollectionFactory, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Purchase\PurchaseBuilderInterface $purchaseBuilder)
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseCollection
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseCollection $purchaseCollection): array
    {
    }
}
interface PurchaseHistoryBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseHistory
     */
    public function buildFromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseHistory;
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseHistory $purchase
     * @return array
     */
    public function createDataArray(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseHistory $purchase): array;
}
class PurchaseHistoryBuilder implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Purchase\PurchaseHistoryBuilderInterface
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseHistoryFactory $purchaseHistoryFactory;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Purchase\PurchaseCollectionBuilderInterface $purchaseCollectionBuilder;
    /**
     * PurchaseHistoryBuilder constructor.
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseHistoryFactory $purchaseHistoryFactory
     * @param PurchaseCollectionBuilderInterface $purchaseCollectionBuilder
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseHistoryFactory $purchaseHistoryFactory, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Purchase\PurchaseCollectionBuilderInterface $purchaseCollectionBuilder)
    {
    }
    /**
     * @inheritDoc
     */
    public function createDataArray(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseHistory $purchase): array
    {
    }
    /**
     * @inheritDoc
     */
    public function buildFromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseHistory
    {
    }
    /**
     * @param array $data
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseHistory
     */
    private function build(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseHistory
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Repository\Variant;

interface VariantBuilderRepositoryInterface
{
    /**
     * @param \WC_Product $wcProduct
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantCollection $collection
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantCollection
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\BuilderException If failed to build Variant from WC
     */
    public function addToCollection(\WC_Product $wcProduct, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantCollection $collection): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantCollection;
}
class VariantBuilderRepository implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\Repository\Variant\VariantBuilderRepositoryInterface
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder;
    /**
     * VariantBuilderRepository constructor.
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder)
    {
    }
    /**
     * @inheritDoc
     */
    public function addToCollection(\WC_Product $wcProduct, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantCollection $collection): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantCollection
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\User;

interface UserBuilderInterface
{
    /**
     * @param array $data
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\User\User
     */
    public function buildFromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\User\User;
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\User\User $user
     * @return array
     */
    public function createDataArray(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\User\User $user): array;
}
class UserBuilder implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Builder\User\UserBuilderInterface
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\User\UserFactory $userFactory;
    /**
     * UserBuilder constructor.
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\User\UserFactory $userFactory
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\User\UserFactory $userFactory)
    {
    }
    /**
     * @param array $data
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\User\User
     */
    public function buildFromArray(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\User\User
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\User\User $user
     *
     * @return array
     */
    public function createDataArray(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\User\User $user): array
    {
    }
    /**
     * @param array $data
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\User\User
     */
    private function build(array $data): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\User\User
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Connection;

interface ConnectionType
{
    public const PRODUCT = 'product';
    public const VARIANT = 'variant';
    public const IMAGE = 'image';
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance;

class Balance
{
    private string $productUuid;
    private string $variantUuid;
    private int $balance;
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
    public function create(string $productUuid, string $variantUuid, string $balance): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\Balance
    {
    }
}
class LocationBalance
{
    private string $locationUuid;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Location\Type\LocationType $locationType;
    private string $productUuid;
    private string $variantUuid;
    private int $balance;
    /**
     * LocationBalance constructor.
     * @param string $locationUuid
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Location\Type\LocationType $locationType
     * @param string $productUuid
     * @param string $variantUuid
     * @param int $balance
     */
    public function __construct(string $locationUuid, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Location\Type\LocationType $locationType, string $productUuid, string $variantUuid, int $balance)
    {
    }
    /**
     * @return string
     */
    public function locationUuid(): string
    {
    }
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Location\Type\LocationType
     */
    public function locationType(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Location\Type\LocationType
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
    private array $collection = [];
    public function __construct(?array $locationBalances = [])
    {
    }
    /**
     * @param LocationBalance $locationBalance
     *
     * @return LocationBalanceCollection
     */
    public function add(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalance $locationBalance): self
    {
    }
    /**
     * @param LocationBalance $locationBalance
     *
     * @return LocationBalanceCollection
     */
    public function remove(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalance $locationBalance): self
    {
    }
    /**
     * @param string $locationUuid
     *
     * @return LocationBalance
     */
    public function get(string $locationUuid): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalance
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
    public function create(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection
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
    public function create(string $locationUuid, string $locationType, string $productUuid, string $variantUuid, string $balance): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalance
    {
    }
}
class ProductBalance
{
    private string $locationUuid;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection $variants;
    /**
     * ProductBalance constructor.
     * @param string $locationUuid
     * @param LocationBalanceCollection $variants
     */
    public function __construct(string $locationUuid, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection $variants)
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
    public function variants(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection
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
    public function create(string $locationUuid, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection $variants): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\ProductBalance
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Coordinates;

final class Coordinates
{
    private float $latitude;
    private float $longitude;
    private float $accuracyMeters;
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
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Validator\Coordinates\CoordinatesValidator $coordinatesValidator;
    /**
     * CoordinatesFactory constructor.
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Validator\Coordinates\CoordinatesValidator $coordinatesValidator
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Validator\Coordinates\CoordinatesValidator $coordinatesValidator)
    {
    }
    /**
     * @param string $latitude
     * @param string $longitude
     * @param string $accuracyMeters
     *
     * @return Coordinates
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ValidatorException
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Exception\Coordinates\InvalidLatitudeException
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Exception\Coordinates\InvalidLongitudeException
     */
    public function create(string $latitude, string $longitude, string $accuracyMeters): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Coordinates\Coordinates
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance;

final class AccountTransaction
{
    private \DateTime $timestamp;
    private int $amount;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\Type\TransactionType $originatorTransactionType;
    private string $originatingTransactionUuid;
    /**
     * AccountTransaction constructor.
     *
     * @param \DateTime $timestamp
     * @param int $amount
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\Type\TransactionType $originatorTransactionType
     * @param string $originatingTransactionUuid
     */
    public function __construct(\DateTime $timestamp, int $amount, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\Type\TransactionType $originatorTransactionType, string $originatingTransactionUuid)
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
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\Type\TransactionType
     */
    public function originatorTransactionType(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\Type\TransactionType
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
    public function create(string $timestamp, string $amount, string $originatorTransactionType, string $originatingTransactionUuid): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\AccountTransaction
    {
    }
}
class BalanceInfo
{
    private float $totalBalance;
    private string $currencyId;
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
    public function create(string $totalBalance, string $currencyId): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\BalanceInfo
    {
    }
}
final class PayoutInfo
{
    private float $totalBalance;
    private string $currencyId;
    private float $nextPayoutAmount;
    private float $discountRemaining;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\Type\PeriodType $period;
    /**
     * PayoutInfo constructor.
     * @param float $totalBalance
     * @param string $currencyId
     * @param float $nextPayoutAmount
     * @param float $discountRemaining
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\Type\PeriodType $period
     */
    public function __construct(float $totalBalance, string $currencyId, float $nextPayoutAmount, float $discountRemaining, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\Type\PeriodType $period)
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
    public function period(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\Type\PeriodType
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
    public function create(float $totalBalance, string $currencyId, float $nextPayoutAmount, float $discountRemaining, string $period): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\PayoutInfo
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Finance\Type;

/**
 * @method static AccountTypeGroup liquid()
 * @method bool isLiquid()
 * @method static AccountTypeGroup preliminary()
 * @method bool isPreliminary()
 */
final class AccountTypeGroup extends \Syde\Vendor\Zettle\Werkspot\Enum\AbstractEnum
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
final class PeriodType extends \Syde\Vendor\Zettle\Werkspot\Enum\AbstractEnum
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
final class TransactionType extends \Syde\Vendor\Zettle\Werkspot\Enum\AbstractEnum
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image;

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
 * @package Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image
 */
class ConcreteImage implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageInterface
{
    public const BASE_URL = 'https://image.izettle.com/productimage/';
    private string $identifier;
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
    private array $collection = [];
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageInterface ...$images)
    {
    }
    /**
     * @param ImageInterface $image
     *
     * @return ImageCollection
     */
    public function add(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageInterface $image): self
    {
    }
    /**
     * @param ImageInterface $image
     *
     * @return ImageCollection
     */
    public function remove(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageInterface $image): self
    {
    }
    /**
     * @param string $imageLookupkey
     *
     * @return ImageInterface
     */
    public function get(string $imageLookupkey): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageInterface
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
class LazyImage implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageInterface
{
    private const FALLBACK = 'https://placehold.co/200x200.jpg?text=WooProduct';
    private ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageInterface $image = null;
    private string $localUrl = '';
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Image\Images $imageClient;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator $map;
    private int $localId;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Provider\Image\UrlProviderInterface $urlProvider;
    public function __construct(int $localId, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Provider\Image\UrlProviderInterface $urlProvider, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Image\Images $imageClient, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator $map)
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
    private function ensureImage(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageInterface
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
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    private function syncImage(string $url, bool $throw = \false): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageInterface
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Inventory;

final class Inventory
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantInventoryState\VariantInventoryStateCollection $variants;
    /**
     * Inventory constructor.
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantInventoryState\VariantInventoryStateCollection $variants
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantInventoryState\VariantInventoryStateCollection $variants)
    {
    }
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantInventoryState\VariantInventoryStateCollection
     */
    public function variants(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantInventoryState\VariantInventoryStateCollection
    {
    }
    /**
     * @param string $variantUuid
     *
     * @return int
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\IdNotFoundException
     */
    public function variantBalance(string $variantUuid): int
    {
    }
}
class InventoryFactory
{
    public function create(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantInventoryState\VariantInventoryStateCollection $variants): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Inventory\Inventory
    {
    }
}
final class LocationInventory
{
    private string $uuid;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductCollection $trackedProducts;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection $locationBalances;
    /**
     * LocationInventory constructor.
     *
     * @param string $uuid
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductCollection $trackedProducts
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection $locationBalances
     */
    public function __construct(string $uuid, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductCollection $trackedProducts, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection $locationBalances)
    {
    }
    /**
     * @return string
     */
    public function uuid(): string
    {
    }
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductCollection
     */
    public function trackedProducts(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductCollection
    {
    }
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection
     */
    public function locationBalances(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection
    {
    }
}
class LocationInventoryFactory
{
    public function create(string $uuid, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductCollection $trackedProducts, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Balance\LocationBalanceCollection $locationBalances): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Inventory\LocationInventory
    {
    }
}
/**
 * Class Transaction
 *
 * @package Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Inventory
 */
class Transaction
{
    private string $productUuid;
    private string $variantUuid;
    private string $fromLocationUuid;
    private string $toLocationUuid;
    private int $change;
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Location;

class Location
{
    private string $uuid;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Location\Type\LocationType $type;
    private string $name;
    private ?string $description = null;
    private ?bool $default = null;
    /**
     * Location constructor.
     *
     * @param string $uuid
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Location\Type\LocationType $type
     * @param string $name
     * @param string|null $description
     * @param bool|null $default
     */
    public function __construct(string $uuid, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Location\Type\LocationType $type, string $name, ?string $description = null, ?bool $default = null)
    {
    }
    /**
     * @return string
     */
    public function uuid(): string
    {
    }
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Location\Type\LocationType
     */
    public function type(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Location\Type\LocationType
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
    public function create(string $uuid, string $type, string $name, ?string $description = null, ?bool $default = null): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Location\Location
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Location\Type;

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
final class LocationType extends \Syde\Vendor\Zettle\Werkspot\Enum\AbstractEnum
{
    private const SUPPLIER = 'SUPPLIER';
    private const STORE = 'STORE';
    private const SOLD = 'SOLD';
    private const BIN = 'BIN';
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Metadata;

class Metadata
{
    private bool $inPos;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Metadata\Source $source;
    /**
     * @param bool $inPos
     * @param Source $source
     */
    public function __construct(bool $inPos, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Metadata\Source $source)
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
    public function source(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Metadata\Source
    {
    }
}
class Source
{
    private string $name;
    private bool $external;
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization;

final class Organization
{
    private string $uuid;
    private ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat $vat = null;
    private string $currency;
    private ?string $name = null;
    private ?string $city = null;
    private ?string $zipCode = null;
    private ?string $address = null;
    private ?string $phoneNumber = null;
    private ?string $contactEmail = null;
    private ?string $receiptEmail = null;
    private ?string $legalEntityType = null;
    private ?string $legalEntityNr = null;
    private ?string $country = null;
    private ?string $language = null;
    private ?\DateTime $created = null;
    private ?string $ownerUuid = null;
    private ?int $organizationId = null;
    private ?string $customerStatus = null;
    private string $taxationMode;
    private string $taxationType;
    private ?string $customerType = null;
    private ?\DateTimeZone $timeZone;
    private ?string $addressLine2 = null;
    private ?string $legalName = null;
    private ?string $legalZipCode = null;
    private ?string $legalCity = null;
    private ?string $legalState = null;
    public function __construct(string $uuid, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat $vat, string $currency, ?string $name = null, ?string $city = null, ?string $zipCode = null, ?string $address = null, ?string $phoneNumber = null, ?string $contactEmail = null, ?string $receiptEmail = null, ?string $legalEntityType = null, ?string $legalEntityNr = null, ?string $country = null, ?string $language = null, ?\DateTime $created = null, ?string $ownerUuid = null, ?int $organizationId = null, ?string $customerStatus = null, string $taxationMode = \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\TaxationMode::INCLUSIVE, string $taxationType = \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\TaxationType::VAT, ?string $customerType = null, ?\DateTimeZone $timeZone = null, ?string $addressLine2 = null, ?string $legalName = null, ?string $legalZipCode = null, ?string $legalCity = null, ?string $legalState = null)
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
    public function setUuid(string $uuid): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    public function vat(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat
    {
    }
    public function setVat(?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat $vat): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
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
    public function setCurrency(string $currency): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
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
    public function setName(string $name): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
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
    public function setCity(string $city): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
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
    public function setZipCode(string $zipCode): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
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
    public function setAddress(string $address): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
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
    public function setPhoneNumber(string $phoneNumber): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
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
    public function setContactEmail(string $contactEmail): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
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
    public function setReceiptEmail(string $receiptEmail): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
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
    public function setLegalEntityType(string $legalEntityType): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
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
    public function setLegalEntityNr(string $legalEntityNr): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
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
    public function setCountry(string $country): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
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
    public function setLanguage(string $language): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
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
    public function setCreated(\DateTime $created): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
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
    public function setOwnerUuid(string $ownerUuid): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
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
    public function setOrganizationId(int $organizationId): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
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
    public function setCustomerStatus(string $customerStatus): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
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
    public function setCustomerType(string $customerType): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
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
    public function setTimeZone(\DateTimeZone $timeZone): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
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
    public function setAddressLine2(?string $addressLine2): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
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
    public function setLegalName(?string $legalName): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
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
    public function setLegalZipCode(?string $legalZipCode): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
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
    public function setLegalCity(?string $legalCity): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
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
    public function setLegalState(?string $legalState): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment;

abstract class AbstractPaymentMethod
{
    private string $uuid;
    private float $amount;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\Type\PaymentType $type;
    /**
     * AbstractPaymentMethod constructor.
     *
     * @param string $uuid
     * @param float $amount
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\Type\PaymentType $type
     */
    public function __construct(string $uuid, float $amount, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\Type\PaymentType $type)
    {
    }
    public function uuid(): string
    {
    }
    public function amount(): float
    {
    }
    public function type(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\Type\PaymentType
    {
    }
}
final class CardOnlinePayment extends \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
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
final class CardPayment extends \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
{
    private string $referenceNumber;
    private string $maskedPan;
    private string $cardType;
    private string $cardPaymentEntryMode;
    private ?string $applicationName = null;
    private ?string $applicationIdentifier = null;
    private ?string $terminalVerificationResults = null;
    private ?int $numberOfInstallments = null;
    private ?int $installmentAmount = null;
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
    public function applicationName(): ?string
    {
    }
    public function applicationIdentifier(): ?string
    {
    }
    public function terminalVerificationResults(): ?string
    {
    }
    public function numberOfInstallments(): ?int
    {
    }
    /**
     * @return int|null
     */
    public function installmentAmount(): ?int
    {
    }
}
final class CashPayment extends \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
{
    private float $handedAmount;
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
final class CustomPayment extends \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
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
final class GiftCardPayment extends \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
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
final class InvoicePayment extends \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
{
    private string $orderUuid;
    private string $invoiceNumber;
    private \DateTime $dueDate;
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
final class KlarnaPayment extends \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
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
final class MobilePayment extends \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
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
    private array $collection = [];
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
    public function add(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod $payment): self
    {
    }
    /**
     * @param AbstractPaymentMethod $payment
     *
     * @return PaymentCollection
     */
    public function remove(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod $payment): self
    {
    }
    /**
     * @param string $uuid
     *
     * @return AbstractPaymentMethod
     */
    public function get(string $uuid): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
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
    public function create(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\PaymentCollection
    {
    }
}
class PaymentFactory
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Validator\Payment\PaymentValidator $paymentValidator;
    /**
     * PaymentFactory constructor.
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Validator\Payment\PaymentValidator $paymentValidator
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Validator\Payment\PaymentValidator $paymentValidator)
    {
    }
    /**
     * @param string $uuid
     * @param float $amount
     * @param string $paymentType
     *
     * @return CardOnlinePayment
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Exception\EntityFactoryException
     */
    public function createCardOnlinePayment(string $uuid, float $amount, string $paymentType): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\CardOnlinePayment
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
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Exception\EntityFactoryException
     */
    public function createCardPayment(string $uuid, float $amount, string $paymentType, string $referenceNumber, string $maskedPan, string $cardType, string $cardPaymentEntryMode, ?string $applicationName = null, ?string $applicationIdentifier = null, ?string $terminalVerificationResults = null, ?int $numberOfInstallments = null): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\CardPayment
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
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Exception\EntityFactoryException
     */
    public function createCashPayment(string $uuid, string $paymentType, string $amount, string $handedAmount): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\CashPayment
    {
    }
    /**
     * @param string $uuid
     * @param string $paymentType
     * @param float $amount
     *
     * @return CustomPayment
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Exception\EntityFactoryException
     */
    public function createCustomPayment(string $uuid, string $paymentType, float $amount): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\CustomPayment
    {
    }
    /**
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Exception\EntityFactoryException
     */
    public function createGiftcardPayment(string $uuid, string $paymentType, float $amount): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\GiftCardPayment
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
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Exception\EntityFactoryException
     * @throws \Exception
     */
    public function createInvoicePayment(string $uuid, string $paymentType, float $amount, string $orderUuid, string $invoiceNumber, string $dueDate): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\InvoicePayment
    {
    }
    /**
     * @param string $uuid
     * @param string $paymentType
     * @param float $amount
     *
     * @return KlarnaPayment
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Exception\EntityFactoryException
     */
    public function createKlarnaPayment(string $uuid, string $paymentType, float $amount): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\KlarnaPayment
    {
    }
    /**
     * @param string $uuid
     * @param string $paymentType
     * @param float $amount
     *
     * @return MobilePayment
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Exception\EntityFactoryException
     */
    public function createMobilePayment(string $uuid, string $paymentType, float $amount): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\MobilePayment
    {
    }
    /**
     * @param string $uuid
     * @param string $paymentType
     * @param float $amount
     *
     * @return PaypalPayment
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Exception\EntityFactoryException
     */
    public function createPaypalPayment(string $uuid, string $paymentType, float $amount): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\PaypalPayment
    {
    }
    /**
     * @param string $uuid
     * @param string $paymentType
     * @param float $amount
     *
     * @return StoreCreditPayment
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Exception\EntityFactoryException
     */
    public function createStoreCreditPayment(string $uuid, string $paymentType, float $amount): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\StoreCreditPayment
    {
    }
    /**
     * @param string $uuid
     * @param string $paymentType
     * @param float $amount
     *
     * @return SwishPayment
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Exception\EntityFactoryException
     */
    public function createSwishPayment(string $uuid, string $paymentType, float $amount): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\SwishPayment
    {
    }
    /**
     * @param string $uuid
     * @param string $paymentType
     * @param float $amount
     *
     * @return VippsPayment
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Exception\EntityFactoryException
     */
    public function createVippsPayment(string $uuid, string $paymentType, float $amount): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\VippsPayment
    {
    }
}
final class PaypalPayment extends \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
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
final class StoreCreditPayment extends \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
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
class SwishPayment extends \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\Type;

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
final class PaymentType extends \Syde\Vendor\Zettle\Werkspot\Enum\AbstractEnum
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment;

final class VippsPayment extends \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Payment\AbstractPaymentMethod
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation;

class Presentation
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageInterface $image;
    private ?string $backgroundColor;
    private ?string $textColor;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageInterface $image, ?string $backgroundColor = null, ?string $textColor = null)
    {
    }
    public function image(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageInterface
    {
    }
    public function setImage(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageInterface $image): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation\Presentation
    {
    }
    public function backgroundColor(): ?string
    {
    }
    public function setBackgroundColor(string $backgroundColor): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation\Presentation
    {
    }
    public function textColor(): ?string
    {
    }
    public function setTextColor(string $textColor): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation\Presentation
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price;

class Price
{
    private int $amount;
    private string $currencyId;
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
    public function setAmount(int $amount): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price\Price
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
    public function setCurrencyId(string $currencyId): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price\Price
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product;

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
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageCollection
     */
    public function images(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageCollection;
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantCollection
     */
    public function variants(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantCollection;
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation\Presentation|null
     */
    public function presentation(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation\Presentation;
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
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat|null
     */
    public function vat(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat;
    public function taxExempt(): ?bool;
    public function usesDefaultTax(): ?bool;
    /**
     * @return string|null
     */
    public function unitName(): ?string;
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Metadata\Metadata|null
     */
    public function metadata(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Metadata\Metadata;
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionDefinitions|null
     */
    public function variantOptionDefinitions(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionDefinitions;
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat;

interface VatSetterInterface
{
    public function setVat(?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat $vat): void;
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product;

/**
 * Interface WritableProductInterface
 *
 * @package Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product
 */
interface WritableProductInterface extends \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\VatSetterInterface
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
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageCollection $imageCollection
     */
    public function setImages(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageCollection $imageCollection): void;
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation\Presentation $presentation
     */
    public function setPresentation(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation\Presentation $presentation): void;
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantCollection $variants
     */
    public function setVariants(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantCollection $variants): void;
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
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Metadata\Metadata $metadata
     */
    public function setMetadata(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Metadata\Metadata $metadata): void;
    public function setVariantOptionDefinitions(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionDefinitions $definitions): void;
}
interface ProductTransferInterface extends \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\WritableProductInterface
{
}
trait ProductGetterDecoratorTrait
{
    abstract protected function baseProduct(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface;
    public function uuid(): string
    {
    }
    public function name(): string
    {
    }
    public function description(): string
    {
    }
    public function images(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageCollection
    {
    }
    public function presentation(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation\Presentation
    {
    }
    public function variants(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantCollection
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
    public function vat(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat
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
    public function metadata(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Metadata\Metadata
    {
    }
    public function variantOptionDefinitions(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionDefinitions
    {
    }
}
/**
 * Trait ProductSetterDecoratorTrait
 *
 * @package Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product
 */
trait ProductSetterDecoratorTrait
{
    abstract protected function baseWritableProduct(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\WritableProductInterface;
    public function setUuid(string $uuid): void
    {
    }
    public function setName(string $name): void
    {
    }
    public function setDescription(string $description): void
    {
    }
    public function setImages(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageCollection $imageCollection): void
    {
    }
    public function setPresentation(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation\Presentation $presentation): void
    {
    }
    public function setVariants(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantCollection $variants): void
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
    public function setVat(?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat $vat): void
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
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Metadata\Metadata $metadata
     */
    public function setMetadata(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Metadata\Metadata $metadata): void
    {
    }
    public function setVariantOptionDefinitions(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionDefinitions $definitions): void
    {
    }
}
/**
 * A Decorator for regular product instances. LazyProducts will automatically sync themselves
 * to Zettle as soon as their uuid() getter is called.
 */
class LazyProduct implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductTransferInterface
{
    use \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductGetterDecoratorTrait;
    use \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductSetterDecoratorTrait;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductTransferInterface $base;
    private ?string $syncedUuid = null;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Products\Products $productClient;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator $map;
    private int $localId;
    public function __construct(int $localId, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductTransferInterface $base, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Products\Products $productClient, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator $map)
    {
    }
    /**
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    public function uuid(): string
    {
    }
    public function localId(): int
    {
    }
    protected function baseProduct(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface
    {
    }
    protected function baseWritableProduct(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\WritableProductInterface
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity;

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
    protected array $changedProperties = [];
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product;

/**
 * Class Product
 *
 * @package Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product
 */
class Product implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductTransferInterface, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\PropertyChangeAwareInterface
{
    use \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\PropertyChangeAwareTrait;
    private string $uuid;
    private string $name;
    private string $description;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageCollection $images;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantCollection $variants;
    private ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation\Presentation $presentation = null;
    private ?string $externalReference = null;
    private ?string $etag = null;
    private ?\DateTime $updatedAt = null;
    private ?string $updatedBy = null;
    private ?\DateTime $createdAt = null;
    private ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat $vat = null;
    private ?bool $taxExempt = null;
    private ?bool $usesDefaultTax = null;
    private ?string $unitName = null;
    private ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Metadata\Metadata $metadata = null;
    private ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionDefinitions $variantOptionDefinitions = null;
    /**
     * Product constructor.
     *
     * @param string $uuid
     * @param string $name
     * @param string $description
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageCollection $images
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantCollection $variants
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation\Presentation|null $presentation
     * @param string|null $externalReference
     * @param string|null $etag
     * @param \DateTime|null $updatedAt
     * @param string|null $updatedBy
     * @param \DateTime|null $createdAt
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat|null $vat
     * @param string|null $unitName
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Metadata\Metadata|null $metadata
     */
    public function __construct(string $uuid, string $name, string $description, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageCollection $images, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantCollection $variants, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation\Presentation $presentation = null, ?string $externalReference = null, ?string $etag = null, ?\DateTime $updatedAt = null, ?string $updatedBy = null, ?\DateTime $createdAt = null, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat $vat = null, ?bool $taxExempt = null, ?bool $usesDefaultTax = null, ?string $unitName = null, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Metadata\Metadata $metadata = null)
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
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageCollection
     */
    public function images(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageCollection
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageCollection $imageCollection
     */
    public function setImages(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageCollection $imageCollection): void
    {
    }
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantCollection
     */
    public function variants(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantCollection
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantCollection $variants
     */
    public function setVariants(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantCollection $variants): void
    {
    }
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation\Presentation|null
     */
    public function presentation(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation\Presentation
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation\Presentation $presentation
     */
    public function setPresentation(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation\Presentation $presentation): void
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
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat|null
     */
    public function vat(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat $vat
     */
    public function setVat(?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat $vat): void
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
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Metadata\Metadata|null
     */
    public function metadata(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Metadata\Metadata
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Metadata\Metadata $metadata
     */
    public function setMetadata(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Metadata\Metadata $metadata): void
    {
    }
    /**
     * @inheritDoc
     */
    public function variantOptionDefinitions(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionDefinitions
    {
    }
    public function setVariantOptionDefinitions(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionDefinitions $definitions): void
    {
    }
}
final class ProductCollection
{
    /**
     * @var ProductInterface[]
     */
    private array $collection = [];
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface ...$products)
    {
    }
    /**
     * @param ProductInterface $product
     *
     * @return ProductCollection
     */
    public function add(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface $product): self
    {
    }
    /**
     * @param ProductInterface $product
     *
     * @return ProductCollection
     */
    public function remove(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface $product): self
    {
    }
    public function get(string $uuid): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase;

final class Purchase
{
    private string $uuid;
    private string $uuid1;
    private \DateTime $timestamp;
    private ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Coordinates\Coordinates $coordinates = null;
    private string $country;
    private string $currency;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\User\User $user;
    private int $organizationId;
    private int $purchaseNumber;
    private float $amount;
    private float $vatAmount;
    private array $products;
    private array $payments;
    private array $vatAmounts;
    private bool $receiptCopyAllowed;
    private ?bool $published = null;
    private bool $refund;
    private bool $refunded;
    private ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\Type\SourceType $sourceType = null;
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
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\User\User $user
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
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Coordinates\Coordinates|null $coordinates
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\Type\SourceType|null $sourceType
     * @param bool|null $published
     */
    public function __construct(string $uuid, string $uuid1, \DateTime $timestamp, string $country, string $currency, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\User\User $user, int $organizationId, int $purchaseNumber, float $amount, float $vatAmount, array $products, array $payments, array $vatAmounts, bool $receiptCopyAllowed, bool $refund, bool $refunded, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Coordinates\Coordinates $coordinates = null, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\Type\SourceType $sourceType = null, ?bool $published = null)
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
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Coordinates\Coordinates|null
     */
    public function coordinates(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Coordinates\Coordinates
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
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\User\User
     */
    public function user(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\User\User
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
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\Type\SourceType|null
     */
    public function sourceType(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\Type\SourceType
    {
    }
}
final class PurchaseCollection
{
    /**
     * @var Purchase[]
     */
    private array $collection = [];
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
    public function add(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\Purchase $purchase): self
    {
    }
    /**
     * @param Purchase $purchase
     *
     * @return PurchaseCollection
     */
    public function remove(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\Purchase $purchase): self
    {
    }
    /**
     * @param string $uuid
     *
     * @return Purchase
     */
    public function get(string $uuid): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\Purchase
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
    public function create(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseCollection
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
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\User\User $user
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
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Coordinates\Coordinates|null $coordinates
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\Type\SourceType|null $sourceType
     * @param bool|null $published
     *
     * @return Purchase
     *
     * @throws \Exception
     */
    public function create(string $uuid, \DateTime $timestamp, string $country, string $currency, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\User\User $user, int $organizationId, int $purchaseNumber, float $amount, float $vatAmount, array $products, array $payments, array $vatAmounts, bool $receiptCopyAllowed, bool $refund, bool $refunded, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Coordinates\Coordinates $coordinates = null, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\Type\SourceType $sourceType = null, ?bool $published = null): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\Purchase
    {
    }
}
final class PurchaseHistory
{
    private string $firstPurchaseHash;
    private string $lastPurchaseHash;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseCollection $purchaseCollection;
    /**
     * PurchaseHistory constructor.
     *
     * @param string $firstPurchaseHash
     * @param string $lastPurchaseHash
     * @param PurchaseCollection $purchaseCollection
     */
    public function __construct(string $firstPurchaseHash, string $lastPurchaseHash, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseCollection $purchaseCollection)
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
    public function purchase(string $uuid): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\Purchase
    {
    }
    /**
     * @return PurchaseCollection
     */
    public function purchases(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseCollection
    {
    }
    /**
     * @param Purchase $purchase
     */
    public function addPurchase(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\Purchase $purchase): void
    {
    }
    /**
     * @param Purchase $purchase
     */
    public function removePurchase(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\Purchase $purchase): void
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
    public function create(string $firstPurchaseHash, string $lastPurchaseHash, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseCollection $purchaseCollection): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\PurchaseHistory
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Purchase\Type;

/**
 * @method static SourceType posSource()
 * @method bool isPosSource()
 * @method static SourceType shopSource()
 * @method bool isShopSource()
 * @method static SourceType SDKSource()
 * @method bool isSDKSource()
 */
class SourceType extends \Syde\Vendor\Zettle\Werkspot\Enum\AbstractEnum
{
    public const POS = 'POS';
    public const SHOP = 'WEB_SHOP';
    public const SDK = 'SDK';
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Tax;

class TaxRate
{
    private string $uuid;
    private string $label;
    private ?float $percentage = null;
    private ?bool $default = null;
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\User;

final class User
{
    private int $id;
    private string $displayName;
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
    public function setId(int $id): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\User\User
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
    public function setDisplayName(string $displayName): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\User\User
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
    public function create(string $id, string $displayName): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\User\User
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant;

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
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price\Price|null
     */
    public function price(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price\Price;
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat|null
     */
    public function vat(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat;
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation\Presentation
     */
    public function presentation(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation\Presentation;
    /**
     * @return string|null
     */
    public function unitName(): ?string;
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection|null
     */
    public function options(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection;
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price\Price|null
     */
    public function costPrice(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price\Price;
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
    public function price(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price\Price;
    public function setPrice(?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price\Price $price): void;
}
trait VariantGetterDecoratorTrait
{
    abstract protected function baseVariant(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantInterface;
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
    public function price(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price\Price
    {
    }
    public function vat(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat
    {
    }
    public function presentation(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation\Presentation
    {
    }
    public function unitName(): ?string
    {
    }
    public function options(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection
    {
    }
    public function costPrice(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price\Price
    {
    }
    public function barcode(): ?string
    {
    }
}
class LazyVariant implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantInterface, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\StockQuantityAwareInterface, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\PriceAwareInterface
{
    use \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantGetterDecoratorTrait;
    private int $localId;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantTransferInterface&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\StockQuantityAwareInterface $base;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\RemoteIdProvider $recordCreator;
    private bool $persisted = \false;
    public function __construct(int $localId, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantTransferInterface&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\StockQuantityAwareInterface $base, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\RemoteIdProvider $recordCreator)
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
    public function setPrice(?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price\Price $price): void
    {
    }
    protected function baseVariant(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantInterface
    {
    }
}
/**
 * Interface WritableVariantInterface
 *
 * @package Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant
 */
interface WritableVariantInterface extends \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\VatSetterInterface
{
    public function setUuid(string $uuid): void;
    public function setName(string $name): void;
    public function setDescription(string $description): void;
    public function setSku(string $sku): void;
    public function setPrice(?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price\Price $price): void;
    public function setPresentation(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation\Presentation $presentation): void;
    public function setOptions(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection $options): void;
    public function setUnitName(string $unitName): void;
    public function setCostPrice(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price\Price $costPrice): void;
    public function setBarcode(string $barcode): void;
}
interface VariantTransferInterface extends \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantInterface, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\WritableVariantInterface
{
}
/**
 * Class Variant
 *
 * @package Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant
 */
class Variant implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantTransferInterface, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\StockQuantityAwareInterface, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\PriceAwareInterface
{
    private string $uuid;
    private string $name;
    private string $description;
    private string $sku;
    private ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price\Price $price = null;
    private ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat $vat = null;
    private int $defaultQuantity;
    private ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation\Presentation $presentation;
    private ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection $options;
    private ?string $unitName = null;
    private ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price\Price $costPrice = null;
    private ?string $barcode = null;
    /**
     * Variant constructor.
     *
     * @param string $uuid
     * @param string $name
     * @param string $description
     * @param string $sku
     * @param int $defaultQuantity
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price\Price|null $price
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat|null $vat
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation\Presentation|null $presentation
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection|null $options
     * @param string|null $unitName
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price\Price|null $costPrice
     * @param string|null $barcode
     */
    public function __construct(string $uuid, string $name, string $description, string $sku, int $defaultQuantity, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price\Price $price = null, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat $vat = null, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation\Presentation $presentation = null, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection $options = null, ?string $unitName = null, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price\Price $costPrice = null, ?string $barcode = null)
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
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price\Price|null
     */
    public function price(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price\Price
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price\Price|null $price
     */
    public function setPrice(?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price\Price $price): void
    {
    }
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat
     */
    public function vat(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat $vat
     */
    public function setVat(?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat $vat): void
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
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation\Presentation|null
     */
    public function presentation(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation\Presentation
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation\Presentation $presentation
     */
    public function setPresentation(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Presentation\Presentation $presentation): void
    {
    }
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection|null
     */
    public function options(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection $options
     */
    public function setOptions(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection $options): void
    {
    }
    /**
     * @return string|null
     */
    public function unitName(): ?string
    {
    }
    public function setUnitName(?string $unitName): void
    {
    }
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price\Price|null
     */
    public function costPrice(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price\Price
    {
    }
    public function setCostPrice(?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Price\Price $costPrice): void
    {
    }
    /**
     * @return string|null
     */
    public function barcode(): ?string
    {
    }
    public function setBarcode(?string $barcode): void
    {
    }
}
final class VariantCollection
{
    /**
     * @var VariantInterface[]
     */
    private array $collection = [];
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantInterface ...$variants)
    {
    }
    /**
     * @param VariantInterface $variant
     *
     * @return VariantCollection
     */
    public function add(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantInterface $variant): self
    {
    }
    /**
     * @param VariantInterface $variant
     *
     * @return VariantCollection
     */
    public function remove(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantInterface $variant): self
    {
    }
    public function get(string $uuid): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantInterface
    {
    }
    /**
     * @return VariantInterface[]
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
 * Class WcVariationIterator
 *
 * Iterates over product attributes, generates all possible permutations,
 * and creates a Variant object for each of them
 *
 * @package Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant
 *
 * @implements \IteratorAggregate<int, mixed>
 */
class WcVariationIterator implements \IteratorAggregate
{
    private \WC_Product_Variable $wcProduct;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository;
    /**
     * WcVariationIterator constructor.
     *
     * @param \WC_Product_Variable $wcProduct
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository
     */
    public function __construct(\WC_Product_Variable $wcProduct, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository)
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantInventoryState;

final class VariantInventoryState
{
    private string $uuid;
    private string $productUuid;
    private string $variantUuid;
    private int $balance;
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
    private array $collection = [];
    /**
     * VariantChangeHistoryCollection constructor.
     *
     * @param array|null $inventoryStates
     */
    public function __construct(?array $inventoryStates = [])
    {
    }
    public function add(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantInventoryState\VariantInventoryState $variantInventoryState): self
    {
    }
    public function remove(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantInventoryState\VariantInventoryState $variantInventoryState): self
    {
    }
    /**
     * @param string $uuid
     *
     * @return VariantInventoryState
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\IdNotFoundException
     */
    public function get(string $uuid): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantInventoryState\VariantInventoryState
    {
    }
    /**
     * @return VariantInventoryState[]
     */
    public function all(): array
    {
    }
    public function reset(): self
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption;

/**
 * Unique Data Set for Attributes
 */
class AttributeSet
{
    /**
     * @var array<string, string[]>
     */
    protected array $set = [];
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
     * @return array<string, string[]>
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
    private string $name;
    private string $value;
    private ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageInterface $image;
    public function __construct(string $name, string $value, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageInterface $image = null)
    {
    }
    public function name(): string
    {
    }
    public function setName(string $name): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOption
    {
    }
    public function value(): string
    {
    }
    public function setValue(string $value): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOption
    {
    }
    public function image(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageInterface
    {
    }
    public function setImage(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Image\ImageInterface $image): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOption
    {
    }
}
class VariantOptionCollection
{
    /**
     * @var VariantOption[]
     */
    private array $collection = [];
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOption ...$variantOptions)
    {
    }
    /**
     * @param VariantOption $variantOption
     *
     * @return VariantOptionCollection
     */
    public function add(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOption $variantOption): self
    {
    }
    /**
     * @param VariantOption $variantOption
     *
     * @return VariantOptionCollection
     */
    public function remove(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOption $variantOption): self
    {
    }
    /**
     * @param VariantOption $variantOption
     *
     * @return VariantOption|null
     */
    public function get(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOption $variantOption): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOption
    {
    }
    /**
     * @param string $key
     *
     * @return VariantOption|null
     */
    public function byName(string $key): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOption
    {
    }
    public function set(string $key, string $value): void
    {
    }
    /**
     * @return VariantOption[]
     */
    public function all(): array
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
    private array $definitions = [];
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
    public function addDefinition(string $name, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection $definition): self
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
    public function addCollectionToDefinition(string $name, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionCollection $collection): self
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
    public function create(string $name, string $value): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOption
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat;

final class Vat
{
    private float $percentage;
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception;

interface BuilderException extends \Throwable
{
}
interface ValidatorException extends \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\BuilderException
{
    /**
     * Values of ValidationErrorCodes
     * @return string[]
     */
    public function errorCodes(): array;
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Exception\Coordinates;

final class InvalidLatitudeException extends \Exception implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ValidatorException
{
    public function errorCodes(): array
    {
    }
}
final class InvalidLongitudeException extends \Exception implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ValidatorException
{
    public function errorCodes(): array
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Exception;

class EntityFactoryException extends \Exception
{
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Exception\Payment;

final class InvalidPaymentTypeException extends \Exception implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ValidatorException
{
    public function errorCodes(): array
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Exception\Vat;

final class VatNotFound extends \Exception implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ValidatorException
{
    public function errorCodes(): array
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Provider\Image;

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
class PlaceholderUrlProvider implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Provider\Image\UrlProviderInterface
{
    private string $url;
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
class WordPressFilePathProvider implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Provider\Image\UrlProviderInterface
{
    /**
     * {@inheritDoc}
     */
    public function provide(string $imageId): string
    {
    }
}
class WordpressUrlProvider implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Provider\Image\UrlProviderInterface
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Provider\Organization;

interface OrganizationProvider
{
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    public function provide(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization;
}
class RestOrganizationProvider implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Provider\Organization\OrganizationProvider
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\OAuth\Organizations $client;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\OAuth\Organizations $client)
    {
    }
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    public function provide(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
}
/**
 * Organization data rarely changes, so it can be cached locally using this Decorator
 */
class TransientCachingOrganizationProvider implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Provider\Organization\OrganizationProvider
{
    private ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization $cache = null;
    /**
     * Transient Identifier Key
     *
     */
    private string $key;
    private int $expiration;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Provider\Organization\OrganizationProvider $provider;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Provider\Organization\OrganizationProvider $provider, string $key, int $expiration = 0)
    {
    }
    /**
     * Get the Organization Data from transient
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
     *
     * phpcs:disable WordPress.PHP.DiscouragedPHPFunctions.serialize_unserialize
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    public function provide(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    private function getCached(): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
    /**
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
     * phpcs:disable WordPress.PHP.DiscouragedPHPFunctions.serialize_serialize
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    private function delegateAndCache(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Organization\Organization
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Provider\Vat;

interface VatProvider
{
    /**
     * @param \WC_Product $wcProduct
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Exception\Vat\VatNotFound
     * @throws \Exception
     */
    public function provide(\WC_Product $wcProduct): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat;
}
class WooCommerceVatProvider implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Provider\Vat\VatProvider
{
    private array $location;
    /**
     * @param array $location An array with keys country, state, etc., used for looking up taxes.
     */
    public function __construct(array $location)
    {
    }
    public function provide(\WC_Product $wcProduct): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Vat\Vat
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Validator\Coordinates;

class CoordinatesValidator
{
    /**
     * @param string $latitude
     * @param string $longitude
     *
     * @return bool
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Exception\Coordinates\InvalidLatitudeException
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Exception\Coordinates\InvalidLongitudeException
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Validator\Payment;

class PaymentValidator
{
    /**
     * @param string $validPaymentType
     * @param string $paymentType
     *
     * @return bool
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Exception\Payment\InvalidPaymentTypeException
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DB;

/**
 * Interface Table
 */
interface Table
{
    public const MAX_INDEX_LENGTH = 191;
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
class DataMappingTable implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DB\Table
{
    private string $name;
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception;

class BuilderNotFoundException extends \Exception implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\BuilderException
{
}
class IdNotFoundException extends \Exception
{
}
/**
 * phpcs:disable Syde.Files.LineLength.TooLong
 */
class InvalidBuilderPayloadException extends \Exception implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\BuilderException, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ValidatorException
{
    protected mixed $payload;
    /**
     * @var string[]
     */
    protected array $errorCodes;
    /**
     * @param mixed $payload
     * @param string[] $errorCodes Values of ValidationErrorCodes.
     */
    public function __construct(string $className, mixed $payload, array $errorCodes, ?\Throwable $previous = null)
    {
    }
    public function payload(): mixed
    {
    }
    public function errorCodes(): array
    {
    }
}
class UnexpectedBuilderPayloadTypeException extends \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\InvalidBuilderPayloadException
{
    public function __construct(string $expectedClassName, mixed $payload)
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\Validator;

final class DifferentVariantVatException extends \Exception implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ValidatorException
{
    public function __construct(string $productName, array $vatValues, int $code = 0, ?\Throwable $previous = null)
    {
    }
    public function errorCodes(): array
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\Validator\Image;

class ImageNotFoundException extends \Exception implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ValidatorException
{
    public function errorCodes(): array
    {
    }
}
final class InvalidImageSizeException extends \Exception implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ValidatorException
{
    public function errorCodes(): array
    {
    }
}
class UnexpectedImageUrlException extends \Exception implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ValidatorException
{
    public function errorCodes(): array
    {
    }
}
final class UnsupportedImageFileSizeException extends \Exception implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ValidatorException
{
    public function errorCodes(): array
    {
    }
}
final class UnsupportedImageFileTypeException extends \Exception implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ValidatorException
{
    public function errorCodes(): array
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\Validator;

class MaximumStockException extends \Exception implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ValidatorException
{
    public function __construct(int $stock, int $maxStock, int $code = 0, ?\Throwable $previous = null)
    {
    }
    public function errorCodes(): array
    {
    }
}
final class MaximumVariantsException extends \Exception implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ValidatorException
{
    public function __construct(string $productName, int $variantsAmount, int $code = 0, ?\Throwable $previous = null)
    {
    }
    public function errorCodes(): array
    {
    }
}
final class MinimumVariantsException extends \Exception implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ValidatorException
{
    public function __construct(string $productName, int $code = 0, ?\Throwable $previous = null)
    {
    }
    public function errorCodes(): array
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\Validator\Presentation;

class InvalidHexColorException extends \Exception implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ValidatorException
{
    public function __construct(string $color, ?\Throwable $previous = null)
    {
    }
    public function errorCodes(): array
    {
    }
}
class ShortHexColorException extends \Exception implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ValidatorException
{
    public function __construct(string $color, string $context, ?\Throwable $previous = null)
    {
    }
    public function errorCodes(): array
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\Validator\VariantOption;

class MaximumVariantOptionNameCharacterLengthException extends \Exception implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ValidatorException
{
    public function __construct(string $variantOptionName, int $maxLength, ?\Throwable $previous = null)
    {
    }
    public function errorCodes(): array
    {
    }
}
class MinimumVariantOptionNameCharacterLengthException extends \Exception implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ValidatorException
{
    public function __construct(string $variantOptionName, int $minLength, ?\Throwable $previous = null)
    {
    }
    public function errorCodes(): array
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\Validator\VariantOptionDefinitions;

class EmptyVariantOptionCollectionException extends \Exception implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ValidatorException
{
    public function __construct(array $emptyOptions, ?\Throwable $previous = null)
    {
    }
    public function errorCodes(): array
    {
    }
}
class EmptyVariantOptionDefinitionsException extends \Exception implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ValidatorException
{
    public function __construct(?\Throwable $previous = null)
    {
    }
    public function errorCodes(): array
    {
    }
}
// phpcs:ignore Syde.Files.LineLength.TooLong
class MaximumVariantOptionDefinitionsAmountException extends \Exception implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ValidatorException
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
class VariantOptionAmountMismatchException extends \Exception implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ValidatorException
{
    public function __construct(int $expected, int $amount, ?\Throwable $previous = null)
    {
    }
    public function errorCodes(): array
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception;

class WebhookException extends \Exception
{
}
class ZettleRestException extends \Exception
{
    public const TYPE_ENTITY_NOT_FOUND = 'ENTITY_NOT_FOUND';
    public const TYPE_PRODUCT_NOT_TRACKED = 'PRODUCT_NOT_TRACKED';
    public const TYPE_UNAUTHENTICATED = 'UNAUTHENTICATED';
    public const TYPE_UNKNOWN = 'UNKNOWN';
    private array $json;
    private array $payload;
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Factory;

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
class WcProductFactory implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Factory\WcProductFactoryInterface
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\Zettle\Product\ProductRepositoryInterface $izProductRepository;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $wcProductRepository;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\Zettle\Product\ProductRepositoryInterface $izProductRepository, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $wcProductRepository)
    {
    }
    /**
     * @inheritDoc
     */
    public function fromUuid(string $uuid): ?\WC_Product
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Filter;

interface FilterInterface
{
    public function accepts(mixed $entity, mixed $payload): bool;
    public function filter(mixed $entity, mixed $payload): mixed;
}
// phpcs:disable SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint
// phpcs:disable Syde.Functions.ReturnTypeDeclaration.NoReturnType
class CompoundFilter implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Filter\FilterInterface
{
    /**
     * @var FilterInterface[]
     */
    private array $filters;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Filter\FilterInterface ...$filters)
    {
    }
    public function accepts(mixed $entity, mixed $payload): bool
    {
    }
    public function filter(mixed $entity, mixed $payload): mixed
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
     * Limits the given description in size (UTF-8 bytes) according to given parameters,
     * without splitting multibyte characters
     *
     * @param string $description   Text/Description which will be trimmed
     * @param int $max              Maximum size in bytes, including the trim marker
     * @param string $trimMaker     Replacement for the rest of the characters
     *
     * @return string
     */
    public static function limitDescription(string $description, int $max = self::MAX_DESCRIPTION_SIZE, string $trimMaker = self::DEFAULT_TRIM_MARKER): string
    {
    }
}
class ImageConnectionFilter implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Filter\FilterInterface
{
    public function accepts(mixed $entity, mixed $payload): bool
    {
    }
    public function filter(mixed $image, mixed $payload): mixed
    {
    }
}
/**
 * Sets Price to null.
 */
class PriceFilter implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Filter\FilterInterface
{
    public function accepts(mixed $entity, mixed $payload): bool
    {
    }
    public function filter(mixed $variant, mixed $wcProduct): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\PriceAwareInterface
    {
    }
}
// phpcs:disable SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint
// phpcs:disable Syde.Functions.ReturnTypeDeclaration.NoReturnType
/**
 * Class ProductConnectionFilter
 *
 * This filter connects an Zettle Product with its WooCommerce counterpart
 * by querying an ID mapping table
 *
 * @package Syde\PayPal\PointOfSale\PhpSdk\Filter
 */
class ProductConnectionFilter implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Filter\FilterInterface
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator $idMap;
    /**
     * @var array<int, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface>
     */
    private array $lazyPool = [];
    /**
     * @var callable
     */
    private $productClientProvider;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator $idMap, callable $productClientProvider)
    {
    }
    public function accepts(mixed $entity, mixed $payload): bool
    {
    }
    public function filter(mixed $product, mixed $wcProduct): mixed
    {
    }
    private function getLazyProduct(int $localId, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductTransferInterface $product): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface
    {
    }
}
/**
 * Sets taxExempt and usesDefaultTax to null for existing items
 * because we are not supposed to overwrite taxes after creation.
 * For VAT accounts sets taxExempt to false (IZET-374).
 */
class TaxFilter implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Filter\FilterInterface
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
    public function accepts(mixed $entity, mixed $payload): bool
    {
    }
    public function filter(mixed $entity, mixed $wcProduct): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\WritableProductInterface
    {
    }
    private function existsRemotely(mixed $entity): bool
    {
    }
}
/**
 * Searches our ID-Map for an existing record and updates the Variant's UUID with it.
 * If none is found, it will wrap the Variant into a LazyVariant that will automatically
 * create a new entry as soon as required (when accessing its UUID)
 *
 * phpcs:disable SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint
 * phpcs:disable Syde.Functions.ReturnTypeDeclaration.NoReturnType
 */
class VariantConnectionFilter implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Filter\FilterInterface
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator $idMap;
    /**
     * @var array<int, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantInterface>
     */
    private array $lazyPool = [];
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator $idMap)
    {
    }
    public function accepts(mixed $entity, mixed $payload): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function filter(mixed $variant, mixed $wcProduct): object
    {
    }
    private function getLazyVariant(int $localId, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantTransferInterface&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\StockQuantityAwareInterface $variant): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Variant\VariantInterface
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Image;

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
class ExifImageFormatRetriever implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Image\ImageFormatRetrieverInterface
{
    public function determineImageFormat(string $url): string
    {
    }
}
/**
 * Uses file extension to determine image type.
 */
class ExtensionImageFormatRetriever implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Image\ImageFormatRetrieverInterface
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Iterator;

/**
 * @extends \Iterator<int, mixed>
 */
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Iterator\Attachment;

/**
 * Returns the featured image attachment ID ($product->get_image_id())
 * of all the product's children.
 * You can use this to fetch all product images of variations of a variable product
 */
class ChildrenImageIterator implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Iterator\WcProductIterator
{
    /**
     * @var int[]
     */
    private array $children = [];
    private int $key = 0;
    private \WC_Product $product;
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
class FeaturedImageIterator implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Iterator\WcProductIterator
{
    /**
     * @var int The featured image attachment ID
     */
    private int $attachmentId;
    /**
     * @var bool Used to check if the attachment ID has already been returned
     */
    private bool $called = \false;
    private \WC_Product $product;
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
class GalleryImageIterator implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Iterator\WcProductIterator
{
    private \WC_Product $product;
    /**
     * @var int[]
     */
    private array $galleryIds;
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Iterator;

/**
 * Iterates over a collection of WcProductIterator instances as if they were
 * one large Iterator
 */
class WcProductIteratorAggregate implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Iterator\WcProductIterator
{
    /**
     * @var WcProductIterator[]
     */
    private array $iterators;
    private ?\WC_Product $currentProduct = null;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Iterator\WcProductIterator|null|false $currentIterator = null;
    /**
     * @var int The key of the current value
     */
    protected int $key = 0;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Iterator\WcProductIterator ...$iterators)
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
    private function advanceIterator(): void
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
class WcProductAttachmentIterator extends \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Iterator\WcProductIteratorAggregate
{
    private int $limit;
    public function __construct(\WC_Product $product, int $limit = 0, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Iterator\WcProductIterator ...$iterators)
    {
    }
    public function valid(): bool
    {
    }
    public function current(): int
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map;

interface LocalIdProvider
{
    /**
     * @param string $remoteId
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\IdNotFoundException
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
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\IdNotFoundException
     */
    public function remoteId(int $localId): string;
}
/**
 * Interface MapInterface
 * Maps a numeric local ID to an arbitrary string representing a remote ID
 */
interface OneToOneMapInterface extends \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\LocalIdProvider, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\RemoteIdProvider
{
}
interface MultipleRemoteIdProvider
{
    /**
     * @param int $localId
     *
     * @return string[]
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\IdNotFoundException
     */
    public function remoteIds(int $localId): array;
}
interface OneToManyMapInterface extends \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\LocalIdProvider, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MultipleRemoteIdProvider
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
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\IdNotFoundException
     */
    public function deleteRecord(int $localId, string $remoteId): bool;
}
interface RecordMetaProvider
{
    public function metaData(int $localId, string $remoteId): array;
}
/**
 * Class InMemoryMap
 *
 * @package Syde\PayPal\PointOfSale\PhpSdk\Map
 */
class InMemoryMap implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToManyMapInterface, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\RecordMetaProvider
{
    private array $map;
    private array $meta = [];
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\RecordEntity;

class Variant
{
    public const TYPE = 'variant';
    private int $id;
    private string $uuid;
    private int $localId;
    private string $type;
    private int $siteId;
    private array $meta;
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
    public static function fromArray(array $data): self
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map;

/**
 * phpcs:disable WordPress.DB.PreparedSQL.NotPrepared
 * phpcs:disable WordPress.DB.PreparedSQL.InterpolatedNotPrepared
 */
class WpdbMap implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToManyMapInterface, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator, \Countable, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\RecordMetaProvider
{
    private \wpdb $wpdb;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DB\Table $table;
    private string $type;
    private int $siteId;
    /**
     * WpdbMap constructor.
     *
     * @param \wpdb $wpdb
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DB\Table $table
     * @param string $type
     * @param int $siteId
     */
    public function __construct(\wpdb $wpdb, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DB\Table $table, string $type, int $siteId)
    {
    }
    /**
     * @param int $localId
     *
     * @return string
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\IdNotFoundException
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
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\IdNotFoundException
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk;

/**
 * Class NamespacedContainer
 * phpcs:disable SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint
 * phpcs:disable Syde.Functions.ReturnTypeDeclaration.NoReturnType
 *
 * @package Syde\PayPal\PointOfSale\PhpSdk
 */
class NamespacedContainer implements \Syde\Vendor\Zettle\Psr\Container\ContainerInterface
{
    private string $namespace;
    private \Syde\Vendor\Zettle\Psr\Container\ContainerInterface $base;
    public function __construct(string $namespace, \Syde\Vendor\Zettle\Psr\Container\ContainerInterface $base)
    {
    }
    /**
     * @inheritDoc
     */
    public function get(string $id)
    {
    }
    /**
     * @inheritDoc
     */
    public function has(string $id): bool
    {
    }
}
class PhpSdkModule implements \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ServiceModule, \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ExtendingModule, \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ExecutableModule
{
    use \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ModuleClassNameIdTrait;
    public function services(): array
    {
    }
    public function extensions(): array
    {
    }
    public function run(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): bool
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Provider;

class BootstrapProvider implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Provider
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Bootstrap $boostrap;
    /**
     * BootstrapProvider constructor.
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Bootstrap $boostrap
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Bootstrap $boostrap)
    {
    }
    /**
     * @inheritDoc
     */
    public function boot(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): bool
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk;

interface RestClientInterface
{
    /**
     * @param string $url
     * @param array $payload
     * @param callable|null $modifyRequest
     *
     * @return array
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    public function get(string $url, array $payload, ?callable $modifyRequest = null): array;
    /**
     * @param string $url
     * @param array $payload
     * @param callable|null $modifyRequest
     *
     * @return array
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    public function post(string $url, array $payload, ?callable $modifyRequest = null): array;
    /**
     * @param string $url
     * @param array $payload
     * @param callable|null $modifyRequest
     *
     * @return array
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    public function put(string $url, array $payload, ?callable $modifyRequest = null): array;
    /**
     * @param string $url
     * @param array $payload
     * @param callable|null $modifyRequest
     *
     * @return array
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    public function delete(string $url, array $payload, ?callable $modifyRequest = null): array;
}
class Psr18RestClient implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\RestClientInterface
{
    private \Syde\Vendor\Zettle\Psr\Http\Client\ClientInterface $client;
    private \Syde\Vendor\Zettle\Psr\Http\Message\RequestFactoryInterface $requestFactory;
    private \Syde\Vendor\Zettle\Psr\Http\Message\StreamFactoryInterface $streamFactory;
    /**
     * @var callable[]
     */
    private array $listeners;
    public function __construct(\Syde\Vendor\Zettle\Psr\Http\Client\ClientInterface $client, \Syde\Vendor\Zettle\Psr\Http\Message\RequestFactoryInterface $requestFactory, \Syde\Vendor\Zettle\Psr\Http\Message\StreamFactoryInterface $streamFactory, callable ...$listeners)
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
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     *
     * phpcs:disable Syde.Functions.FunctionLength.TooLong
     */
    private function sendRequest(string $method, string $url, array $payload, ?callable $modifyRequest = null): array
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product;

interface ProductRepositoryInterface
{
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
    public function fetchFromTypes(array $types, string $status = \Syde\Vendor\Zettle\Inpsyde\WcProductContracts\ProductState::PUBLISH, int $limit = -1): array;
}
class ArrayProductRepository implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface
{
    /**
     * @var array<int, \WC_Product>
     */
    private array $repository;
    /**
     * ArrayProductRepository constructor.
     *
     * @param array $repository
     */
    public function __construct(array $repository = [])
    {
    }
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
    public function fetchFromTypes(array $types, string $status = \Syde\Vendor\Zettle\Inpsyde\WcProductContracts\ProductState::PUBLISH, int $limit = -1): array
    {
    }
}
class ProductRepository implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface
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
    public function fetchFromTypes(array $types, string $status = \Syde\Vendor\Zettle\Inpsyde\WcProductContracts\ProductState::PUBLISH, int $limit = -1): array
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\Zettle\Product;

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
class ProductRepository implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\Zettle\Product\ProductRepositoryInterface
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToManyMapInterface&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator $productMap;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToManyMapInterface&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator $productMap)
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Serializer;

interface SerializerInterface
{
    public function serialize(object $entity, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Serializer\SerializerInterface $serializer = null): array;
}
class CallbackSerializer implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Serializer\SerializerInterface
{
    /**
     * @var callable
     */
    private $callback;
    public function __construct(callable $callback)
    {
    }
    public function serialize(object $entity, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Serializer\SerializerInterface $serializer = null): array
    {
    }
}
class ContainerAwareEntitySerializer implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Serializer\SerializerInterface
{
    private \Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container;
    public function __construct(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container)
    {
    }
    public function serialize(object $entity, ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Serializer\SerializerInterface $serializer = null): array
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Uuid;

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
    private string $uuid;
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
     */
    private static function toBinary(string $digits): string
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Validator;

interface ValidatorInterface
{
    public function accepts(mixed $entity): bool;
    /**
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ValidatorException
     */
    public function validate(mixed $entity): bool;
}
// phpcs:disable SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint
class CompoundValidator implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Validator\ValidatorInterface
{
    /**
     * @var ValidatorInterface[]
     */
    private array $validators;
    /**
     * CompoundValidator constructor.
     *
     * @param ValidatorInterface ...$validatorInterfaces
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Validator\ValidatorInterface ...$validatorInterfaces)
    {
    }
    public function accepts(mixed $entity): bool
    {
    }
    public function validate(mixed $entity): bool
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
class LocalImageValidator implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Validator\ValidatorInterface
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Provider\Image\UrlProviderInterface $filePathProvider;
    /**
     * @var array<int, string>
     */
    protected array $supportedImageTypes;
    protected int $minFileSize;
    protected int $maxFileSize;
    protected int $minWidth;
    protected int $minHeight;
    protected int $maxWidth;
    protected int $maxHeight;
    /**
     * @param array<int, string> $supportedImageTypes Key - type of exif_imagetype such as IMAGETYPE_JPEG,
     * value - human-readable name.
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Provider\Image\UrlProviderInterface $filePathProvider, array $supportedImageTypes, int $minFileSize, int $maxFileSize, int $minWidth, int $minHeight, int $maxWidth, int $maxHeight)
    {
    }
    public function accepts(mixed $entity): bool
    {
    }
    public function validate(mixed $entity): bool
    {
    }
    /**
     * @param string $filePath
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\Validator\Image\UnsupportedImageFileSizeException
     */
    private function validateImageFileSize(string $filePath): void
    {
    }
    /**
     * @param string $filePath
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\Validator\Image\UnsupportedImageFileTypeException
     */
    private function validatedImageType(string $filePath): void
    {
    }
    /**
     * @param string $filePath
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\Validator\Image\InvalidImageSizeException
     */
    private function validateImageSize(string $filePath): void
    {
    }
}
/**
 * Class PresentationValidator
 *
 * Verifies that a Presentation's color values are 6-digit hex strings
 * phpcs:disable SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint
 *
 * @package Syde\PayPal\PointOfSale\PhpSdk\Validator
 */
class PresentationValidator implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Validator\ValidatorInterface
{
    public const HEX_COLOR_LENGTH = 6;
    public function accepts(mixed $entity): bool
    {
    }
    public function validate(mixed $entity): bool
    {
    }
    /**
     * @param string $string
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ValidatorException
     */
    private function assertValidLongHexValue(string $string): void
    {
    }
}
// phpcs:disable SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint
class ProductValidator implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Validator\ValidatorInterface
{
    public const MINIMUM_VARIANTS_AMOUNT = 0;
    public const MAXIMUM_VARIANTS_AMOUNT = 99;
    public function accepts(mixed $entity): bool
    {
    }
    /**
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\Validator\MaximumVariantsException
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\Validator\MinimumVariantsException
     */
    public function validate(mixed $product): bool
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface $product
     *
     * @return bool
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\Validator\MinimumVariantsException
     *
     */
    public function validateMinimumVariants(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface $product): bool
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface $product
     *
     * @return bool
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\Validator\MaximumVariantsException
     *
     */
    public function validateMaximumVariants(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface $product): bool
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
class ProductVariantOptionDefinitionsValidator implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Validator\ValidatorInterface
{
    public function accepts(mixed $entity): bool
    {
    }
    public function validate(mixed $entity): bool
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface $product
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\Validator\VariantOptionDefinitions\VariantOptionAmountMismatchException
     */
    private function assertVariantOptionAmounts(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface $product): void
    {
    }
}
// phpcs:disable SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint
class StockValidator implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Validator\ValidatorInterface
{
    protected int $maxStock;
    /**
     * @param int $maxStock
     */
    public function __construct(int $maxStock)
    {
    }
    public function accepts(mixed $entity): bool
    {
    }
    public function validate(mixed $entity): bool
    {
    }
}
class VariableProductVatValidator implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Validator\ValidatorInterface
{
    public function accepts(mixed $entity): bool
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface $product
     *
     * @return bool
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\Validator\DifferentVariantVatException
     */
    public function validate(mixed $product): bool
    {
    }
    private function checkVat(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface $product): void
    {
    }
}
class VariantOptionDefinitionsValidator implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Validator\ValidatorInterface
{
    public const MAXIMUM_DEFINITIONS_AMOUNT = 3;
    public function accepts(mixed $entity): bool
    {
    }
    public function validate(mixed $entity): bool
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionDefinitions $definitions
     *
     * @return string[]
     */
    private function validateVariantOptionDefinitions(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\VariantOption\VariantOptionDefinitions $definitions): array
    {
    }
}
// phpcs:disable SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint
class VariantOptionValidator implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Validator\ValidatorInterface
{
    public const MIN_NAME_LENGTH = 1;
    public const MAX_NAME_LENGTH = 30;
    public function accepts(mixed $entity): bool
    {
    }
    public function validate(mixed $entity): bool
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
 * phpcs:disable SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint
 */
class WordPressImageValidator implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Validator\ValidatorInterface
{
    /**
     * @var string[]
     */
    protected array $supportedImageTypes;
    protected int $minFileSize;
    protected int $maxFileSize;
    protected int $minWidth;
    protected int $minHeight;
    protected int $maxWidth;
    protected int $maxHeight;
    /**
     * @param string[] $supportedImageTypes MIME subtypes like 'jpeg', 'png'
     */
    public function __construct(array $supportedImageTypes, int $minFileSize, int $maxFileSize, int $minWidth, int $minHeight, int $maxWidth, int $maxHeight)
    {
    }
    public function accepts(mixed $entity): bool
    {
    }
    public function validate(mixed $entity): bool
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk;

/**
 * // phpcs:disable Squiz.Classes.ValidClassName.NotCamelCaps
 */
class ZettlePhpSdkLibrary
{
    private \Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\PhpSdkModule $module;
    public function __construct(array $factories = [], array $extensions = [])
    {
    }
    public function initialize(): void
    {
    }
    public function container(): \Syde\Vendor\Zettle\Psr\Container\ContainerInterface
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductDebug\Cli;

class ProductsCommand
{
    /**
     * @var string[]
     */
    private array $productTypeWhitelist;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface $productMap;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Products\Products $productsClient;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Sync\Validator\ProductValidator $productValidator;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Sync\Status\StatusCodeMatcher $statusCodeMatcher;
    public function __construct(array $productTypeWhitelist, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface $productMap, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Products\Products $productsClient, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Sync\Validator\ProductValidator $productValidator, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Sync\Status\StatusCodeMatcher $statusCodeMatcher)
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
     * phpcs:disable SlevomatCodingStandard.Complexity.Cognitive.ComplexityTooHigh
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductDebug\Listing;

class CustomColumn
{
    private string $key;
    public function __construct(string $key)
    {
    }
    /**
     * Add Custom Column - if it's not existing
     */
    public function add(array $columns): array
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductDebug;

class ProductDebugModule implements \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ServiceModule, \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ExtendingModule, \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ExecutableModule
{
    use \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ModuleClassNameIdTrait;
    public function services(): array
    {
    }
    public function extensions(): array
    {
    }
    /**
     * phpcs:disable Syde.Functions.FunctionLength.TooLong
     */
    public function run(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): bool
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductDebug\Rest\V1;

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
class ProductValidationEndpoint implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductDebug\Rest\V1\EndpointInterface
{
    public const METHODS = \WP_REST_Server::READABLE;
    public const VERSION = 'v1';
    public const ROUTE = '/validate';
    public const STRATEGY_DEFAULT = 'default';
    public const STRATEGY_LOCAL_DB_CHECK = 'local-db-check';
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Sync\Validator\ProductValidator $productValidator;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Sync\Validator\ProductValidator $productValidator)
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Barcode;

class BarcodeInputField
{
    private string $name;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Barcode\Repository\BarcodeRetrieverInterface $barcodeRetriever;
    private string $label;
    private string $containerClasses;
    /**
     * @param string $containerClasses Additional CSS classes for the container of input field.
     */
    public function __construct(string $name, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Barcode\Repository\BarcodeRetrieverInterface $barcodeRetriever, string $label, string $containerClasses = '')
    {
    }
    // phpcs:ignore Syde.Functions.FunctionLength.TooLong
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Barcode\Repository;

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
class BarcodeRepository implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Barcode\Repository\BarcodeSaverInterface, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Barcode\Repository\BarcodeRetrieverInterface
{
    private string $key;
    private string $filterName;
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Barcode;

class VariantBarcodeSaveHandler
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Barcode\Repository\BarcodeSaverInterface $barcodeSaver;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Barcode\BarcodeInputField $barcodeField;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $wcProductRepository;
    private \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Barcode\Repository\BarcodeSaverInterface $barcodeSaver, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Barcode\BarcodeInputField $barcodeField, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $wcProductRepository, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger)
    {
    }
    public function save(int $variationId, int $variantIndex): void
    {
    }
    private function getBarcode(int $variantIndex): ?string
    {
    }
    private function sanitizeText(string $text): string
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Components;

class ProductSettingsTab
{
    public const SECTION_KEY = 'zettle-integration';
    public const SYNC_EXCLUSION_ID = '_zettle_exclude_from_sync';
    public const NONCE_KEY = 'zettle_integration_settings_nonce';
    public const NONCE_FIELD = 'zettle_integration_settings';
    private \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Components\TermManager $termManager;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $wcProductRepository;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Barcode\BarcodeInputField $barcodeField;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Barcode\Repository\BarcodeSaverInterface $barcodeSaver;
    public function __construct(\Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Components\TermManager $termManager, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $wcProductRepository, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Barcode\BarcodeInputField $barcodeField, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Barcode\Repository\BarcodeSaverInterface $barcodeSaver)
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
    public function addTab(array $tabs): array
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
     * phpcs:disable Syde.Functions.FunctionLength.TooLong
     */
    public function renderSettings(bool $addBarcodeInput): void
    {
    }
    public function saveFields(mixed $postId): void
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
    private string $name;
    private string $slug;
    private string $taxonomy;
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
    public function removeTerm(int $postId): void
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
     * @return array{term_id: int, term_taxonomy_id: int|numeric-string}|\WP_Error
     */
    private function createTerm(?array $args = [])
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Handler;

class ProductExcludeHandler
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Components\TermManager $termManager;
    /**
     * @var callable
     */
    private $createJob;
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $jobRepository;
    /**
     * ProductExcludeHandler constructor.
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Components\TermManager $termManager
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $jobRepository
     * @param callable $createJob
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Components\TermManager $termManager, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $jobRepository, callable $createJob)
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Metabox;

class ReadonlyMetaboxAction implements \Syde\Vendor\Zettle\MetaboxOrchestra\BoxAction
{
    /**
     * @inheritDoc
     */
    public function save(\Syde\Vendor\Zettle\MetaboxOrchestra\AdminNotices $notices): bool
    {
    }
}
// phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
class ZettleProductLibraryLink implements \Syde\Vendor\Zettle\MetaboxOrchestra\PostMetabox
{
    public const ID = 'zettle-product-library-link';
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\Zettle\Product\ProductRepositoryInterface $repository;
    private \Syde\Vendor\Zettle\MetaboxOrchestra\BoxView $view;
    private \Syde\Vendor\Zettle\MetaboxOrchestra\BoxAction $action;
    private string $title;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\Zettle\Product\ProductRepositoryInterface $repository, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Metabox\ZettleProductLibraryLinkView $view, \Syde\Vendor\Zettle\MetaboxOrchestra\BoxAction $action, string $title)
    {
    }
    /**
     * @inheritDoc
     */
    public function create_info(string $showOrSave, \Syde\Vendor\Zettle\MetaboxOrchestra\Entity $entity): \Syde\Vendor\Zettle\MetaboxOrchestra\BoxInfo
    {
    }
    /**
     * @inheritDoc
     */
    public function accept_post(\WP_Post $post, string $saveOrShow): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function view_for_post(\WP_Post $post): \Syde\Vendor\Zettle\MetaboxOrchestra\BoxView
    {
    }
    /**
     * @inheritDoc
     */
    public function action_for_post(\WP_Post $post): \Syde\Vendor\Zettle\MetaboxOrchestra\BoxAction
    {
    }
}
class ZettleProductLibraryLinkView implements \Syde\Vendor\Zettle\MetaboxOrchestra\BoxView
{
    private string $baseLink;
    public function __construct(string $baseLink)
    {
    }
    public function render(\Syde\Vendor\Zettle\MetaboxOrchestra\BoxInfo $info): string
    {
    }
    private function productLink(string $productUuid): string
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings;

class ProductSettingsModule implements \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ServiceModule, \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ExtendingModule, \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ExecutableModule
{
    use \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ModuleClassNameIdTrait;
    public function services(): array
    {
    }
    public function extensions(): array
    {
    }
    public function run(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): bool
    {
    }
    private function addVariationBarcodeHandlers(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Barcode\BarcodeInputField $barcodeField, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $wcProductRepository, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Barcode\VariantBarcodeSaveHandler $saveHandler): void
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Provider;

class CustomProductTabProvider implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Provider
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Components\ProductSettingsTab $settingsTab;
    /**
     * CustomProductTabProvider constructor.
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Components\ProductSettingsTab $settingsTab
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Components\ProductSettingsTab $settingsTab)
    {
    }
    /**
     * @inheritDoc
     */
    public function boot(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): bool
    {
    }
}
class ProductExcludeProvider implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Provider
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Handler\ProductExcludeHandler $productExcludeHandler;
    /**
     * ProductExcludeProvider constructor.
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Handler\ProductExcludeHandler $productExcludeHandler
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Handler\ProductExcludeHandler $productExcludeHandler)
    {
    }
    /**
     * @inheritDoc
     */
    public function boot(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): bool
    {
    }
}
class SyncVisibilityTaxonomyProvider implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Provider
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Taxonomy\ZettleSyncVisibilityTaxonomy $syncVisibilityTaxonomy;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Taxonomy\ZettleSyncVisibilityTaxonomy $syncVisibilityTaxonomy)
    {
    }
    /**
     * @inheritDoc
     */
    public function boot(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): bool
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Taxonomy;

class ZettleSyncVisibilityTaxonomy
{
    private string $key;
    private string $attachedPostType;
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
    public function create(): void
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Queue;

class ZettleQueueModule implements \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ServiceModule, \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ExtendingModule, \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ExecutableModule
{
    use \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ModuleClassNameIdTrait;
    public function services(): array
    {
    }
    public function extensions(): array
    {
    }
    public function run(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): bool
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Settings\Exception;

class SettingNotFoundException extends \Exception implements \Syde\Vendor\Zettle\Psr\Container\NotFoundExceptionInterface
{
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Settings\Provider;

class SettingsPageProvider implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Provider
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
    public function boot(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): bool
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Settings;

class SettingsModule implements \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ServiceModule, \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ExecutableModule
{
    use \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ModuleClassNameIdTrait;
    public function services(): array
    {
    }
    public function run(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): bool
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Settings\WC;

/**
 * Page displayed in a tab in WooCommerce --> Settings.
 *
 * Delegates rendering and saving to WC_Settings_API (ZettleIntegration).
 */
class SettingsPage extends \WC_Settings_Page
{
    private \WC_Settings_API $settingsApi;
    private \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger;
    private bool $isDebugMode;
    /**
     * @param \WC_Settings_API $settingsApi
     * @param string $id
     * @param string $label
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     * @param bool $isDebugMode
     */
    public function __construct(\WC_Settings_API $settingsApi, string $id, string $label, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger, bool $isDebugMode)
    {
    }
    /**
     * {@inheritDoc}
     *
     * @return array
     *
     * phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
     * phpcs:disable Syde.Functions.ReturnTypeDeclaration.NoReturnType
     */
    public function get_settings()
    {
    }
    public function output(): void
    {
    }
    /**
     * {@inheritDoc}
     *
     * @return void
     *
     * phpcs:disable Syde.Functions.ReturnTypeDeclaration.NoReturnType
     */
    public function save()
    {
    }
}
class ZettleIntegration extends \WC_Settings_API
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Settings\WC\ZettleIntegrationTemplate $header;
    private string $currentState;
    /**
     * @var \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Settings\FieldRenderer\FieldRendererInterface[]
     */
    private array $renderers;
    /**
     * @var string[]
     */
    private array $readonlyFieldTypes = ['title', 'zettle-onboarding'];
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Container\WritableContainerInterface $container;
    public function __construct(string $id, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Settings\WC\ZettleIntegrationTemplate $header, string $currentState, array $formFields, callable $isIntegrationPage, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Container\WritableContainerInterface $container, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Settings\FieldRenderer\FieldRendererInterface ...$renderers)
    {
    }
    /**
     * @return string
     * phpcs:disable Syde.Functions.ReturnTypeDeclaration.NoReturnType
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
     * phpcs:disable SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint
     * phpcs:disable Syde.Functions.ArgumentTypeDeclaration.NoArgumentType
     */
    public function get_option($key, $emptyValue = null)
    {
    }
    /**
     * @return bool|void
     * phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
     */
    public function process_admin_options()
    {
    }
    /**
     * Output the gateway settings screen.
     */
    public function admin_options(): void
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
     * phpcs:disable SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     * phpcs:disable Syde.Functions.ReturnTypeDeclaration.NoReturnType
     * phpcs:disable Syde.Functions.ArgumentTypeDeclaration.NoArgumentType
     *
     * @return string
     */
    public function generate_settings_html($formFields = [], $echo = \true)
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
     * phpcs:disable SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint
     * phpcs:disable Syde.Functions.ReturnTypeDeclaration.NoReturnType
     * phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
     * phpcs:disable Syde.Functions.ArgumentTypeDeclaration.NoArgumentType
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
class ZettleIntegrationHeader implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Settings\WC\ZettleIntegrationTemplate
{
    use \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Onboarding\Settings\View\ButtonRendererTrait;
    /**
     * @var callable
     */
    private $accountLinkData;
    private array $shopLinkData;
    /**
     * @var callable
     */
    private $linkData;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Provider\Organization\OrganizationProvider $organizationProvider;
    private array $disconnectAccountData;
    private \Countable $productCounter;
    private ?int $firstImportTimestamp = null;
    /**
     * @var callable(int):string
     */
    private $timestampFormatter;
    private bool $priceSyncEnabled;
    private string $title;
    private string $description;
    private string $currentState;
    /**
     * @var callable
     */
    private $authCheck;
    private string $imgResourcesUrl;
    public function __construct(callable $accountLinkData, array $shopLinkData, callable $linkData, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Provider\Organization\OrganizationProvider $organizationProvider, array $disconnectAccountData, \Countable $productCounter, ?int $firstImportTimestamp, callable $timestampFormatter, bool $priceSyncEnabled, string $title, string $description, string $currentState, callable $authCheck, string $imgResourcesUrl)
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
    // phpcs:ignore Syde.Functions.FunctionLength.TooLong
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
    private function renderLink(string $url, string $label, bool $withIcon = \false, string $class = 'link', string $labelClass = 'link', string $target = '_blank', bool $popup = \false): string
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
    private function renderButton(string $label, string $name, string $value, bool $withIcon = \false, string $class = 'btn btn-primary', string $labelClass = 'btn', string $type = 'submit', array $otherAttributes = []): string
    {
    }
    /**
     * @param string $label
     * @param string $class
     * @param bool $withIcon
     *
     * @return string
     */
    private function renderLabel(string $label, string $class, bool $withIcon = \false): string
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Sync\Cli;

class ExcludeCommand
{
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job $deleteProductJob;
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job $unlinkProductJob;
    private \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger;
    /**
     * ExcludeCommand constructor.
     *
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job $deleteProductJob
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job $unlinkProductJob
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     */
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job $deleteProductJob, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job $unlinkProductJob, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger)
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
    public function product(array $args, array $assocArgs): void
    {
    }
}
class ExportCommand
{
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor $processor;
    /**
     * @var callable
     */
    private $createJobRecord;
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor $processor, callable $createJobRecord)
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
    public function products(array $args, array $assocArgs): void
    {
    }
}
class ResetCommand
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DB\Table $idMapTable;
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Db\Table $queueTable;
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job $wipeRemoteJob;
    private \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger;
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job $wipeRemoteJob, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DB\Table $idMapTable, \Syde\Vendor\Zettle\Inpsyde\Queue\Db\Table $queueTable)
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
     * @throws \Syde\Vendor\Zettle\Inpsyde\Queue\Exception\QueueRuntimeException
     */
    public function products(array $args, array $assocArgs): void
    {
    }
}
class SyncCommand
{
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor $processor;
    /**
     * @var callable
     */
    private $createJobRecord;
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor $processor, callable $createJobRecord)
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
    public function product(array $args, array $assocArgs): void
    {
    }
}
class UnlinkCommand
{
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job $unlinkProductJob;
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job $unlinkVariantJob;
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job $unlinkImagesJob;
    private \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger;
    /**
     * UnlinkCommand constructor.
     *
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job $unlinkProductJob
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job $unlinkVariantJob
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job $unlinkImagesJob
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     */
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job $unlinkProductJob, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job $unlinkVariantJob, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job $unlinkImagesJob, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger)
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
    public function product(array $args, array $assocArgs): void
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
    public function variant(array $args, array $assocArgs): void
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
    public function images(array $args, array $assocArgs): void
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
    public function image(array $args, array $assocArgs): void
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Sync\Job;

class DeleteProductJob implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job
{
    use \Syde\Vendor\Zettle\Inpsyde\Queue\ExceptionLoggingTrait;
    public const TYPE = 'delete-product';
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Products\Products $productsClient;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\RemoteIdProvider $remoteIdProvider;
    /**
     * @var callable
     */
    private $createJobRecord;
    /**
     * DeleteProductJob constructor.
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Products\Products $productsClient
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\RemoteIdProvider $remoteIdProvider, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Products\Products $productsClient, callable $createJobRecord)
    {
    }
    /**
     * @inheritDoc
     */
    public function execute(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): bool
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
 * @package Syde\PayPal\PointOfSale\Sync\Job
 */
class EnqueueProductSyncJob implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job
{
    public const TYPE = 'enqueue-products-to-sync';
    private array $productTypeWhitelist;
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
    public function execute(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): bool
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Sync;

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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Sync\Job;

/**
 * This Job is a central piece of infrastructure that synchronizes the current state of a WC_Product
 * over to Zettle. It fetches the WC_Product from the database and passes it into the Builder.
 * The result is then either updated or created via REST api
 * depending on whether or not the Product already exists.
 *
 * For newly created products, it will also dispatch a follow-up job to sync the product inventory
 * if needed
 */
class ExportProductJob implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job
{
    use \Syde\Vendor\Zettle\Inpsyde\Queue\ExceptionLoggingTrait;
    use \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Sync\VariableInventoryChecker;
    public const TYPE = 'sync-product';
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Products\Products $productsClient;
    /**
     * We are using a custom QueueProcessor for executing follow-up jobs directly
     * instead of adding them to the repository that we get passed in execute()
     *
     * Doing that makes the number of sync-jobs completely predictable: 1 product -> 1 job
     * -which in turn helps us determine how far we've progressed in a larger sync process.
     *
     * This instance should therefore run on a separate JobRepository
     *
     */
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor $processor;
    /**
     * @var callable
     */
    private $createJobRecord;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\RemoteIdProvider $remoteIdProvider;
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
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Products\Products $productsClient
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\RemoteIdProvider $remoteIdProvider
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor $processor
     * @param callable $createJobRecord
     * @param callable(int):bool $isSyncable
     * @param callable(int):bool $productStatus
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Products\Products $productsClient, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\RemoteIdProvider $remoteIdProvider, \Syde\Vendor\Zettle\Inpsyde\Queue\Processor\QueueProcessor $processor, callable $createJobRecord, callable $isSyncable, callable $productStatus)
    {
    }
    /**
     * @inheritDoc
     *
     * phpcs:disable Syde.Functions.FunctionLength.TooLong
     */
    public function execute(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductTransferInterface $product
     * @param int $localProductId
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     * @param callable|null $onCreate
     *
     * @throws \Syde\Vendor\Zettle\Inpsyde\Queue\Exception\QueueRuntimeException
     */
    private function syncProduct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductTransferInterface $product, int $localProductId, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger, ?callable $onCreate = null): void
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
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductTransferInterface $product
     * @param int $localProductId
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     *
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    private function attemptUpdate(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductTransferInterface $product, int $localProductId, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): void
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
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\LazyProduct $product
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     * @param callable|null $onSuccess
     *
     * @throws \Syde\Vendor\Zettle\Inpsyde\Queue\Exception\QueueRuntimeException
     */
    private function attemptCreate(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\LazyProduct $product, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger, ?callable $onSuccess = null): void
    {
    }
    /**
     * This method is run when we had a validation error with the current state of the WC_Product.
     * It can no longer be synced to iZ, so any further changes will never arrive there.
     * Thus, deleting it remotely is our only real course of action to prevent getting data out of sync.
     *
     * @param int $productId
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     */
    private function removeProductIfExists(int $productId, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): void
    {
    }
}
class ReExportProductJob implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job
{
    use \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Sync\VariableInventoryChecker;
    public const TYPE = 're-export-product';
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\Zettle\Product\ProductRepositoryInterface $repository;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $wcRepository;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator $variantMap;
    /**
     * @var callable
     */
    private $createJobRecord;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\Zettle\Product\ProductRepositoryInterface $repository, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $wcRepository, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator $variantMap, callable $createJobRecord)
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
    public function execute(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @param \WC_Product $product
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository
     *
     * @return bool
     */
    public function removeProduct(\WC_Product $product, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository): bool
    {
    }
    /**
     * @param \WC_Product $product
     * @param int[] $variationIds
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     *
     * @return bool
     */
    public function exportProduct(\WC_Product $product, array $variationIds, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): bool
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
 * @package Syde\PayPal\PointOfSale\Sync\Job
 */
class SetInventoryTrackingJob implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job
{
    use \Syde\Vendor\Zettle\Inpsyde\Queue\ExceptionLoggingTrait;
    public const TYPE = 'set-inventory-tracking';
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Inventory\Inventory $inventoryClient;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Inventory\Inventory $inventoryClient, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder)
    {
    }
    /**
     * @inheritDoc
     */
    public function execute(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @param string $uuid
     * @param int $productId
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     *
     * @return bool
     */
    private function startTracking(string $uuid, int $productId, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @param string $uuid
     * @param int $productId
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface $product
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     *
     * @return bool
     */
    private function stopTracking(string $uuid, int $productId, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface $product, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): bool
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
class SetStateJob implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job
{
    public const TYPE = 'set-state';
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
    public function execute(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): bool
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
class SyncStockJob implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job
{
    use \Syde\Vendor\Zettle\Inpsyde\Queue\ExceptionLoggingTrait;
    public const TYPE = 'sync-product-stock';
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Inventory\Inventory $inventoryClient;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToManyMapInterface $map;
    private int $maxStockChange;
    private \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job $setInventoryTrackingJob;
    /**
     * @param int $maxStockChange The API does not allow transactions larger than 100.000
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Inventory\Inventory $inventoryClient, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToManyMapInterface $map, int $maxStockChange, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job $setInventoryTrackingJob)
    {
    }
    /**
     * @inheritDoc
     *
     * phpcs:disable Syde.Functions.FunctionLength.TooLong
     * phpcs:disable SlevomatCodingStandard.Complexity.Cognitive.ComplexityTooHigh
     */
    public function execute(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * Dispatches job to enable inventory tracking for the given WC_Product
     * If we are dealing with a WC_Product_Variation, we will use the parent
     * because there is no variant-level inventory tracking at iZ
     *
     * @param \WC_Product $wcProduct
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface $context
     */
    private function dispatchSetInventoryTrackingJob(\WC_Product $wcProduct, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface $context): void
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
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\BuilderException
     */
    private function getProductUuid(\WC_Product $wcProduct): string
    {
    }
    /**
     * Grab the current Zettle stock from the Inventory API. Return 0
     * if we don't know about the remote product yet.
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Inventory\Inventory $inventory
     * @param string $variantUuid
     *
     * @return int
     */
    private function fetchRemoteStock(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Inventory\Inventory $inventory, string $variantUuid): int
    {
    }
    private function syncVariant(string $productUuid, string $variantUuid, array $transaction, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): bool
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
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     *
     * @return array<string, int>
     *
     * phpcs:disable Syde.Functions.FunctionLength.TooLong
     * phpcs:disable SlevomatCodingStandard.Complexity.Cognitive.ComplexityTooHigh
     */
    private function fetchVariantUuids(\WC_Product $product, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): array
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
 * @package Syde\PayPal\PointOfSale\Sync\Job
 */
class UnlinkImages implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job
{
    public const TYPE = 'unlink-images';
    public const PRODUCT_TYPE = 'product';
    public const VARIANT_TYPE = 'variant';
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToManyMapInterface&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\RemoteIdProvider $imageIdMap;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToManyMapInterface&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\RemoteIdProvider $imageIdMap, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository)
    {
    }
    /**
     * @inheritDoc
     */
    public function execute(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @param int $productId
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     *
     * @return bool
     */
    protected function fromProductId(int $productId, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @param int $attachmentId
     * @param string $type
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     *
     * @return bool
     */
    protected function fromAttachmentId(int $attachmentId, string $type, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @param int $productId
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     */
    private function removeFromProductId(int $productId, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): void
    {
    }
    /**
     * @param \WC_Product_Variation $variation
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     */
    private function removeFromVariation(\WC_Product_Variation $variation, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): void
    {
    }
    /**
     * @param \WC_Product $product
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     */
    private function removeFromProduct(\WC_Product $product, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): void
    {
    }
    /**
     * @param \WC_Product $product
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     */
    private function cleanupVariants(\WC_Product $product, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): void
    {
    }
    /**
     * @param string $type
     * @param int $attachmentId
     * @param string $remoteId
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     */
    private function cleanupImage(string $type, int $attachmentId, string $remoteId, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): void
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
class UnlinkProductJob implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job
{
    public const TYPE = 'unlink-product';
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface $productIdMap;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToManyMapInterface $variantIdMap;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface $productIdMap, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToManyMapInterface $variantIdMap, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Repository\WooCommerce\Product\ProductRepositoryInterface $repository)
    {
    }
    public function isUnique(): bool
    {
    }
    public function type(): string
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface $context
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     *
     * @return bool
     */
    public function execute(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): bool
    {
    }
    private function logSuccess(\Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger, string $id): void
    {
    }
    /**
     * @param int $localId
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\IdNotFoundException
     */
    private function removeFromLocalId(int $localId, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): void
    {
    }
    /**
     * @param string $remoteId
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\IdNotFoundException
     */
    private function removeFromRemoteId(string $remoteId, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): void
    {
    }
    /**
     * @param int $localId
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\IdNotFoundException
     */
    private function cleanupVariants(int $localId, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): void
    {
    }
    private function variantIds(\WC_Product $product): array
    {
    }
}
class UnlinkVariantJob implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job
{
    public const TYPE = 'unlink-variant';
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator $variantMap;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator $variantMap)
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
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface $context
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     *
     * @return bool
     */
    public function execute(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @param int $variationId
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     *
     * @return bool
     */
    private function removeWithVariationId(int $variationId, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @param string $variantUuid
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     *
     * @return bool
     */
    private function removeWithVariantUuid(string $variantUuid, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): bool
    {
    }
    /**
     * @param int $variantId
     * @param string $uuid
     *
     * @return bool
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\IdNotFoundException
     */
    private function deleteVariantRecord(int $variantId, string $uuid): bool
    {
    }
}
class WipeRemoteProductsJob implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job
{
    use \Syde\Vendor\Zettle\Inpsyde\Queue\ExceptionLoggingTrait;
    public const TYPE = 'wipe-remote-products';
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Products\Products $productsClient;
    /**
     * WipeRemoteProductsJob constructor.
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Products\Products $productsClient
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Products\Products $productsClient)
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface $context
     * @param \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository
     * @param \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger
     *
     * @return bool
     */
    public function execute(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): bool
    {
    }
    public function isUnique(): bool
    {
    }
    public function type(): string
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Sync\Listener;

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
    use \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Sync\VariableInventoryChecker;
    /**
     * @var callable
     */
    private $createJob;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface $productMap;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface $productMap, callable $createJob)
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
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator $productMap;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator $variantMap;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Products\Products $productsClient;
    private \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator $productMap, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface&\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\MapRecordCreator $variantMap, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Products\Products $productsClient, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger)
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
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface|null
     */
    private function fetchProductWithUuid(string $uuid): ?\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\DAL\Entity\Product\ProductInterface
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
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Sync\Listener\DePublishListener $depublishListener;
    /**
     * @var callable(int):bool
     */
    private $isSyncable;
    /**
     * @param callable(int):bool $isSyncable A function accepting a WC product ID
     * and returning whether it can be synced (valid).
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Sync\Listener\DePublishListener $depublishListener, callable $isSyncable)
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
    use \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Sync\VariableInventoryChecker;
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
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Sync\Listener\VariableManageStockListener $variableListener;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Sync\Listener\VariableManageStockListener $variableListener)
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Sync;

interface PriceSyncMode
{
    public const ENABLED = 'gross';
    public const DISABLED = 'zero';
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Sync\Status;

/**
 * @implements \ArrayAccess<string, string>
 */
class StatusCodeMatcher implements \ArrayAccess
{
    /**
     * @var array<string, string>
     */
    private array $statusMap;
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Sync;

class SyncModule implements \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ServiceModule, \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ExtendingModule, \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ExecutableModule
{
    use \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ModuleClassNameIdTrait;
    public function services(): array
    {
    }
    public function extensions(): array
    {
    }
    public function run(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): bool
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Sync\Validator;

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
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface $productMap;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Components\TermManager $termManager;
    /**
     * @var string[]
     */
    private array $allowedProductTypes;
    private bool $isBuildingAllowed;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder;
    private \Syde\Vendor\Zettle\Inpsyde\Debug\ExceptionHandler $exceptionHandler;
    /**
     * @param bool $isBuildingAllowed Whether it can try to build the product using $builder
     * to fully validate it.
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToOneMapInterface $productMap, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\ProductSettings\Components\TermManager $termManager, array $allowedProductTypes, bool $isBuildingAllowed, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Builder\BuilderInterface $builder, \Syde\Vendor\Zettle\Inpsyde\Debug\ExceptionHandler $exceptionHandler)
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
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Webhooks;

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
    public function activate(): void
    {
    }
    public function deactivate(): void
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Webhooks\Cli;

class WebhookCommand
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Subscriptions $subscriptions;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Webhooks\WebhookStorageInterface $webhookStorage;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Webhooks\WebhookRegistration $webhookRegistration;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Subscriptions $subscriptions, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Webhooks\WebhookStorageInterface $webhookStorage, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Webhooks\WebhookRegistration $webhookRegistration)
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
    public function register(): void
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
    public function list(): void
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
    public function delete(array $args, array $assocArgs): void
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Webhooks;

interface EventName
{
    public const INVENTORY_BALANCE_CHANGED = 'InventoryBalanceChanged';
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Webhooks\Handler;

interface WebhookHandler
{
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Payload $payload
     *
     * @return bool
     */
    public function accepts(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Payload $payload): bool;
    /**
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Payload $payload
     */
    public function handle(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Payload $payload): void;
}
class InventoryBalanceChangedHandler implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Webhooks\Handler\WebhookHandler
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Webhooks\Job\InventoryBalanceChangedJob $inventoryBalanceChanged;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToManyMapInterface $variantIdMap;
    private string $integrationUuid;
    private \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Webhooks\Job\InventoryBalanceChangedJob $inventoryBalanceChanged, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Map\OneToManyMapInterface $variantIdMap, string $integrationUuid)
    {
    }
    /**
     * @inheritDoc
     */
    public function accepts(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Payload $payload): bool
    {
    }
    /**
     * @inheritDoc
     *
     * @throws \Syde\Vendor\Zettle\Inpsyde\Queue\Exception\QueueRuntimeException
     * phpcs:disable Syde.Functions.FunctionLength.TooLong
     */
    public function handle(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Payload $payload): void
    {
    }
}
class InventoryTrackingStartedHandler implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Webhooks\Handler\WebhookHandler
{
    /**
     * @inheritDoc
     */
    public function accepts(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Payload $payload): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function handle(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Payload $payload): void
    {
    }
}
class InventoryTrackingStoppedHandler implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Webhooks\Handler\WebhookHandler
{
    /**
     * @inheritDoc
     */
    public function accepts(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Payload $payload): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function handle(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Payload $payload): void
    {
    }
}
class LogHandler implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Webhooks\Handler\WebhookHandler
{
    private \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger;
    public function __construct(\Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger)
    {
    }
    /**
     * @inheritDoc
     */
    public function accepts(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Payload $payload): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function handle(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Payload $payload): void
    {
    }
}
class ProductDeletedHandler implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Webhooks\Handler\WebhookHandler
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Sync\Job\UnlinkProductJob $unlinkProductJob;
    private \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Sync\Job\UnlinkProductJob $unlinkProductJob, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger)
    {
    }
    /**
     * @inheritDoc
     */
    public function accepts(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Payload $payload): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function handle(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Payload $payload): void
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Webhooks\Job;

class InventoryBalanceChangedJob implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job
{
    public const TYPE = 'webhook-inventory-balance-changed';
    private \Syde\Vendor\Zettle\Inpsyde\WcEvents\Toggle $toggle;
    /**
     * @var callable
     */
    private $createJobRecord;
    /**
     * InventoryBalanceChangedJob constructor.
     *
     * @param \Syde\Vendor\Zettle\Inpsyde\WcEvents\Toggle $toggle Needed to tell WcEvents that we want to update products in silence
     * @param callable $createJobRecord
     */
    public function __construct(\Syde\Vendor\Zettle\Inpsyde\WcEvents\Toggle $toggle, callable $createJobRecord)
    {
    }
    /**
     * @inheritDoc
     */
    public function execute(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): bool
    {
    }
    public function isUnique(): bool
    {
    }
    public function type(): string
    {
    }
}
class WebhookRegistrationJob implements \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\Job
{
    public const TYPE = 'webhook-registration';
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
    public function execute(\Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\ContextInterface $context, \Syde\Vendor\Zettle\Inpsyde\Queue\Queue\Job\JobRepository $repository, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger): bool
    {
    }
    public function isUnique(): bool
    {
    }
    public function type(): string
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Webhooks\Rest;

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
 * @package Syde\PayPal\PointOfSale\Webhooks\Rest
 */
class SignatureVerifier implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Webhooks\Rest\Verifier
{
    private string $signingKey;
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
class WebhookListenerEndpoint implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Webhooks\Rest\Endpoint
{
    use \Syde\Vendor\Zettle\Inpsyde\Queue\ExceptionLoggingTrait;
    private \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\PayloadFactory $payloadFactory;
    /**
     * @var \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Webhooks\Handler\WebhookHandler[]
     */
    private array $handlers;
    private static bool $shutDownCalled = \false;
    public function __construct(\Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\PayloadFactory $payloadFactory, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Webhooks\Handler\WebhookHandler ...$handlers)
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
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Payload $payload
     */
    public function registerShutdownHook(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Payload $payload): void
    {
    }
    private function handle(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Payload $payload): void
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Webhooks;

/**
 * Unsubscribes all our webhooks.
 */
class WebhookDeletion
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Webhook $local;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Subscriptions $subscriptions;
    private \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger;
    /**
     * @var callable
     */
    private $canManageWebhooks;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Webhook $local, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Subscriptions $subscriptions, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger, callable $canManageWebhooks)
    {
    }
    /**
     * Execute Deletion of registered Webhooks, only for this destination
     *
     * @return void
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\WebhookException|\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     */
    public function execute(): void
    {
    }
}
class WebhookModule implements \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ServiceModule, \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ExecutableModule
{
    use \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ModuleClassNameIdTrait;
    /**
     * @inheritDoc
     */
    public function services(): array
    {
    }
    /**
     * @inheritDoc
     */
    public function run(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): bool
    {
    }
    private function registerCliCommand(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): void
    {
    }
    /**
     * Register Listener Webhook Endpoint
     *
     * @param \Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container
     */
    private function registerRestRoute(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): void
    {
    }
}
/**
 * Subscribes the given webhook to zettle.
 */
class WebhookRegistration
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Webhook $local;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Subscriptions $subscriptions;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Webhooks\WebhookDeletion $webhookDeletion;
    private \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger;
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Webhook $local, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Subscriptions $subscriptions, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Webhooks\WebhookDeletion $webhookDeletion, \Syde\Vendor\Zettle\Psr\Log\LoggerInterface $logger)
    {
    }
    /**
     * Execute Registration of Webhooks, also Delete outdated Webhooks and create new ones
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Webhook
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\ZettleRestException
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\WebhookException
     */
    public function execute(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Webhook
    {
    }
}
interface WebhookStorageInterface
{
    /**
     * Persist the Webhook instance
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Webhook $webhook
     *
     * @return bool
     */
    public function persist(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Webhook $webhook): bool;
    /**
     * Fetch the Webhook instance from the persistence layer
     *
     * @return \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Webhook
     *
     * @throws \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\Exception\WebhookException
     */
    public function fetch(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Webhook;
    /**
     *
     * @return bool
     */
    public function clear(): bool;
}
class WebhookStorage implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Webhooks\WebhookStorageInterface
{
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\WebhookFactory $webhookFactory;
    private \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Container\WritableContainerInterface $optionContainer;
    private string $optionKey;
    private array $defaultConfig;
    /**
     * WpOptionWebhookStorage constructor.
     *
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\WebhookFactory $webhookFactory
     * @param \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Container\WritableContainerInterface $optionContainer
     * @param string $optionKey
     * @param array $defaultConfig
     */
    public function __construct(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\WebhookFactory $webhookFactory, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Container\WritableContainerInterface $optionContainer, string $optionKey, array $defaultConfig)
    {
    }
    /**
     * @inheritDoc
     */
    public function persist(\Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Webhook $webhook): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function fetch(): \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\PhpSdk\API\Webhooks\Entity\Webhook
    {
    }
    /**
     * @return bool
     */
    public function clear(): bool
    {
    }
}
namespace Syde\Vendor\Zettle\Inpsyde\WcStatusReport;

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
    public function getValue(): mixed;
}
class ReportItem implements \Syde\Vendor\Zettle\Inpsyde\WcStatusReport\ReportItemInterface
{
    protected string $label;
    protected string $exportedLabel;
    protected mixed $value;
    public function __construct(string $label, string $exportedLabel, mixed $value)
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
    public function getValue(): mixed
    {
    }
}
/**
 * The interface for creating report items.
 * @see ReportItemInterface
 */
interface ReportItemFactoryInterface
{
    public function createReportItem(string $label, string $exportedLabel, mixed $value): \Syde\Vendor\Zettle\Inpsyde\WcStatusReport\ReportItemInterface;
}
class ReportItemFactory implements \Syde\Vendor\Zettle\Inpsyde\WcStatusReport\ReportItemFactoryInterface
{
    /**
     * @inheritDoc
     */
    public function createReportItem(string $label, string $exportedLabel, mixed $value): \Syde\Vendor\Zettle\Inpsyde\WcStatusReport\ReportItemInterface
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
class StatusReport implements \Syde\Vendor\Zettle\Inpsyde\WcStatusReport\StatusReportInterface
{
    protected string $title;
    /**
     * @var iterable<ReportItem>
     */
    protected iterable $items;
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
    public function render(\Syde\Vendor\Zettle\Inpsyde\WcStatusReport\StatusReportInterface $report): string;
}
class StatusReportRenderer implements \Syde\Vendor\Zettle\Inpsyde\WcStatusReport\StatusReportRendererInterface
{
    /**
     * @inheritDoc
     */
    public function render(\Syde\Vendor\Zettle\Inpsyde\WcStatusReport\StatusReportInterface $report): string
    {
    }
}
class WcStatusReportModule implements \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ServiceModule, \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ExecutableModule
{
    use \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ModuleClassNameIdTrait;
    /**
     * @inheritDoc
     */
    public function services(): array
    {
    }
    /**
     * @inheritDoc
     */
    public function run(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): bool
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Container;

interface WritableContainerInterface extends \Syde\Vendor\Zettle\Psr\Container\ContainerInterface
{
    public function set(string $id, mixed $value): void;
    public function unset(string $key): void;
}
interface ClearableContainerInterface
{
    public function clear(): void;
}
class ArrayContainer implements \Syde\Vendor\Zettle\Psr\Container\ContainerInterface, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Container\WritableContainerInterface, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Container\ClearableContainerInterface
{
    private array $options;
    public function __construct(array $options)
    {
    }
    /**
     * @inheritDoc
     */
    public function get(string $id)
    {
    }
    /**
     * @inheritDoc
     */
    public function has(string $id): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function set(string $key, mixed $value): void
    {
    }
    public function unset(string $key): void
    {
    }
    public function clear(): void
    {
    }
}
class WpOptionContainer implements \Syde\Vendor\Zettle\Psr\Container\ContainerInterface, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Container\WritableContainerInterface, \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Container\ClearableContainerInterface
{
    private array $options;
    private string $optionKey;
    public function __construct(string $optionKey)
    {
    }
    public function clear(): void
    {
    }
    public function get(string $id)
    {
    }
    public function has(string $id): bool
    {
    }
    public function set(string $key, mixed $value): void
    {
    }
    public function unset(string $key): void
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale;

/**
 * Keeps the hook names used before the 2.0.0 rebranding working.
 *
 * For every renamed hook a bridge callback is attached to the current hook. The bridge
 * re-fires the deprecated hook through WP core's `apply_filters_deprecated()` /
 * `do_action_deprecated()`, which call `_deprecated_hook()` and then run whatever is still
 * attached to the old name. Core short-circuits both helpers when nothing is attached to the
 * deprecated hook, so sites already using the new names see no notice.
 *
 * Known limitations:
 * - Callbacks attached to a deprecated hook keep their order among themselves, but all run at
 *   the bridge's single priority (10) on the current hook rather than at their own. Since the
 *   bridge is registered during bootstrap, it precedes anything else added at priority 10, so
 *   in practice the deprecated chain runs first among those.
 * - Neither `apply_filters_deprecated()` nor `do_action_deprecated()` bumps a hook counter
 *   itself, so the counter for a deprecated name therefore tracks "did this actually run something",
 *   not "did the event happen". That is, code that probes with `did_action()` instead of
 *   attaching a callback is not covered.
 */
class DeprecatedHooks
{
    /**
     * Deprecated filter name => current filter name.
     *
     * @var array<string, string>
     */
    private const FILTERS = ['zettle-pos-integration.barcode.value' => 'paypal-point-of-sale.barcode.value', 'zettle-pos-integration.barcode.standard-input-ui-enabled' => 'paypal-point-of-sale.barcode.standard-input-ui-enabled', 'zettle-pos-integration.http.client' => 'paypal-point-of-sale.http.client', 'zettle-pos-integration.sync.clear-cache-before-stock-sync' => 'paypal-point-of-sale.sync.clear-cache-before-stock-sync'];
    /**
     * Deprecated action name => current action name.
     *
     * @var array<string, string>
     */
    private const ACTIONS = ['zettle-pos-integration.init' => 'paypal-point-of-sale.init', 'zettle-pos-integration.migrate' => 'paypal-point-of-sale.migrate', 'zettle-pos-integration.activate' => 'paypal-point-of-sale.activate', 'zettle-pos-integration.deactivate' => 'paypal-point-of-sale.deactivate', 'zettle.clear-product-cache' => 'paypal-pos.clear-product-cache'];
    /**
     * The plugin version the hooks above were renamed in.
     */
    private const DEPRECATED_SINCE = '2.0.0';
    /**
     * Passed as `$accepted_args` so a bridge always receives every argument the current hook was
     * fired with: `WP_Hook::apply_filters()` only slices when `accepted_args` is lower than the
     * number of passed arguments. Forwarding verbatim keeps the deprecated hook's payload
     * identical - including the empty string `do_action()` substitutes for argument-less actions.
     */
    private const ACCEPT_ALL_ARGS = \PHP_INT_MAX;
    public function register(): void
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Http;

interface PageReloaderInterface
{
    /**
     * Reload the current URL.
     */
    public function reload(): void;
}
class PageReloader implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Http\PageReloaderInterface
{
    /**
     * @inheritDoc
     */
    public function reload(): void
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale;

class PluginModule implements \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ServiceModule, \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ExtendingModule, \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ExecutableModule
{
    use \Syde\Vendor\Zettle\Inpsyde\Modularity\Module\ModuleClassNameIdTrait;
    public function services(): array
    {
    }
    public function extensions(): array
    {
    }
    public function run(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): bool
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container
     *
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    public function registerAssets(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): void
    {
    }
    /**
     * @param \Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container
     *
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    public function registerMetaboxOrchestration(\Syde\Vendor\Zettle\Psr\Container\ContainerInterface $container): void
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
    private string $basePath;
    private string $baseUrl;
    private string $basename;
    private array $data;
    private bool $debug;
    private ?int $lastUpdateTimestamp = null;
    /**
     * @param string $pluginFile
     */
    public function __construct(string $pluginFile)
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
    public function lastUpdateTimestamp(): ?int
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Validation;

interface ValidatorInterface
{
    /**
     * phpcs:disable Syde.Functions.ArgumentTypeDeclaration.NoArgumentType
     * @param mixed $value
     */
    public function validate($value): void;
}
class CallbackValidator implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Validation\ValidatorInterface
{
    /**
     * @var callable
     */
    private $callback;
    public function __construct(callable $callback)
    {
    }
    /**
     * phpcs:disable Syde.Functions.ArgumentTypeDeclaration.NoArgumentType
     * @param mixed $value
     */
    public function validate($value): void
    {
    }
}
class CompositeValidator implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Validation\ValidatorInterface
{
    /**
     * @var ValidatorInterface[]
     */
    private array $validators;
    /**
     * @param ValidatorInterface[] $validators
     */
    public function __construct(array $validators)
    {
    }
    /**
     * phpcs:disable Syde.Functions.ArgumentTypeDeclaration.NoArgumentType
     * @param mixed $value
     */
    public function validate($value): void
    {
    }
}
/**
 * Checks that PHP extensions (functions) are available.
 */
class RequiredExtensionsValidator implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Validation\ValidatorInterface
{
    /**
     * @var array<string, string>
     */
    protected array $extensions;
    /**
     * @param array<string, string> $extensions Keys - functions like {@see mb_strtolower()}',
     * values - human-friendly names.
     */
    public function __construct(array $extensions)
    {
    }
    /**
     * phpcs:disable Syde.Functions.ArgumentTypeDeclaration.NoArgumentType
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
class RequiredPluginsValidator implements \Syde\Vendor\Zettle\Syde\PayPal\PointOfSale\Validation\ValidatorInterface
{
    /**
     * @var array<string, string>
     */
    protected array $plugins;
    /**
     * @param array<string, string> $plugins Keys - paths like 'woocommerce/woocommerce.php',
     * values - human-friendly names.
     */
    public function __construct(array $plugins)
    {
    }
    /**
     * phpcs:disable Syde.Functions.ArgumentTypeDeclaration.NoArgumentType
     */
    public function validate($value): void
    {
    }
    protected function getErrorMessageTemplate(array $missingPlugins): string
    {
    }
}
class ValidationFailedException extends \RuntimeException
{
    private array $errors;
    public function __construct(string $message = '', array $errors = [])
    {
    }
    public function getValidationErrors(): array
    {
    }
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale;

/**
 * Display an error message in the WP admin
 *
 * @param string $message The message content
 *
 * @return void
 */
function errorNotice(string $message): void
{
}
namespace Syde\Vendor\Zettle\Syde\PayPal\PointOfSale;

function init(): ?\Syde\Vendor\Zettle\Inpsyde\Modularity\Package
{
}